<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Services\UserNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {

    $credentialsToken = [
         "consumer-id" => "CONSUMER_ID",
        "token-bearer" => "TOKEN_BEARER"
    ];
    
    $userData = (new UserNotaFacil($credentialsToken))->showByID(22);

    dump($userData->getContent(), $userData->getStatusCode());
      
} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}