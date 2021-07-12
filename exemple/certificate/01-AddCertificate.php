<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Services\CertificateNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
        "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $payload = [
        "certificado_base64" => "",
        "certificado_senha" => "",
        "certificado_tipo" => ""
    ];
    
    $certificateData = (new CertificateNotaFacil($credentialsToken))->addCertificate($payload);

    dump($certificateData->getContent(), $certificateData->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}