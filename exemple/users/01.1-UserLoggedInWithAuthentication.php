<?php
include_once(__DIR__.'/../../vendor/autoload.php');

use NotaFacil\Common\Services\AuthNotaFacil;
use NotaFacil\Common\Services\UserNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;


try {
    $credentials = [
        "login" => "LOGIN_SOFTHOUSE",
        "password" => "SENHA_SOFTHOUSE",
        "secret_key" => "SECRET_KEY_SOFTHOUSE"
    ];

    $clientNotaFacil = new AuthNotaFacil();
    $clientNotaFacil->setConsumerID('CONSUMER_ID');

    $credentialsToken = $clientNotaFacil->attempt($credentials)->getDataAuth();

    $userData = (new UserNotaFacil($credentialsToken))->loggedData();

    dump($userData->getContent(), $userData->getStatusCode());

} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}