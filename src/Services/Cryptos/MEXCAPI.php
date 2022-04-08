<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;

class MEXCAPI {

    /**
	* Return an array that contains MEXC data of the user
	*
	* @param string $key
	* @param string $secret
	* @param string $passphrase
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
        $uri = '/open/api/v2/account/info';
		$timestamp = time()*1000;
		$presign = $key.$timestamp;
		$sign = hash_hmac('sha256', $presign, $secret);
		$url = 'https://www.mexc.com'.$uri;

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
				'ApiKey: '.$key,
				'Request-Time: '.$timestamp,
				'Signature: '.$sign
			),
		));

		try {
			$response = curl_exec($curl);
			curl_close($curl);
			$datas = json_decode($response, true);
			foreach($datas['data'] as $key=>$token) {
				$asset = $crypto;
                $asset['id'] = $key;
                $asset['wallet'] = $token['available'];
                $asset['locked'] = $token['frozen'];
                $platform = $platforms;
                $platform['wallet'] = $token['available'];
                $platform['locked'] = $token['frozen'];
				$asset['platformList'] = 'mexc';
                $asset['platforms']['MEXC'][0] = $platform;
                $cryptos[$key]=$asset;
			}
			return $cryptos;
		} catch (\Throwable $th) {
			curl_close($curl);
			$errors = array("errors", json_decode($response, true));
			return $errors;
		}
			
	}

    /**
	* Return an array that contains the history on MEXC of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}
}

?>