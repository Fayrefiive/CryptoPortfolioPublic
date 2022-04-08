<?php

namespace App\Controller;

use App\Entity\Platform;
use App\Services\Utilities;
use App\Entity\UserPlatform;
use App\Form\UserPlatformType;
use App\Services\Cryptos\GateAPI;
use App\Services\Cryptos\MEXCAPI;
use App\Services\Cryptos\HuobiAPI;
use App\Services\Cryptos\KrakenAPI;
use App\Services\Cryptos\KuCoinAPI;
use App\Services\Cryptos\DebankAPI;
use App\Services\Cryptos\SubscanAPI;
use App\Services\Cryptos\BinanceAPI;
use App\Services\Cryptos\BittrexAPI;
use App\Services\Cryptos\CoinbaseAPI;
use App\Services\Cryptos\CoinGeckoAPI;
use App\Services\Cryptos\MergeCryptos;
use App\Services\Cryptos\ChartJS;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RequestStack;

class AjaxController extends AbstractController
{
    public function __construct(BinanceAPI      $binance,
                                BittrexAPI      $bittrex,
                                CoinbaseAPI     $coinbase,
                                GateAPI         $gate,
                                HuobiAPI        $huobi,
                                KrakenAPI       $kraken,
                                KuCoinAPI       $kucoin,
                                MEXCAPI         $mexc,
                                DebankAPI       $debank,
                                SubscanAPI      $subscan,
                                CoinGeckoAPI    $coingecko,
                                MergeCryptos    $merge,
                                ChartJS         $chart,
                                Utilities       $utilities)
    {
        $this->binance = $binance;
        $this->bittrex = $bittrex;
        $this->coinbase = $coinbase;
        $this->gate = $gate;
        $this->huobi = $huobi;
        $this->kraken = $kraken;
        $this->kucoin = $kucoin;
        $this->mexc = $mexc;
        $this->debank = $debank;
        $this->subscan = $subscan;
        $this->coingecko = $coingecko;
        $this->merge = $merge;
        $this->chart = $chart;
        $this->utilities = $utilities;
    }

    /**
     * @Route("/portfolio/getAllCryptos", name="app_get_all_cryptos", methods={"POST"})
     */
    public function getAllCryptos(Request $request)
    {
        $assets = array();
        $errors = array();
        $i = 0;
        $user = $this->getUser();
        $userPlatforms = $user->getUserPlatforms();
        foreach ($userPlatforms as $key => $value) {
            $iv = $value->getVector();
            $service = strtolower($value->getPlatform()->getName());
            switch ($service) {
                case 'metamask':
                    try {
                        $balance = $this->debank->getWalletData(
                            openssl_decrypt($value->getAddress(), "aes-256-cbc-hmac-sha256", $_ENV['APP_SECRET'], 0, $iv)
                        );
                    } catch (\Throwable $th) {
                        dd("AJAXCONTROLLER - debank", $th);
                    }
                    break;
                case 'substrate':
                    try {
                        $balance = $this->subscan->getWalletData(
                            openssl_decrypt($value->getAddress(), "aes-256-cbc-hmac-sha256", $_ENV['APP_SECRET'], 0, $iv)
                        );
                    } catch (\Throwable $th) {
                        dd("AJAXCONTROLLER - subscan", $th);
                    }
                    break;
                case 'kucoin':
                    try {
                        $balance = $this->$service->getWalletData(
                            openssl_decrypt($value->getPublicKey(), "aes-256-cbc-hmac-sha256", $_ENV['APP_SECRET'], 0, $iv),
                            openssl_decrypt($value->getSecretKey(), "aes-256-cbc-hmac-sha256", $_ENV['APP_SECRET'], 0, $iv),
                            openssl_decrypt($value->getPassphrase(), "aes-256-cbc-hmac-sha256", $_ENV['APP_SECRET'], 0, $iv)
                        );
                    } catch (\Throwable $th) {
                        dd("AJAXCONTROLLER - kucoin", $th);
                    }
                    
                    break;
                default:
                    try {
                        $balance = $this->$service->getWalletData(
                            openssl_decrypt($value->getPublicKey(), "aes-256-cbc-hmac-sha256", $_ENV['APP_SECRET'], 0, $iv),
                            openssl_decrypt($value->getSecretKey(), "aes-256-cbc-hmac-sha256", $_ENV['APP_SECRET'], 0, $iv)
                        );
                    } catch (\Throwable $th) {
                        dd("AJAXCONTROLLER - default", $service, $th);
                    }
                    
                    break;
            }
            if(!isset($balance[0])) {
                $balance = $this->coingecko->getInformationAboutCryptos($balance, $request, $value->getPlatform()->getName());
                $assets = $this->merge->mergeCryptos($assets, $balance, $value->getPlatform()->getName());
                $i++;
            }
            else {
                array_push($errors, array($service => $balance[1]));
            }
        }
        $assets = $this->coingecko->getInformationAboutCryptos($assets, $request);
        $assets = $this->merge->getBalanceSorter($assets, "market_cap", "SORT_DESC");
        $total_balance =$this->coingecko->getTotalBalance($assets);
        $chart = $this->chart->getDonutsChart($assets);
        $result = array($assets, $total_balance, $chart, $errors);
        $response = new Response(json_encode($result));
        return $response;
    }

    /**
     * @Route("/portfolio/getCryptosByPlatform", name="app_get_cryptos_by_platform", methods={"POST"})
     */
    public function getCryptosByPlatform(Request $request)
    {
        $assets = array();
        $user = $this->getUser();
        $userPlatforms = $user->getUserPlatforms();
        $service = strtolower($request->get('service'));
        foreach ($userPlatforms as $key => $value) {
            if (strtolower($value->getPlatform()->getName()) == $service) {
                $iv = $value->getVector();
                $balance = $this->$service->getWalletData(
                    openssl_decrypt($value->getPublicKey(), "aes-256-cbc-hmac-sha256", $_ENV['APP_SECRET'], 0, $iv),
                    openssl_decrypt($value->getSecretKey(), "aes-256-cbc-hmac-sha256", $_ENV['APP_SECRET'], 0, $iv)
                );
                $assets = $this->merge->mergeCryptos($assets, $balance);
            }
        }
        $assets = $this->coingecko->getInformationAboutCryptos($assets, $request);
        $total_balance =$this->coingecko->getTotalBalance($assets);
        $result = array($assets, $total_balance);
        $response = new Response(json_encode($result));
        return $response;
    }
    /**
     * @Route("/portfolio/sortCryptosAssets", name="app_sort_cryptos_assets", methods={"POST"})
     */
    public function sortCryptosAssets(Request $request)
    {   
        $assets = $this->merge->getBalanceSorter($request->get('assets'), $request->get('sortBy'), $request->get('sort'));
        return new Response(json_encode($assets));
    }
    /**
     * @Route("/portfolio/getCurrency", name="app_get_currency", methods={"POST"})
     */
    public function getCurrency(RequestStack $requestStack)
    {
        $session = $requestStack->getSession();
        $currency = $session->get('currency');
        return new Response(json_encode($currency));
    }
    /**
     * @Route("/portfolio/setCurrency", name="app_set_currency", methods={"POST"})
     */
    public function setCurrency(RequestStack $requestStack, Request $request)
    {
        $currency = strtolower($request->get('currency'));
        $session = $requestStack->getSession();
        $session->set('currency', $currency);
        return new Response($currency);
    }
}

