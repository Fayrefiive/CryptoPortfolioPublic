<?php

namespace App\Services\Cryptos;

use App\Entity\UserPlatform;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use App\Services\Cryptos\Correspondence;

class KrakenAPIException extends \ErrorException {};

class KrakenAPI {

	protected $key;     // API key
    protected $secret;  // API secret
    protected $url;     // API base URL
    protected $version; // API version
    protected $curl;    // curl handle

    /**
     * Constructor for KrakenAPI
     *
     * @param string $key API key
     * @param string $secret API secret
     * @param string $url base URL for Kraken API
     * @param string $version API version
     * @param bool $sslverify enable/disable SSL peer verification.  disable if using beta.api.kraken.com
     */
    function __construct($key="", $secret="", $url='https://api.kraken.com', $version='0', $sslverify=true)
    {
        /* check we have curl */
        if(!function_exists('curl_init')) {
         	print "[ERROR] The Kraken API client requires that PHP is compiled with 'curl' support.\n";
         	exit(1);
        }

        $this->key = $key;
        $this->secret = $secret;
        $this->url = $url;
        $this->version = $version;
        $this->curl = curl_init();

        curl_setopt_array($this->curl, array(
            CURLOPT_SSL_VERIFYPEER => $sslverify,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_USERAGENT => 'Kraken PHP API Agent',
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true)
        );
    }

    function __destruct()
    {
    	if(function_exists('curl_close')) {
         	curl_close($this->curl);
		}
    }

    /**
     * Query public methods
     *
     * @param string $method method name
     * @param array $request request parameters
     * @return array request result on success
     * @throws KrakenAPIException
     */
    function QueryPublic($method, array $request = array())
    {
        // build the POST data string
        $postdata = http_build_query($request, '', '&');

        // make request
        curl_setopt($this->curl, CURLOPT_URL, $this->url . '/' . $this->version . '/public/' . $method);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, array());
        $result = curl_exec($this->curl);
        if($result===false)
            throw new KrakenAPIException('CURL error: ' . curl_error($this->curl));

        // decode results
        $result = json_decode($result, true);
        if(!is_array($result))
            throw new KrakenAPIException('JSON decode error');

        return $result;
    }

    /**
     * Query private methods
     *
     * @param string $method method path
     * @param array $request request parameters
     * @return array request result on success
     * @throws KrakenAPIException
     */
    function QueryPrivate($method, array $request = array())
    {
        if(!isset($request['nonce'])) {
            // generate a 64 bit nonce using a timestamp at microsecond resolution
            // string functions are used to avoid problems on 32 bit systems
            $nonce = explode(' ', microtime());
            $request['nonce'] = $nonce[1] . str_pad(substr($nonce[0], 2, 6), 6, '0');
        }

        // build the POST data string
        $postdata = http_build_query($request, '', '&');

        // set API key and sign the message
        $path = '/' . $this->version . '/private/' . $method;
        $sign = hash_hmac('sha512', $path . hash('sha256', $request['nonce'] . $postdata, true), base64_decode($this->secret), true);
        $headers = array(
            'API-Key: ' . $this->key,
            'API-Sign: ' . base64_encode($sign)
        );

        // make request
        curl_setopt($this->curl, CURLOPT_URL, $this->url . $path);
        curl_setopt($this->curl, CURLOPT_POSTFIELDS, $postdata);
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);
        $result = curl_exec($this->curl);
        if($result===false)
            throw new KrakenAPIException('CURL error: ' . curl_error($this->curl));

        // decode results
        $result = json_decode($result, true);
        if(!is_array($result))
            throw new KrakenAPIException('JSON decode error');
            
        return $result;
    }

    /**
	* Return an array that contains Kraken data of the user
	*
	* @param string $key
	* @param string $secret
	* @return string
	*/
	public function getWalletData($key, $secret)
	{
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
		$kraken = new KrakenAPI($key, $secret);
		$result = $kraken->QueryPrivate('Balance');

        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://freecurrencyapi.net/api/v2/latest?apikey=214d2b30-4203-11ec-861d-4da9b8ef902e',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        $response = curl_exec($curl);
        curl_close($curl);

        $fiat_price = json_decode($response, true);
        $price = 0;

        foreach ($result["result"] as $key => $value) {
            if ((float)$value != 0) {
                $asset = $crypto;
                $platform = $platforms;
                $staking = 0;
                if (str_contains($key, '.S')) { $key = substr($key, 0, -2); $staking = $value; }
                switch ($key) {
                    case 'EUR.HOLD':
                        $key = "EUR";
                        $price = $fiat_price['data'];
                        break;
                    case 'ZUSD':
                        $key = "USD";
                        $price = $fiat_price['data'];
                        break;
                    default:
                        $price = 0;
                        break;
                }
                if (array_key_exists($key, $cryptos)) {
                    if ($staking != 0) { $asset['staking'] = $staking; $platform['staking'] = $staking;  }
                    else { $asset['wallet'] = $value; $platform['wallet']; }
                }
                else {
                    if ($staking != 0) { $value = 0; }
                    $asset['id'] = $key;
                    $asset['wallet'] = $value;
                    $asset['staking'] = $staking;
                    $asset['price'] = $price;
                    $platform['wallet'] = $value;
                    $platform['staking'] = $staking;
                    $asset['platformList'] = 'kraken';
                    $asset['platforms']['Kraken'][0] = $platform;
                    $cryptos[$key] = $asset;
                }
            }
        }
        return $cryptos;
	}

    /**
	* Return an array that contains the history on Kraken of the user
	*
	* @param UserPlatform $userPlatform
	* @return array
	*/
	public function getHistory($userPlatform) {
		
	}
}

?>