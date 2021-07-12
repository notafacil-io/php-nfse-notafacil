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
        "nfs_totais" => [
            "valor_servico" => 50,
            "valor_deducoes" => 5
        ],
        "nfs_impostos" => [
            [
                "tipo" => "IR",
                "reter" => true,
                "aliquota" => 6.55
            ],
            [
                "tipo" => "INSS",
                "reter" => true,
                "aliquota" => 5.50
            ]
        ],
        "nfs_construcao_civil" => [
            "valor_material" => 50
        ]
    ];

    $services = (new NSFeNotaFacil($credentialsToken))->calculation($payload);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}