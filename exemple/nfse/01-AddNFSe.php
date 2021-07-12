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
        "cliente" => [
            "endereco_principal" => [
                "id_cidade" => "1",
                "logradouro" => "RUA TENENTE DJALMA DUTRA",
                "bairro" => "CENTRO",
                "numero" => "915",
                "complemento" => "ANDAR 7",
                "cep" => "83005360"
            ],
            "telefone_principal" => [
                "ddd" => "65",
                "numero" => "32661380",
                "tipo_telefone" => "1"
            ],
            "nome_razao_social" => "Empresa teste",
            "nome_fantasia" => "Empresa teste",
            "tipo_cliente" => "PJ",
            "cnpj_cpf" => "07298848000198",
            "tipo_cadastro" => "Ambos",
            "email" => "teste@emailtest.com.br",
            "status" => 1
        ],
        "nfs_total" => [
            "valor_servico" => "1.00",
            "base_calculo" => "1.00",
            "valor_deducoes" => "0.00",
            "valor_incondicional" => "0.00",
            "valor_condicional" => "0.00",
            "aliquota_tributo_federal" => "0.00",
            "valor_tributo_federal" => "0.00",
            "aliquota_tributo_municipal" => "0.00",
            "valor_tributo_municipal" => "0.00"
        ],
        "nfs_impostos" => [
            [
                "tipo" => "COFINS",
                "reter" => "0",
                "aliquota" => "0",
                "valor" => "0"
            ],
            [
                "tipo" => "PIS",
                "reter" => "0",
                "aliquota" => "0",
                "valor" => "0"
            ],
            [
                "tipo" => "CSLL",
                "reter" => "0",
                "aliquota" => "0",
                "valor" => "0"
            ],
            [
                "tipo" => "IR",
                "reter" => "0",
                "aliquota" => "0",
                "valor" => "0"
            ],
            [
                "tipo" => "INSS",
                "reter" => "0",
                "aliquota" => "0",
                "valor" => "0"
            ],
            [
                "tipo" => "ISS",
                "reter" => "0",
                "aliquota" => "3.87",
                "valor" => "0"
            ]
        ],
        "numeracao_rps" => "100102",
        "serie_rps" => "1",
        "nome_cliente" => "Empresa SISTEMA DE GESTAO S.A.",
        "regime_tributacao" => 1,
        "regime_especial_tributacao" => 1,
        "natureza_operacao" => 1,
        "descricao_servico" => "Nota para fins de testes",
        "codigo_atividade" => "1401",
        "codigo_cnae" => "4520001",
        "descricao_atividade" => "Lubrificacao, limpeza, lustracao, revisao, conserto, restauracao, blindagem, alinhamento, balanceamento, manutencao e conservacao de embarcacoes, aeronaves e veiculos em geral (exceto pecas e partes empregadas, que ficam sujeitas ao ICMS)",
        "codigo_tributacao_municipio" => "1401001",
        "valor_total_bruto" => "1.00",
        "valor_total_liquido" => "1.00",
        "ambiente" => true,
        "tipo_local_prestacao_servico" => "0"
    ];

    
    $services = (new NSFeNotaFacil($credentialsToken))->addNFSe($payload);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}