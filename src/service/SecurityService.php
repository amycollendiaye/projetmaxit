<?php
namespace Src\Service;


use App\Core\App;
use Src\Repository\UtilisateurRepository;

class SecurityService
{
     private static ?SecurityService  $securityService=null; 
     private   UtilisateurRepository  $utilisateurRepository;

    private function __construct()
    {
        $this->utilisateurRepository =App::getDependency("utilisateurRepository");
    }

    public  static function   getInstance()
    {
        if(self::$securityService==null)
         {
              self::$securityService=  new self();
        }
         return self::$securityService;
    }

    public function inscrire(array $userData): bool
    {
        try {
      
            
            $result = $this->utilisateurRepository->create($userData);
            
            return $result;
            
        } catch (\Exception $e) {
            echo "Service - Exception: " . $e->getMessage() . "<br>";
            return false;
        }
    }
}