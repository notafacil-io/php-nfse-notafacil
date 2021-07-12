<?php
namespace NotaFacil\NFSe\Services;


use NotaFacil\Common\Traits\RequestTrait;
use NotaFacil\Common\Services\BaseService;
use NotaFacil\Common\Resources\NotaFacilResource;
/**
 *  Class responsible for the in the Nota Fácil API.
 */
class NFSeParamNotaFacil extends BaseService
{
    use RequestTrait;

    const PRODUCTION_ENVIRONMENT = 'PROD'; 
    const PARAM_APPROVAL_ENVIRONMENT = 'HOMOLOGUE'; 
                                                                                                                                                                                                               
    public function __construct(Array $credentialsNotaFacil)
    {
        parent::__construct();
        $this->credentialsNotaFacil = $credentialsNotaFacil;
    }
    
    public function addParamNFSe($payload): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->nfse->parameters->main->register, 'POST', $payload );
    }

    public function getParamNFSe($ambiente = 'PROD'): NotaFacilResource
    {
        return $this->request( $this->base_url() . str_replace(':ambiente', $ambiente , $this->endpoint->nfse->parameters->main->search));
    }

    public function deleteParamNFSe($idParam): NotaFacilResource
    {
        return $this->request( $this->base_url() . str_replace(':id', $idParam , $this->endpoint->nfse->parameters->main->delete), 'DELETE');
    }    
   

}
