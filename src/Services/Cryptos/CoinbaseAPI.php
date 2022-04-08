<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;
use App\Services\Cryptos\Correspondence;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class CoinbaseAPI {

    /**
	* Return an array that contains Coinbase data of the user
	
	* @param string $key
	* @param string $secret
	* @return array
	*/
	public function getWalletData($key, $secret) 
	{
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
		date_default_timezone_set("UTC");

		// CB-ACCESS-TIMESTAMP
		$cb_access_timestamp = time();
	
		// CB-ACCESS-KEY
		$cb_access_key = $key;
	
		// CB-ACCESS-SIGN
		$method = 'GET';
		$request_path = '/v2/accounts';
		$body = '';
		$pre_hash = $cb_access_timestamp . $method . $request_path . $body;
	
		$cb_access_sign = hash_hmac('sha256', $pre_hash, $secret);
	
		// Start request
		$ch = curl_init("https://api.coinbase.com/v2/accounts");
	
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
		$headers = array();
		$headers[] = "CB-ACCESS-KEY:  $cb_access_key";
		$headers[] = "CB-ACCESS-SIGN:  $cb_access_sign";
		$headers[] = "CB-ACCESS-TIMESTAMP:  $cb_access_timestamp";
	
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // CHANGE 2 - Need to use CURLOPT_HTTPHEADER. I was previously using CURLOPT_HEADER which was incorrect.
	
		//return the transfer as a string
	
		$response = curl_exec($ch);
	
		curl_close($ch);
	
		$datas = json_decode($response, true);
		foreach ($datas['data'] as $token) {
			if ((float)$token['balance']['amount'] != 0) {
				$asset = $crypto;
                $asset['id'] = $token['balance']['currency'];
                $asset['wallet'] = $token['balance']['amount'];
                $platform = $platforms;
                $platform['wallet'] = $token['balance']['amount'];
				$asset['platformList'] = 'coinbase';
                $asset['platforms']['Coinbase'][0] = $platform;
                $cryptos[$token['balance']['currency']]=$asset;
			}
		}
		return $cryptos;
	}

    /**
	* Return an array that contains the history on Coinbase of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}
}

?>