<?php

namespace App\Services\Cryptos;

class MergeCryptos {

    /**
	* Return an array that contains all cryptos from user balance
	*
	* @param Array $assets
	* @param Array $balance
	* @param String $name
	* @return array
	*/
	public function mergeCryptos($assets, $balance, $name) {
		try {
			foreach ($balance as $key => $value) {
				if (array_key_exists($key, $assets)) {
					$assets[$key]['wallet'] 	+= $value['wallet'];
					$assets[$key]['staking'] 	+= $value['staking'];
					$assets[$key]['locked'] 	+= $value['locked'];
					$assets[$key]['pools'] 		+= $value['pools'];
					$assets[$key]['farming'] 	+= $value['farming'];
					$assets[$key]['deposit'] 	+= $value['deposit'];
					$assets[$key]['yield'] 		+= $value['yield'];
					$assets[$key]['lending'] 	+= $value['lending'];
					$assets[$key]['rewards'] 	+= $value['rewards'];
					if($assets[$key]['platformList'] == "") {
						$assets[$key]['platformList'] = $value['platformList'];
					}
					else {
						if(str_contains($value['platformList'], ';')) {
							$platforms = explode(';', $value['platformList']);
							foreach ($platforms as $platform) {
								if(!str_contains($assets[$key]['platformList'], $platform)) {
									$assets[$key]['platformList'] .= ';'.$platform;
								}
							}
						}
						else {
							if(!str_contains($assets[$key]['platformList'], $value['platformList'])) {
								$assets[$key]['platformList'] .= ';'.$value['platformList'];
							}
						}
					}
					foreach ($value['platforms'] as $k => $v) {
						if (!isset($assets[$key]['platforms'][$k])) { $assets[$key]['platforms'][$k] = array(); }
						array_push($assets[$key]['platforms'][$k], $v);
					}
				}
				else {
					$assets[$key] = $value;
				}
			}
			return $assets;
		} catch (\Throwable $th) {
			dd("MERGECRYPTOS - mergeCryptos()", $th);
		}
    }

	/**
	* Return an array that contains all cryptos from user balance sorted by $sort
	*
	* @param Array $assets
	* @param String $sort
	* @return array
	*/
	public function getBalanceSorter($assets, $sortBy, $sort) {
		try {
			$columnSorted = array_column($assets, $sortBy);
			if ($sort == "SORT_ASC") { array_multisort($columnSorted, SORT_ASC, $assets); }
			else { array_multisort($columnSorted, SORT_DESC, $assets); }
			return $assets;
		} catch (\Throwable $th) {
			dd("MERGECRYPTOS - getBalanceSorter()", $assets);
		}
		
	}

}