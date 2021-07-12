<?php
namespace NotaFacil\NFSe\Services;


use NotaFacil\Common\Traits\RequestTrait;
use NotaFacil\Common\Services\BaseService;
use NotaFacil\Common\Resources\NotaFacilResource;
/**
 *  Class responsible for the in the Nota Fácil API.
 */
class NFSeParamServiceNotaFacil extends BaseService
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
        return $this->request( $this->base_url() . $this->endpoint->nfse->parameters->services->register, 'POST', $payload );
    }
    public function updateParamNFSe($idParam, $payload): NotaFacilResource
    {   
        return $this->request( $this->base_url() . str_replace(':id', $idParam , $this->endpoint->nfse->parameters->services->update), 'PUT', $payload);
        
    }
    public function getParamNFSe($idParam): NotaFacilResource
    {
        return $this->request( $this->base_url() . str_replace(':id', $idParam , $this->endpoint->nfse->parameters->services->byID));
    }
    public function listAllNFSe(): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->nfse->parameters->services->listAll);
    }

    public function deleteParamNFSe($idParam): NotaFacilResource
    {
        return $this->request( $this->base_url() . str_replace(':id', $idParam , $this->endpoint->nfse->parameters->services->delete), 'DELETE');
    }    
   

}
