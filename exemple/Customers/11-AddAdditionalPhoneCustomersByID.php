<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Services\CustomersNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
         "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $payload = [
        "ddd" => "41",
        "numero" => "4196105002",
        "ramal" => "1",
        "tipo_telefone" => 2
    ];

    $services = (new CustomersNotaFacil($credentialsToken))->addAddlPhone(138,$payload);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}