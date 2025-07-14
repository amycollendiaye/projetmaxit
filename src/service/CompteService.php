<?php
namespace Src\Service;
use Src\Repository\CompteRepository;

 class  CompteService {
        private CompteRepository $repo;

    public function __construct()
    {
        $this->repo = new CompteRepository();

    }
    public function seconnecter($numero): ?array
{
    return $this->repo->selectbynumero($numero);
}
public function  getiduser($id)
{
        return $this->repo->selectbycompte($id);

}
    
 }