<?php
namespace Src\Service;

use App\Core\App;
use Src\Repository\CompteRepository;

class CompteService {
    private CompteRepository $repo;
    private  static  ?CompteService $compteService=null;

    private function __construct()
    {
        $this->repo =  App::getDependency('compteRepository');
    }
    
     public  static function getInstance()
     {
        if(self::$compteService==null)
        {
            self::$compteService= new  self();

        }
        return  self::$compteService;
     }
    
    public function seconnecter($numero): ?array
    {
        return $this->repo->selectbynumero($numero) ?: null;
    }
    
    public function getiduser($id)
    {
        return $this->repo->selectbycompte($id);
    }
    
    public function gettransactionuser($compteId)
    {
        return $this->repo->selectbytransaction($compteId);
    }
     public function alltransaction($compteId)
    {
        return $this->repo->selectall($compteId);
        
    }
}