<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Services\UserNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
         "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];

    $payload = [
        "nome" => "Otávio2 Calebe Lucas Assunção",
        "cpf" => "551.334.528-53",
        "email" => "bunitinho3@tuamaeaquelaursa.com",
        "login" => "bunitinho12",
        "password" => "#S12341m",
        "skype" => "bunitinho03",
        "status" => true,
        "telefone" => [
            "ddd" => "41",
            "numero" => "995079455",
            "ramal" => "1",
            "tipo_telefone" => 1
        ],
        "role" => 1
    ];


    
    $userData = (new UserNotaFacil($credentialsToken))->updateUser(22, $payload);

    dump($userData->getContent(), $userData->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}