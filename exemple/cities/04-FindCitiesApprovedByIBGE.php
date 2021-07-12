<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Services\CitiesNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
        "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];
    
    $companiesData = (new CitiesNotaFacil($credentialsToken))->findApprovedByIBGE(3304557);

    dump($companiesData->getContent(), $companiesData->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}