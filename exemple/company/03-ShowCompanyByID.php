<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Services\CompanyNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
        "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];
    
    $companyData = (new CompanyNotaFacil($credentialsToken))->showByID(2);

    dump($companyData->getContent(), $companyData->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}