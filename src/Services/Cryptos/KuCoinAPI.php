<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;

class KuCoinAPI {

    /**
	* Return an array that contains KuCoin data of the user
	*
	* @param string $key
	* @param string $secret
	* @param string $passphrase
	* @return array
	*/
	public function getWalletData($key, $secret, $passphrase) {
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
		$pass = base64_encode(hash_hmac('sha256', $passphrase, $secret, true));
		$timestamp = time()*1000;
		$presign = $timestamp."GET"."/api/v1/accounts";
		$sign = base64_encode(hash_hmac("sha256", $presign, $secret, true));

		$curl = curl_init();
		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://api.kucoin.com/api/v1/accounts",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => '',
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => 'GET',
			CURLOPT_HTTPHEADER => array(
				'Content-Type: application/json',
				"KC-API-KEY: " . $key,
				"KC-API-SIGN: " . $sign,
				"KC-API-TIMESTAMP: " . $timestamp,
				"KC-API-PASSPHRASE: " . $pass,
				"KC-API-KEY-VERSION: " . 2,
			),
		));
		$response = curl_exec($curl);
		curl_close($curl);
		$datas = json_decode($response, true);
		foreach ($datas['data'] as $token) {
			if ((float)$token['available'] != 0 || (float)$token['holds'] != 0) {
				$asset = $crypto;
                $asset['id'] = $token['currency'];
                $asset['wallet'] = $token['available'];
                $asset['locked'] = $token['holds'];
                $platform = $platforms;
                $platform['wallet'] = $token['available'];
                $platform['locked'] = $token['holds'];
				$asset['platformList'] = 'kucoin';
                $asset['platforms']['Kucoin'][0] = $platform;
                $cryptos[$token['currency']]=$asset;
			}
		}
		return $cryptos;
	}

    /**
	* Return an array that contains the history on KuCoin of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}
}

?>