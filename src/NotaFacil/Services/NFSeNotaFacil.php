<?php
namespace NotaFacil\NFSe\Services;


use NotaFacil\Common\Traits\RequestTrait;
use NotaFacil\Common\Services\BaseService;
use NotaFacil\Common\Resources\NotaFacilResource;
/**
 *  Class responsible for the in the Nota Fácil API.
 */
class NFSeNotaFacil extends BaseService
{
    use RequestTrait;
                                                                                                                                                                                                               
    public function __construct(Array $credentialsNotaFacil)
    {
        parent::__construct();
        $this->credentialsNotaFacil = $credentialsNotaFacil;
    }
    
    public function addNFSe($payload): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->nfse->register, 'POST', $payload );
    }

    public function updateNFSe($idNFSe, $payload): NotaFacilResource
    {
        return $this->request( $this->base_url() . str_replace(':id', $idNFSe , $this->endpoint->nfse->update), 'PUT', $payload);
    }

    public function deleteNFSe($idNFSe): NotaFacilResource
    {
        return $this->request( $this->base_url() . str_replace(':id', $idNFSe , $this->endpoint->nfse->delete), 'DELETE');
    }

    public function issueNFSe($payload): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->nfse->issue, 'POST', $payload);
    }

    public function cancelIssue($payload): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->nfse->cancelIssue, 'POST', $payload);
    }

    public function listAll(): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->nfse->listAll);
    }

    public function showByID($idNFSe): NotaFacilResource
    {
        return $this->request( $this->base_url() . str_replace(':id', $idNFSe , $this->endpoint->nfse->byID));
    }

    public function calculation($payload): NotaFacilResource
    {
        return $this->request( $this->base_url() . $this->endpoint->nfse->calculation, 'POST', $payload);
    }
    
   

}
