<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Services\CustomersNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
         "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $services = (new CustomersNotaFacil($credentialsToken))->deleteCustomer(137);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}