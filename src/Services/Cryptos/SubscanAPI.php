<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;
use App\Services\Utilities;

class SubscanAPI 
{
    public function __construct(Utilities $utilities) 
    {
        $this->utilities = $utilities;
        $this->endpoints = array(
            "DOT" => "polkadot",
            "KSM" => "kusama",
            "ACA" => "acala",
            "ASTR" => "astar",
            "AIR" => "altair",
            "BNC" => "bifrost",
            "KMA" => "calamari",
            "CFG" => "centrifuge",
            "PCX" => "chainx",
            "CLV" => "clv",
            "CRU" => "crust",
            "CRAB" => "crab",
            "RING" => "darwinia",
            "EDG" => "edgeware",
            "EQ" => "equilibrium",
            "GENS" => "genshiro",
            "TEER" => "integritee",
            "interBTC" => "interlay",
            "KAR" => "karura",
            "KINT" => "kintsugi",
            "PHA" => "khala",
            "KILT" => "spiritnet",
            "LIT" => "litmus",
            "GLMR" => "moonbeam",
            "MOVR" => "moonriver",
            "NODL" => "noddle",
            "PARA" => "parallel",
            "HKO" => "parallel-heiko",
            "PICA" => "picasso",
            "PDEX" => "polkadex",
            "QTZ" => "quartz",
            "SKU" => "sakura",
            "SDN" => "shiden",
            "XOR" => "sora",
            "SGB" => "subgame",
            "ZTG" => "zeitgeist",
            /*
            "CSM" => "shadow",
            "XRT" => "robonomics",
            "SUB" => "subsocial",
            "BSX" => "basilisk",
            */
        );
        $this->decimals = array(
            "DOT" => 10,
            "KSM" => 12,
            "ACA" => 12,
            "ASTR" => 18,
            "AIR" => 18,
            "BNC" => 12,
            "KMA" => 12,
            "CFG" => 18,
            "PCX" => 8,
            "CLV" => 18,
            "CRU" => 12,
            "CRAB" => 18,
            "RING" => 9,
            "EDG" => 18,
            "EQ" => 0,
            "GENS" => 9,
            "TEER" => 12,
            "interBTC" => 10,
            "KAR" => 12,
            "LDOT" => 10,
            "LCDOT" => 10,
            "PHA" => 12,
            "KINT" => 12,
            "KILT" => 15,
            "LIT" => 12,
            "GLMR" => 18,
            "MOVR" => 18,
            "NODL" => 11,
            "PARA" => 12,
            "HKO" => 12,
            "PICA" => 12,
            "PDEX" => 12,
            "QTZ" => 18,
            "SKU" => 0,
            "SDN" => 18,
            "TAI" => 12,
            "XOR" => 12,
            "SGB" => 0,
            "ZTG" => 10,
            /*
            "CSM" => "shadow",
            "XRT" => "robonomics",
            "SUB" => "subsocial",
            "BSX" => "basilisk",
            */
        );
    }

    /**
	* Return an array that contains Substrate data of the user
	*
	* @param string $address
	* @return array
	*/
	public function getWalletData($address) {
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
        foreach ($this->endpoints as $key => $value) {
            $curl = curl_init();
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://'.$value.'.api.subscan.io/api/v2/scan/search?x-api-key=0c2390727833b52524a25c50aa374fbb',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS =>'{
                    "key": "'.$address.'"
                }',
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json'
                ),
            ));
            $response = curl_exec($curl);
            $response = json_decode($response, true);
            curl_close($curl);
            if ($response != NULL && $response["message"] == "Success") {
                $data = $response["data"]["account"];
                $wallet = 0; $locked = 0; $staking = 0;
                if ($data["balance_lock"] != 0) { 
                    if ($data["vesting"] == null) { 
                        $staking = $data["balance_lock"];
                        $wallet = $data["balance"] - $staking;
                    }
                    else {
                        $locked = $data["balance_lock"];
                        //$locked = $data["vesting"]["total_locked"];
                        //$staking = $data["balance_lock"] - $locked;
                        $wallet = $data["balance"] - $locked;
                    }
                }
                else { $wallet =  $data["balance"]; }
                //if($this->endpoints[$key] == "khala") { dd($data); }
                if (!isset($cryptos[$key])) {
                    if ($data["balance"] != 0 || $data["balance_lock"] != 0) { 
                        $asset = $crypto;
                        $asset['id'] = $key;
                        $asset['wallet'] = $wallet;
                        $asset['locked'] = $locked;
                        $asset['staking'] = $staking;
                        $platform = $platforms;
                        $platform['wallet'] = $wallet;
                        $platform['locked'] = $locked;
                        $platform['staking'] = $staking;
                        $asset['platformList'] = $this->endpoints[$key];
                        $asset['platforms']['Substrate'][0][$this->endpoints[$key]] = $platform;
                        $cryptos[$key]=$asset;
                    }
                }
                else {
                    if ($data["balance"] != 0 || $data["balance_lock"] != 0) { 
                        $cryptos[$key]['wallet'] += $wallet;
                        $cryptos[$key]['locked'] += $locked;
                        $cryptos[$key]['staking'] += $staking;
                        $cryptos[$key]['platformList'] .= ';'.$this->endpoints[$key];
                        $platform = $platforms;
                        $platform['wallet'] = $wallet;
                        $platform['locked'] = $locked;
                        $platform['staking'] = $staking;
                        $cryptos[$key]['platforms']['Substrate'][0][$this->endpoints[$key]] = $platform;
                    }
                }
                if (isset($data['derive_token']) && !empty($data['derive_token'])) {
                    foreach ($data['derive_token'] as $k => $v) {
                        if (isset($cryptos[$k])) {
                            if($v['balance'] != 0 || $v['locked'] != 0) {
                                $cryptos[$k]['wallet'] += $v['balance']/$this->utilities->mathPower(10,$this->decimals[$k]);
                                $cryptos[$k]['locked'] += $v['locked']/$this->utilities->mathPower(10,$this->decimals[$k]);
                                if($cryptos[$k]['platformList'] == "") { $cryptos[$k]['platformList'] = $this->endpoints[$k]; }
                                else { $cryptos[$k]['platformList'] .= ';'.$this->endpoints[$key]; }
                                $platform = $platforms;
                                $platform['wallet'] = $v['balance']/$this->utilities->mathPower(10,$this->decimals[$k]);
                                $platform['locked'] = $v['locked']/$this->utilities->mathPower(10,$this->decimals[$k]);
                                $cryptos[$k]['platforms']['Substrate'][0][$this->endpoints[$key]] = $platform;
                            }
                        }
                        else {
                            if($v['balance'] != 0 || $v['locked'] != 0) {
                                $asset = $crypto;
                                $asset['id'] = $k;
                                $asset['wallet'] = $v['balance']/$this->utilities->mathPower(10,$this->decimals[$k]);
                                $asset['locked'] = $v['locked']/$this->utilities->mathPower(10,$this->decimals[$k]);
                                $platform = $platforms;
                                $platform['wallet'] = $v['balance']/$this->utilities->mathPower(10,$this->decimals[$k]);
                                $platform['locked'] = $v['locked']/$this->utilities->mathPower(10,$this->decimals[$k]);
                                $asset['platformList'] = $this->endpoints[$key];
                                $asset['platforms']['Substrate'][0][$this->endpoints[$key]] = $platform;
                                $cryptos[$k]=$asset;
                            }
                        }
                    }
                }
            }
            usleep(100000);
        }
        return $cryptos;
	}

    /**
	* Return an array that contains the history on Substrate of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}

    
}

?>