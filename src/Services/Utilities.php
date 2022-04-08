<?php

namespace App\Services;

class Utilities {

    /**
     * Return a random string with specific length
     * 
     * @param string $length
     * @return string
     */
    public function generateRandomString($length = 16) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    public function requestTimestamp()
    {
        list($usec, $sec) = explode(' ', microtime());
        return (int) ((int) $sec * 1000 + ((float) $usec * 1000));
    }

    public function mathPower($x,$y)
    { 
        $resultat=1;
        for ($i=0;$i<$y;$i++)  
        $resultat *=  $x;  
        return $resultat;
    }

}