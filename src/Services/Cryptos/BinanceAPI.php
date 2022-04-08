<?php

namespace App\Services\Cryptos;

use ccxt\ccxt;
use App\Entity\UserPlatform;
use App\Services\Cryptos\Correspondence;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class BinanceAPI 
{
    /**
	* Return an array that contains Binance data of the user
	*
	* @param string $key
	* @param string $secret
	* @return array
	*/
	public function getWalletData($key, $secret) {
        $cryptos = array();
        $crypto = array(
            'id' => '', 
            'name' => '', 
            'price' => 0, 
            'wallet' => 0, 
            'locked' => 0, 
            'staking' => 0, 
            'pools' => 0, 
            'farming' => 0, 
            'lending' => 0, 
            'deposit' => 0, 
            'yield' => 0, 
            'rewards' => 0, 
            'platformList' => '',
            'platforms' => array()
        );
        $platforms = array(
            'protocol' => '',
            'wallet' => 0,
            'locked' => 0,
            'staking' => array('total'=>0), 
            'pools' => array('total'=>0),
            'farming' => array('total'=>0),
            'lending' => array('total'=>0), 
            'deposit' => array('total'=>0), 
            'yield' => array('total'=>0), 
            'rewards' => array('total'=>0)
        );
        $timestamp = round(microtime(true) * 1000);
        $query_string = "type=SPOT&timestamp=".$timestamp;
        $sign = hash_hmac('sha256', $query_string, $secret);
        $url = 'https://api.binance.com/sapi/v1/accountSnapshot?type=SPOT&timestamp='.$timestamp.'&signature='.$sign;
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'X-MBX-APIKEY: '.$key
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $datas = json_decode($response, true);
        foreach ($datas['snapshotVos'][0]['data']['balances'] as $token) {
            if($token['free'] != 0 || $token['locked'] != 0) {
                $asset = $crypto;
                $asset['id'] = $token['asset'];
                $asset['wallet'] = $token['free'];
                $asset['locked'] = $token['locked'];
                $platform = $platforms;
                $platform['wallet'] = $token['free'];
                $platform['locked'] = $token['locked'];
                $asset['platformList'] = 'binance';
                $asset['platforms']['Binance'][0] = $platform;
                $cryptos[$token['asset']]=$asset;
            }
        }
        

        return $cryptos;
    }

    /**
	* Return an array that contains the history on Binance of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}
}

?>