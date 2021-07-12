<?php

include_once(__DIR__.'/../../vendor/autoload.php');


use NotaFacil\Common\Services\AuthNotaFacil;
use NotaFacil\Common\Exceptions\NotaFacilException;

try {
    
    $credentials = [
        "login" => "LOGIN_SOFTHOUSE",
        "password" => "SENHA_SOFTHOUSE",
        "secret_key" => "SECRET_KEY_SOFTHOUSE"
    ];

    $clientNotaFacil =(new AuthNotaFacil())->attempt($credentials)
                       // ->getResponse();
                       ->getDataAuth();

    dump($clientNotaFacil);

} catch (NotaFacilException $th) {
    dump($th->getMessage(), $th->getCode());
}