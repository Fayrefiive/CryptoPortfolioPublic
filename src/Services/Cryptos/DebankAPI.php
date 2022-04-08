<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;

class DebankAPI {

    /**
	* Return an array that contains Metamask data of the user
	*
	* @param string $address
	* @return array
	*/
	public function getWalletData($address) {
        $cryptos = array();
        $cChain = curl_init();
        $optionChain = array(
            CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => '', CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_URL => 'https://openapi.debank.com/v1/chain/list'
        );
        curl_setopt_array($cChain, $optionChain);
        $chains = json_decode(curl_exec($cChain), true);
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
            'platforms' => array('Metamask' => array())
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
        foreach ($chains as $chain) {
            $cToken = curl_init();
            $cProtocol = curl_init();

            $optionsToken = array(
                CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => '', CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_URL => 'https://openapi.debank.com/v1/user/token_list?id='.$address.'&chain_id='.$chain['id']
            );
            $optionsProtocols = array(
                CURLOPT_RETURNTRANSFER => true, CURLOPT_ENCODING => '', CURLOPT_MAXREDIRS => 10, CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true, CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_URL => 'https://openapi.debank.com/v1/user/complex_protocol_list?id='.$address.'&chain_id='.$chain['id']
            );

            curl_setopt_array($cToken, $optionsToken);
            curl_setopt_array($cProtocol, $optionsProtocols);

            $tokens = json_decode(curl_exec($cToken), true);
            $protocols = json_decode(curl_exec($cProtocol), true);

            curl_close($cToken);
            curl_close($cProtocol);

            if (!empty($tokens)) {
                foreach ($tokens as $token) {
                    if ($token['is_wallet'] == true) {
                        if (strlen($token['symbol']) >= 10) { $symbol = $token['optimized_symbol']; }
                        else if ($token['name'] == "UkraineDAO Flag NFT") { $symbol = "LOVE"; }
                        else { $symbol = $token['symbol']; }
                        $platform = $platforms;
                        
                        if (isset($cryptos[$symbol])) {
                            if (isset($cryptos[$symbol]['platforms']['Metamask'][0][$chain['name']])) { $cryptos[$symbol]['platforms']['Metamask'][0][$chain['name']]['wallet'] += $token['amount']; }
                            else { 
                                $cryptos[$symbol]['platformList'] .= ';'.strtolower($chain['name']);
                                $cryptos[$symbol]['platforms']['Metamask'][0][$chain['name']] = $platform;
                                $cryptos[$symbol]['platforms']['Metamask'][0][$chain['name']]['wallet'] += $token['amount'];
                            }
                        }
                        else { 
                            $cryptos[$symbol] = $crypto; 
                            $cryptos[$symbol]['id'] = $symbol;
                            $cryptos[$symbol]['wallet'] = $token['amount'];
                            $cryptos[$symbol]['platformList'] = strtolower($chain['name']);
                            $cryptos[$symbol]['platforms']['Metamask'][0][$chain['name']] = array();
                            $platform['wallet'] = $token['amount'];
                            $cryptos[$symbol]['platforms']['Metamask'][0][$chain['name']] = $platform;
                        }
                    }
                }
            }
            if (!empty($protocols)) {
                foreach ($protocols as $protocol) {
                    $name = $protocol['name'];
                    foreach ($protocol['portfolio_item_list'] as $portfolioListItem) {
                        $type = strtolower($portfolioListItem["name"]);
                        if (isset($portfolioListItem['detail']['supply_token_list'])) { $supplyList = $portfolioListItem['detail']['supply_token_list']; }
                        else if (isset($portfolioListItem['detail']['token_list'])) { $supplyList = $portfolioListItem['detail']['token_list']; }
                        else { $supplyList = $portfolioListItem['detail']; }
                        if (isset($portfolioListItem['detail']['reward_token_list'])) { $rewardsList = $portfolioListItem['detail']['reward_token_list']; }
                        else { $rewardsList = array(); }
                        $elements = count($supplyList);
                        if (($type == "staked" && $elements > 1) || $type == "liquidity pool") { $type = "pools"; }
                        else if ($type == "staked") { $type = "staking"; }
                        foreach ($supplyList as $key => $supply) {
                            if ($key == "end_at") { break; }
                            if (!isset($cryptos[$supply['symbol']])) {
                                $cryptos[$supply['symbol']] = $crypto;
                                $cryptos[$supply['symbol']]['platformList'] = strtolower($name);
                                $cryptos[$supply['symbol']]['id'] = $supply['symbol'];
                            }
                            else {
                                if(!str_contains($cryptos[$supply['symbol']]['platformList'], strtolower($name))) {
                                    $cryptos[$supply['symbol']]['platformList'] .= ';'.strtolower($name);
                                }
                            }
                        }
                        foreach ($rewardsList as $reward) {
                            if (!isset($cryptos[$reward['symbol']])) {
                                $cryptos[$reward['symbol']] = $crypto;
                                $cryptos[$reward['symbol']]['platformList'] = strtolower($name);
                                $cryptos[$reward['symbol']]['id'] = $reward['symbol'];
                            }
                            else {
                                if(!str_contains($cryptos[$reward['symbol']]['platformList'], strtolower($name))) {
                                    $cryptos[$reward['symbol']]['platformList'] .= ';'.strtolower($name);
                                }
                            }
                        }
                        $rewards = array();
                        if(!empty($rewardsList)) {
                            foreach ($rewardsList as $reward) {
                                $rewards[$reward['symbol']] = $reward['amount'];
                                if (!isset($cryptos[$reward['symbol']]['platforms']['Metamask'][0][$chain['name']])) { 
                                    $cryptos[$reward['symbol']]['platforms']['Metamask'][0][$chain['name']] = $platforms;
                                    $cryptos[$reward['symbol']]['platforms']['Metamask'][0][$chain['name']]['protocol'] = $name;
                                }
                                $cryptos[$reward['symbol']]['platforms']['Metamask'][0][$chain['name']]['rewards']['total'] += $reward['amount']; 
                                $cryptos[$reward['symbol']]['rewards'] += $reward['amount']; 
                            }
                        }
                        switch ($type) {
                            case 'pools': 
                            case 'farming': 
                                switch ($type) {
                                    case 'pools': $from = "pool"; break;
                                    case 'farming': $from = "farm"; break;
                                }
                                if (count($supplyList) > 1) {
                                    if (!isset($cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']])) { 
                                        $cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']] = $platforms; 
                                    }
                                    if (!isset($cryptos[$supplyList[1]['symbol']]['platforms']['Metamask'][0][$chain['name']])) { 
                                        $cryptos[$supplyList[1]['symbol']]['platforms']['Metamask'][0][$chain['name']] = $platforms;
                                    }

                                    $cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']]['protocol'] = $name;
                                    $cryptos[$supplyList[1]['symbol']]['platforms']['Metamask'][0][$chain['name']]['protocol'] = $name;
                                    
                                    $pool1 = $supplyList[0]['symbol']."/".$supplyList[1]['symbol'];
                                    $pool2 = $supplyList[1]['symbol']."/".$supplyList[0]['symbol'];

                                    $amount1 = $supplyList[0]['amount'];
                                    $amount2 = $supplyList[1]['amount'];

                                    $cryptos[$supplyList[0]['symbol']][$type] += $amount1;
                                    $cryptos[$supplyList[1]['symbol']][$type] += $amount2;

                                    $cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']][$type]['total'] += $supplyList[0]['amount'];
                                    $cryptos[$supplyList[1]['symbol']]['platforms']['Metamask'][0][$chain['name']][$type]['total'] += $supplyList[1]['amount'];

                                    array_push($cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']][$type], array($from => array($pool1 => $amount1."/".$amount2),
                                                                                                                "rewards" => $rewards));
                                    array_push($cryptos[$supplyList[1]['symbol']]['platforms']['Metamask'][0][$chain['name']][$type], array($from => array($pool2 => $amount2."/".$amount1),
                                                                                                                "rewards" => $rewards));
                                }
                                else {
                                    if (!isset($cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']])) { 
                                        $cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']] = $platforms; 
                                        $cryptos[$supplyList[0]['symbol']]['platformList'] = strtolower($chain['name']);
                                    }
                                    $cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']]['protocol'] = $name;
                                    $cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']][$type]['total'] += $supplyList[0]['amount'];
                                    $cryptos[$supplyList[0]['symbol']][$type] += $supplyList[0]['amount'];
                                    array_push($cryptos[$supplyList[0]['symbol']]['platforms']['Metamask'][0][$chain['name']][$type], array($from => array($supplyList[0]['symbol'] => $supplyList[0]['amount']),
                                                                                                                "rewards"=> $rewards));
                                }
                                break; 
                            case 'staking': 
                            case 'lending':
                            case 'rewards':
                            case 'deposit':                        
                            case 'yield': 
                                if ($type == "deposit" || $type == "yield") { $type = "staking"; }
                                foreach ($supplyList as $supply) {
                                    if (!isset($cryptos[$supply['symbol']]['platforms']['Metamask'][0][$chain['name']])) { 
                                        $cryptos[$supply['symbol']]['platforms']['Metamask'][0][$chain['name']] = $platforms; 
                                    }
                                    $cryptos[$supply['symbol']][$type] += $supply['amount'];
                                    $cryptos[$supply['symbol']]['platforms']['Metamask'][0][$chain['name']]['protocol'] = $name;
                                    $cryptos[$supply['symbol']]['platforms']['Metamask'][0][$chain['name']][$type]['total'] += $supply['amount'];
                                }
                                break;                            
                            default: break;
                        }
                    }
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