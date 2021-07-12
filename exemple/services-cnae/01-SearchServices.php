<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Exceptions\NotaFacilException;
use NotaFacil\Common\Services\ServicesAndCnaeNotaFacil;

try {

    $credentialsToken = [
         "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $services = (new ServicesAndCnaeNotaFacil($credentialsToken))->searchServices('cão');

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}