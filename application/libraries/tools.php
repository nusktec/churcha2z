<?php

/**
 * Developer: RSC Byte Limted
 * Website: rscbyte.com
 * phone: 234-8164242320
 * email: nusktecsoft@gmail.com
 * ...................................
 * Tools.php
 * 7:00 AM | 2019 | 12
 **/
class tools
{
    public $ctx = null;

    public function __construct()
    {
        $this->ctx = get_instance();
    }

    public function prepareJson()
    {
        $http_origin = $_SERVER['HTTP_HOST'];
        $allowed_domains = array(
            'localhost', '192.168.8.100'
        );
        if (in_array($http_origin, $allowed_domains)) {
            header("Access-Control-Allow-Origin: *");
            //prepare json
            header('content-type: application/json');
        } else {
            header("Access-Control-Allow-Origin: *");
            //prepare json
            header('content-type: application/json');
            exit("Inbound domain does not belong to this parent...");
        }
    }
}