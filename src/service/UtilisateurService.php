<?php
namespace Src\Service;

use Src\Repository\UtilisateurRepository;

class UtilisateurService
{
    private UtilisateurRepository $repo;

    public function __construct()
    {
        $this->repo = new UtilisateurRepository();
    }

    public function inscrire(array $userData): bool
    {
        try {
      
            
            $result = $this->repo->create($userData);
            
            return $result;
            
        } catch (\Exception $e) {
            echo "Service - Exception: " . $e->getMessage() . "<br>";
            return false;
        }
    }
}