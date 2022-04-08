<?php

namespace App\Services\Cryptos;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ChartJS extends AbstractController {

    public function getDonutsChart($assets) {
        $labels = array();
        $datas = array();
        $prices = array();
        $total = 0;
        foreach ($assets as $key=>$value) {
            if (isset($value['price']['usd'])) {
                if ($key == "USD") { $wallet_price = $value['wallet'] + $value['staking'] + $value['locked']; }
                else { $wallet_price = ($value['price']['usd']*$value['wallet']) + ($value['price']['usd']*$value['staking']) + ($value['price']['usd']*$value['locked']) + ($value['price']['usd']*$value['pools']) + ($value['price']['usd']*$value['farming']) + ($value['price']['usd']*$value['lending']) + ($value['price']['usd']*$value['rewards']); }
                $prices[$key] = $wallet_price;
                $total += $wallet_price;
            }
        }
		arsort($prices);
        $i=0;
        $other = $total;
        foreach($prices as $key=>$value) {
            if($i==9) {
                array_push($labels, "Other");
                $other = ($other/$total) * 100;
                array_push($datas, round($other, 1));
                break;
            }
            else {
                array_push($labels, $key);
                $other -= $value;
                $value = ($value/$total) * 100;
                array_push($datas, round($value, 1));
                $i++;
            }
        }
        $chart = array(
            "labels" => $labels, 
            "datas" => $datas
        );
        return $chart;
    }
}