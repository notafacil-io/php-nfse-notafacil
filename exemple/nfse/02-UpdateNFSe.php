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
        "cliente" => 46355,
        "nfs_total" => [
            "valor_servico" => "3392.85",
            "base_calculo" => "3392.85",
            "valor_deducoes" => "0.00",
            "valor_incondicional" => "0.00",
            "valor_condicional" => "0.00",
            "aliquota_tributo_federal" => "0.00",
            "valor_tributo_federal" => "0.00",
            "aliquota_tributo_municipal" => "0.00",
            "valor_tributo_municipal" => "0.00"
        ],
        "nfs_construcao_civil" => [
            "codigo_obra" => "COI",
            "codigo_art" => "2020200197710",
            "valor_material" => "0.00"
        ],
        "nfs_impostos" => [
            [
                "tipo" => "ISS",
                "reter" => "0",
                "aliquota" => "2.000000",
                "valor" => "67.86"
            ],
            [
                "tipo" => "COFINS",
                "reter" => "0",
                "aliquota" => "0.00",
                "valor" => "0.00"
            ],
            [
                "tipo" => "PIS",
                "reter" => "0",
                "aliquota" => "0.00",
                "valor" => "0.00"
            ],
            [
                "tipo" => "CSLL",
                "reter" => "0",
                "aliquota" => "0.00",
                "valor" => "0.00"
            ],
            [
                "tipo" => "INSS",
                "reter" => "0",
                "aliquota" => "0.00",
                "valor" => "0.00"
            ],
            [
                "tipo" => "IR",
                "reter" => "0",
                "aliquota" => "0.00",
                "valor" => "0.00"
            ]
        ],
        "numeracao_rps" => "209",
        "serie_rps" => "1",
        "nome_cliente" => "AMAURI LOPES NEVES",
        "nome_tecnico" => "",
        "regime_tributacao" => "1",
        "regime_especial_tributacao" => "0",
        "natureza_operacao" => "1",
        "descricao_servico" => "FORNECIMENTO DE MAO DE OBRA PARA REFORMA DE APARTAMENTO RESIDENCIAL, TOTALIZANDO 75m2;  BEM COMO PINTURA; TROCA DE REVESTIMENTO (PISO E PAREDE) INSTALACOS HIDROSSANITARIAS; INSTALACOES DE ITENS EM GERAL.",
        "codigo_atividade" => "0705",
        "descricao_atividade" => "Reforma de Edificios e Congeneres",
        "codigo_tributacao_municipio" => "070513",
        "valor_total_bruto" => "3392.85",
        "valor_total_liquido" => "3392.85",
        "numero_processo_judicial" => "",
        "observacao_servico" => "",
        "observacao_interna_servico" => "",
        "ambiente" => true,
        "incentivador_cultural" => false,
        "tipo_local_prestacao_servico" => "1",
        "id_cidade" => ""
    ];

    
    $services = (new NSFeNotaFacil($credentialsToken))->updateNFSe(143503,$payload);

    dump($services->getContent(), $services->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}