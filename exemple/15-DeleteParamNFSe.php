<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\NFSe\Services\NFSeParamNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
       "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $services = (new NFSeParamNotaFacil($credentialsToken))->deleteParamNFSe(1);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}