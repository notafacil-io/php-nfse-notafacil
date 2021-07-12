<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Exceptions\NotaFacilException;
use NotaFacil\Nfse\Services\NFSeParamServiceNotaFacil;

try {

    $credentialsToken = [
       "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $services = (new NFSeParamServiceNotaFacil($credentialsToken))->listAllNFSe();

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}