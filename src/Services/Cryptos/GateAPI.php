<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;

class GateAPI {

    /**
	* Return an array that contains Gate data of the user
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
		$method = 'GET'; $uri = '/api/v4/spot/accounts'; $query_string = "";
		$timestamp = time();
		$presign = $method."\n".$uri."\n".$query_string."\n".hash('sha512', '')."\n".$timestamp;
		$sign = hash_hmac('sha512', $presign, $secret);
		$url = 'https://api.gateio.ws'.$uri;
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
				'KEY: '.$key,
				'Timestamp: '.$timestamp,
				'SIGN: '.$sign
			),
		));
	
		$response = curl_exec($curl);
		curl_close($curl);
	
		$datas = json_decode($response, true);
		foreach ($datas as $token) {
			$asset = $crypto;
			$asset['id'] = $token['currency'];
			$asset['wallet'] = $token['available'];
			$asset['locked'] = $token['locked'];
			$platform = $platforms;
			$platform['wallet'] = $token['available'];
			$platform['locked'] = $token['locked'];
			$asset['platformList'] = 'gate';
			$asset['platforms']['Gate'][0] = $platform;
			$cryptos[$token['currency']]=$asset;
		}
		return $cryptos;
	}

    /**
	* Return an array that contains the history on Gate of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}
}

?>