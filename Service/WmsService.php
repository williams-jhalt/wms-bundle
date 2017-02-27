<?php

namespace Williams\WmsBundle\Service;

use Williams\WmsBundle\Repository\WeborderRepository;

class WmsService {
    
    private $client;
    
    public function __construct($wsdl, $username, $password) {
        $this->client = new SoapClient($wsdl, [
            'login' => $username,
            'password' => $password
        ]);
    }
    
    public function getWeborderRepository() {
        return new WeborderRepository($this->client);
    }

}
