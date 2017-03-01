<?php

namespace Williams\WmsBundle\Service;

use Williams\WmsBundle\Repository\WeborderRepository;

class WmsService {
    
    private $client;
    
    public function __construct($wsdl, $username, $password) {
        $this->client = new \SoapClient($wsdl, [
            'soap_version' => SOAP_1_2,
            'login' => $username,
            'password' => $password
        ]);
    }
    
    public function getWeborderRepository() {
        return new WeborderRepository($this->client);
    }

}
