<?php

namespace TboTechnology\Core;

use GuzzleHttp\Client;

class TboTechnologyHttp {
    protected Client $http;
    protected $config;
    const PRODUCTION_HOLIDAYS = "http://api.tbotechnology.in/TBOHolidays_HotelAPI/";
           
    public function __construct(array $config = []) {   
        $defaultConfig = array(
            'base_uri' => '',
            'timeout' => 30,
            'headers' => array(
                'content-type' => 'application/json',
            )
        );
        $this->config = array_replace_recursive($defaultConfig, $config);
        $this->http = new Client($this->config);
    }
}
