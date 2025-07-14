<?php
namespace Src\Repository;
use App\Core\Database;
use PDO;

class CompteRepository {
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function selectbynumero($numero )

    { 
     $sql= "select * from compte 
             where numerotelephone=:numero ";

            $stmt =$this->pdo->prepare($sql);
            $stmt->bindParam(':numero', $numero);
            $stmt->execute();
           return $stmt->fetch(PDO::FETCH_ASSOC) ?? null;
   }
   public   function selectbycompte ($id)
   { 
        $sql ="select  utilisateur.nom, compte.id,  utilisateur.prenom, compte.solde from compte  join utilisateur on   utilisateur.id =:id" ;
        $stmt=$this->pdo->prepare($sql);         
        $stmt->bindParam(':id', $id);
         $stmt->execute();
       
        return $stmt->fetch(PDO::FETCH_ASSOC) ?? null;


   }

} 