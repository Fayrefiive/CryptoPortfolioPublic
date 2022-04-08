<?php

namespace App\Services\Cryptos;

use App\Services\Cryptos\Correspondence;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CoinGeckoAPI extends AbstractController {

    /**
     * Get Information about cryptos (Price, Description, Market Cap, ...)
     * 
     * @param $assets
     * @param $request
     * @param $name
     * @return $assets
     */
    public function getInformationAboutCryptos($assets, Request $request, $name = null) {
        $client = new CoinGeckoClient();
        $correspondence = new Correspondence();
        try {
            foreach ($assets as $key => $value) {
                if ($name == "Metamask") {
                    if (array_key_exists($key, $assets) && !empty($value)) {
                        foreach ($assets[$key] as $k => $v) {
                            $crypto = $correspondence->getCorrespondence($k);
                            if ($crypto != null) {
                                $assets[$key][$k]['name'] = $crypto['name'];
                                if ($k != "EUR" && $k != "USD") {
                                    try {
                                        $about = $client->coins()->getCoin($crypto['id'], ['tickers' => 'false', 'market_data' => 'true']);                       
                                        $assets[$key][$k]['contract_address'] = "";
                                        if (isset($about['contract_address'])) {
                                            $assets[$key][$k]['contract_address'] = $about['contract_address'];
                                        }
                                        $price = $about['market_data']['current_price'];
                                        $image = $about['image']['large'];
                                        $ath = $about['market_data']['ath'];
                                        $atl = $about['market_data']['atl'];
                                        $price_change_24h = $about['market_data']['price_change_percentage_24h'];
                                        $price_change_7d = $about['market_data']['price_change_percentage_7d'];
                                        $price_change_30d = $about['market_data']['price_change_percentage_30d'];
                                        $market_cap = $about['market_data']['market_cap'];
                                        $circulating_supply = $about['market_data']['circulating_supply'];
                                        $total_supply = $about['market_data']['max_supply'];
                                    } catch (\Throwable $th) {
                                        $price = "NO_DATA_FOUND";
                                        $image = "NO_DATA_FOUND";
                                        $ath = "NO_DATA_FOUND";
                                        $atl = "NO_DATA_FOUND";
                                        $price_change_24h = "NO_DATA_FOUND";
                                        $price_change_7d = "NO_DATA_FOUND";
                                        $price_change_30d = "NO_DATA_FOUND";
                                        $market_cap = "NO_DATA_FOUND";
                                        $circulating_supply = "NO_DATA_FOUND";
                                        $total_supply = "NO_DATA_FOUND";
                                    }
                                    $assets[$key][$k]['price'] = $price;
                                    if (isset($crypto['social_network'])) { $assets[$key][$k]['social_network'] = $crypto['social_network']; }
                                    else { $assets[$key][$k]['social_network'] = "NO_DATA_FOUND"; }
                                    $assets[$key][$k]['image'] = $image;
                                    $assets[$key][$k]['description'] = $crypto['description'];
                                    $assets[$key][$k]['ath'] = $ath;
                                    $assets[$key][$k]['atl'] = $atl;
                                    $assets[$key][$k]['price_change_24h'] = $price_change_24h;
                                    $assets[$key][$k]['price_change_7d'] = $price_change_7d;
                                    $assets[$key][$k]['price_change_30d'] = $price_change_30d;
                                    if ($market_cap == "0") { $market_cap = "NO_DATA_FOUND"; }
                                    $assets[$key][$k]['market_cap'] = $market_cap;
                                    $assets[$key][$k]['circulating_supply'] = $circulating_supply;
                                    $assets[$key][$k]['total_supply'] = $total_supply;
                                }
                                else { $assets[$key][$k]['market_cap'] = "NO_DATA_FOUND"; }
                            }
                        }
                    }
                }
                else {
                    if ($key != "EUR" && $key != "USD") {
                        $assets[$key]['contract_address'] = "";
                        $total_supply = "0";
                        try {
                            $crypto = $correspondence->getCorrespondence($key);
                            $assets[$key]['name'] = $crypto['name'];
                            $about = $client->coins()->getCoin($crypto['id'], ['tickers' => 'false', 'market_data' => 'true']);
                            $price = $about["market_data"]["current_price"];
                            $image = $about['image']['large'];
                            if (isset($about['contract_address'])) {
                                $assets[$key]['contract_address'] = $about['contract_address'];
                            }
                            $ath = $about['market_data']['ath'];
                            $atl = $about['market_data']['atl'];
                            $price_change_24h = $about['market_data']['price_change_percentage_24h'];
                            $price_change_7d = $about['market_data']['price_change_percentage_7d'];
                            $price_change_30d = $about['market_data']['price_change_percentage_30d'];
                            $market_cap = $about['market_data']['market_cap'];
                            $circulating_supply = $about['market_data']['circulating_supply'];
                            if ($about['market_data']['total_supply'] !== null ) { $total_supply = $about['market_data']['total_supply']; }
    
                        } catch (\Throwable $th) {
                            $price = "NO_DATA_FOUND";
                            $image = "NO_DATA_FOUND";
                            $ath = "NO_DATA_FOUND";
                            $atl = "NO_DATA_FOUND";
                            $price_change_24h = "NO_DATA_FOUND";
                            $price_change_7d = "NO_DATA_FOUND";
                            $price_change_30d = "NO_DATA_FOUND";
                            $market_cap = "NO_DATA_FOUND";
                            $circulating_supply = "NO_DATA_FOUND";
                            $total_supply = "NO_DATA_FOUND";
                        }
                        $assets[$key]['price'] = $price;
                        if (isset($crypto['social_network'])) { $assets[$key]['social_network'] = $crypto['social_network']; }
                        else { $assets[$key]['social_network'] = "NO_DATA_FOUND"; }
                        $assets[$key]['image'] = $image;
                        $assets[$key]['description'] = "CRYPTO_DESCRIPTION_".strtoupper($key);
                        $assets[$key]['ath'] = $ath;
                        $assets[$key]['atl'] = $atl;
                        $assets[$key]['price_change_24h'] = $price_change_24h;
                        $assets[$key]['price_change_7d'] = $price_change_7d;
                        $assets[$key]['price_change_30d'] = $price_change_30d;
                        if ($market_cap == "0") { $market_cap = "NO_DATA_FOUND"; }
                        $assets[$key]['market_cap'] = $market_cap;
                        $assets[$key]['circulating_supply'] = $circulating_supply;
                        $assets[$key]['total_supply'] = $total_supply;
                    }
                    else { $assets[$key]['market_cap'] = "NO_DATA_FOUND"; }
                }
            }
            return $assets;
        } catch (\Throwable $th) {
            dd("COINGECKOAPI - getInformationAboutCryptos()", $th);
        }
    }

    /**
     * Get Total Balance of the crypto portfolio
     * 
     * @param $assets
     * @return $total_balance
     */
    public function getTotalBalance($assets) {
        $primary_balance = 0;
        $secondary_balance = 0;
        $primary = strtolower($this->getUser()->getPrimaryCurrency()->getAcronym());
        $secondary = strtolower($this->getUser()->getSecondaryCurrency()->getAcronym());
        try {
            foreach ($assets as $key => $value) {
                if ($key == "USD" || $key == "usd" || $key == "EUR" || $key == "eur") {
                    $primary_balance += ((float)$value['price'] * (float)$value['wallet']) + ((float)$value['price'] * (float)$value['locked']);
                    $secondary_balance += ((float)$value['price'] * (float)$value['wallet']) + ((float)$value['price'] * (float)$value['locked']);
                }
                else {
                    if ($value["price"] != "NO_DATA_FOUND") {
                        $primary_balance += ((float)$value['price'][$primary] * (float)$value['wallet']) + 
                                            ((float)$value['price'][$primary] * (float)$value['staking']) + 
                                            ((float)$value['price'][$primary] * (float)$value['locked']) + 
                                            ((float)$value['price'][$primary] * (float)$value['farming']) + 
                                            ((float)$value['price'][$primary] * (float)$value['rewards']) + 
                                            ((float)$value['price'][$primary] * (float)$value['yield']) + 
                                            ((float)$value['price'][$primary] * (float)$value['deposit']) + 
                                            ((float)$value['price'][$primary] * (float)$value['lending']) + 
                                            ((float)$value['price'][$primary] * (float)$value['pools']);

                        $secondary_balance += ((float)$value['price'][$secondary] * (float)$value['wallet']) + 
                                            ((float)$value['price'][$secondary] * (float)$value['staking']) + 
                                            ((float)$value['price'][$secondary] * (float)$value['locked']) + 
                                            ((float)$value['price'][$secondary] * (float)$value['farming']) + 
                                            ((float)$value['price'][$secondary] * (float)$value['rewards']) + 
                                            ((float)$value['price'][$secondary] * (float)$value['yield']) + 
                                            ((float)$value['price'][$secondary] * (float)$value['deposit']) + 
                                            ((float)$value['price'][$secondary] * (float)$value['lending']) + 
                                            ((float)$value['price'][$secondary] * (float)$value['pools']);
                    }
                }
                
            }
            $total_balance = array(
                "primary" => $primary_balance,
                "secondary" => $secondary_balance
            );
            return $total_balance;
        } catch (\Throwable $th) {
            dd("COINGECKOAPI - getTotalBalance()", $th);
        }
    }
}