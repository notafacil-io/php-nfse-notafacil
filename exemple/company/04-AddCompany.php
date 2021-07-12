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
        "nome_razao_social" => "Francisca e Jaqueline Pães e Doces Ltda",
        "nome_fantasia" =>"Francisca e Jaqueline Pães e Doces Ltda",
        "tipo_conta" => "PJ",
        "cnpj_cpf" => "91.413.019/0001-15",
        "insc_estadual" => "213.49752-99",
        "insc_municipal" => "456.49752-99",
        "cnae_primario" => "159",
        "email" => "sistema@franciscaejaquelinepaesedocesltda.com.br",
        "responsavel" => "Romilde Rolim de Moura",
        "endereco_principal" => [
            "logradouro" => "R SETE DE SETEMBRO",
            "bairro" => "CENTRO",
            "numero" => "378",
            "cep" => "89843000",
            "id_cidade" => 4317
        ],
        "telefone_principal" => [
            "ddd" => "49",
            "numero" => "89733609",
            "tipo_telefone" => 1
        ],
        "nfs_config" => [
            "natureza_operacao" => 1,
            "regime_tributacao" => "3",
            "regime_especial_tributacao" => "0",
            "usuario_prefeitura" => "94911200987",
            "senha_prefeitura" => "RRmilxe942",
            "receber_notificacao" => true,
            "email_notificacao" => "sistema@franciscaejaquelinepaesedocesltda.com.br"
        ]
    ];
    
    $companyData = (new CompanyNotaFacil($credentialsToken))->addCompany($payload);

    dump($companyData->getContent(), $companyData->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}