<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;

class HuobiAPI {

    /**
	* Return an array that contains Huobi data of the user
	*
	* @param string $key
	* @param string $secret
	* @param string $passphrase
	* @return array
	*/
	public function getWalletData($key, $secret) {

	}

    /**
	* Return an array that contains the history on Huobi of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}
}

?>