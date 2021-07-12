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
        "id_cidade" => 1,
        "logradouro" => "Rua São Sebastião",
        "bairro" => "Roseira",
        "numero" => "103",
        "complemento" => "Fundos",
        "cep" => "83.070-240"
    ];

    $services = (new CustomersNotaFacil($credentialsToken))->addMoreAddressCustomer(138,$payload);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}