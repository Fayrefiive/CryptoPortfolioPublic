<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;

class ZapperAPI {

    /**
	* Return an array that contains Metamask data of the user
	*
	* @param string $address
	* @return array
	*/
	public function getWalletData($address) {
        $network = array("ethereum", "binance-smart-chain", "optimism", "polygon", "fantom", "avalanche", "arbitrum", "celo", "harmony", "moonriver");
        $cryptos = array();
        
        foreach ($network as $net)
        {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://api.zapper.fi/v1/protocols/tokens/balances?addresses%5B0%5D=' . $address . '&api_key=96e0cc51-a62e-42ca-acee-910ea7d2a241&network=' . $net,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
              ));
            $response = curl_exec($curl);
            $response = json_decode($response, true);
            curl_close($curl);

            if (!empty($response[strtolower($address)]["products"])) {
                $cryptos[$net] = array();
                foreach ($response[strtolower($address)]["products"][0]["assets"] as $asset) {
                    $crypto = array('id' => $asset["symbol"], 'name' => '', 'price' => 0, 'wallet' => $asset["balance"], 'locked' => 0, 'staking' => 0, 'pool' => 0, 'platform' => 'metamask/' . $asset["network"]);
                    $cryptos[$net][$asset["symbol"]] = $crypto;
                }
            }
        }
        return $cryptos;
	}

    /**
	* Return an array that contains the history on Metamask of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}
}

?>