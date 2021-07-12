<?php
namespace NotaFacil\Nfse\Services;


use NotaFacil\Common\Traits\RequestTrait;
use NotaFacil\Common\Services\BaseService;
use NotaFacil\Common\Resources\NotaFacilResource;
/**
 *  Class responsible for the in the Nota Fácil API.
 */
class NSFeConsultNotaFacil extends BaseService
{
    use RequestTrait;
                                                                                                                                                                                                               
    public function __construct(Array $credentialsNotaFacil)
    {
        parent::__construct();
        $this->credentialsNotaFacil = $credentialsNotaFacil;
    }
    
    public function consultRPS($payload): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->nfse->consultRPS, 'POST', $payload );
    }

    
   

}
