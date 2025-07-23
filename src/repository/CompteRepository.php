<?php
namespace Src\Repository;

use App\Core\App;
use App\Core\Database;
use PDO;

class CompteRepository {
    private PDO $pdo;
     private static ?CompteRepository $compteRepository=null;

    public function __construct()
    {
        $this->pdo = App::getDependency("database");
    }
     public  static  function getInstance()
     {
            if(self::$compteRepository===null)
            {
                self::$compteRepository=new self();
            }
             return  self::$compteRepository;
     }


    public function selectbynumero($numero)
    { 
        $sql = "SELECT * FROM compte WHERE numerotelephone = :numero";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':numero', $numero);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC) ?: null;
    }

    public function selectbycompte($id)
    { 
        $sql = "SELECT utilisateur.nom, compte.id, compte.numerotelephone, utilisateur.prenom, compte.solde 
                FROM compte 
                JOIN utilisateur ON utilisateur.id = compte.utilisateur_id 
                WHERE utilisateur.id = :id";
        
        $stmt = $this->pdo->prepare($sql);         
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
       
        return $stmt->fetch(PDO::FETCH_ASSOC) ?? null;
    }

    public function selectbytransaction($compteId)
    {
        $sql = "SELECT t.id, t.date, t.type, t.montant, c.numerotelephone, c.solde
                FROM transaction t
                JOIN compte c ON c.id = t.compte_id 
                WHERE c.id = :compteId
                ORDER BY t.date DESC, t.id DESC
                LIMIT 6";

        $stmt = $this->pdo->prepare($sql);         
        $stmt->bindParam(':compteId', $compteId, PDO::PARAM_INT);
        $stmt->execute();
       
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
      public function  selectall($compteId)
    {
            $sql = "SELECT t.id, t.date, t.type, t.montant, c.numerotelephone, c.solde
                FROM transaction t
                JOIN compte c ON c.id = t.compte_id 
                WHERE c.id = :compteId
                ORDER BY t.date DESC, t.id DESC";

        $stmt = $this->pdo->prepare($sql);         
        $stmt->bindParam(':compteId', $compteId, PDO::PARAM_INT);
        $stmt->execute();
       
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
      
  
}