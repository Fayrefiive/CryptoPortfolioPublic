<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;

class BittrexAPI {

    /**
	* Return an array that contains Bittrex data of the user
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
		$timestamp = time()*1000;
		$url = 'https://api.bittrex.com/v3/balances';
		$content = ''; $contentHash = hash('sha512', $content); $method = 'GET';
		$presign = ($timestamp.$url.$method.$contentHash);
		$sign = hash_hmac('sha512', $presign, $secret);
		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => $method,
			CURLOPT_HTTPHEADER => array(
				"Accept: application/json",
				"Content-Type: application/json",
				"Api-Key: ".$key,
				"Api-Signature: ".$sign,
				"Api-Timestamp: ".$timestamp,
				"Api-Content-Hash: ".$contentHash
			),
		));
		$response = curl_exec($curl);
		curl_close($curl);
		$datas = json_decode($response, true);
		foreach($datas as $token) {
			if ((float)$token['total'] != 0 && $token['currencySymbol'] != "BTXCRD") {
				$locked = (float)$token['total'] - (float)$token['available'];
				$asset = $crypto;
                $asset['id'] = $token['currencySymbol'];
                $asset['wallet'] = $token['available'];
                $asset['locked'] = $locked;
                $platform = $platforms;
                $platform['wallet'] = $token['available'];
                $platform['locked'] = $locked;
				$asset['platformList'] = 'bittrex';
                $asset['platforms']['Bittrex'][0] = $platform;
                $cryptos[$token['currencySymbol']]=$asset;
			}
		}
		return $cryptos;
	}

    /**
	* Return an array that contains the history on Bittrex of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}
}

?>