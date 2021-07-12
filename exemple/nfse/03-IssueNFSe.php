<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Nfse\Services\NSFeNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
        "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $payload = ["ids" => [ 143503 ] ];

    
    $services = (new NSFeNotaFacil($credentialsToken))->issueNFSe($payload);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}