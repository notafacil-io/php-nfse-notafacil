<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Exceptions\NotaFacilException;
use NotaFacil\NFSe\Services\NFSeParamServiceNotaFacil;

try {

    $credentialsToken = [
       "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $payload = [
        "codigo_servico"=> "COD001",
        "descricao_servico"=> "Vendas online",
        "valor_condicional"=> 12.00,
        "valor_incondicional"=> 0,
        "aliquota_tributo_federal"=> 0,
        "aliquota_tributo_municipal"=> 0,
        "codigo_tributacao_municipio"=> "ABC",
        "id_servico"=> 1,
        "id_cnae"=> 1,
        "servico_impostos"=> [
                [
                    "tipo"=> "COFINS",
                    "reter"=> true,
                    "aliquota"=> 1.00
                ]
          ]
    ];


    $services = (new NFSeParamServiceNotaFacil($credentialsToken))->updateParamNFSe(1, $payload);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}