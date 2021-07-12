<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Nfse\Services\NSFeNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
        "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $payload = [
        "ids"=> [ 28976 ],
        "motivo_cancelamento"=> "Motivo para fins de testes"
    ];

    
    $services = (new NSFeNotaFacil($credentialsToken))->cancelIssue($payload);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}