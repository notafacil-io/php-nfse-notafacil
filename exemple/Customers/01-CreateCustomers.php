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
        "nome_razao_social" => "CIAVET COMERCIAL IMP.AGRO.VETERINARIA LTDA",
        "nome_fantasia" => "CIAVET COMERCIAL IMP.AGRO.VETERINARIA LTDA",
        "tipo_cliente" => "PJ",
        "cnpj_cpf" => "92.813.815/0001-08",
        "tipo_cadastro" => "Cliente",
        "rg" => "",
        "rg_data_emissao" => "",
        "rg_orgao_expedidor" => "",
        "passaporte" => "",
        "estrangeiro" => false,
        "email" => "emailTeste@emailtest.com.br",
        "nome_contato" => "",
        "email_contato" => "emailTeste@emailtest.com.br",
        "insc_estadual" => "",
        "insc_municipal" => "",
        "insc_produtor" => "",
        "observacoes" => "",
        "status" => 1,
        "endereco_principal" => [
            "logradouro" => "RUA GAL.ARRUDA",
            "bairro" => "CENTRO",
            "numero" => "281",
            "complemento" => "",
            "cep" => "97.543-530",
            "id_cidade" => 4610
        ],
        "telefone_principal" => [
            "ddd" => "55",
            "numero" => "999493888",
            "tipo_telefone" => 2
        ]
    ];



    $services = (new CustomersNotaFacil($credentialsToken))->addCustomer($payload);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}