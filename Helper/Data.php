<?php

namespace PHONGLEE\CoinMarketCap\Helper;

use \Magento\Framework\App\Helper\AbstractHelper;
 
class Data extends AbstractHelper
{
    public static function getCoinDataFromAPI()
    {
        $url = "https://api.coinmarketcap.com/v1/ticker/?limit=10";

        $curl = new \Magento\Framework\HTTP\Client\Curl();
        $curl->get($url);
        $response = $curl->getBody();
        return json_decode($response,true);
    }
}