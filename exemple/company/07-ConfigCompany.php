<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Services\CompanyNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    
    $credentialsToken = [
        "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];


    $payload = [
        "natureza_operacao" => 1,
        "regime_tributacao" => 1,
        "regime_especial_tributacao" => 1,
        "usuario_prefeitura" => "visualhost",
        "senha_prefeitura" => "nfe!@#nfe"
    ];

    $companyData = (new CompanyNotaFacil($credentialsToken))->configCompany($payload);

    dump($companyData->getContent(), $companyData->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}