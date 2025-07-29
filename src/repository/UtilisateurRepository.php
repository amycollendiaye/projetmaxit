<?php
namespace Src\Repository;

use App\Core\Abstract\AbstractRepository;
use PDO;

class UtilisateurRepository extends AbstractRepository {

    private static   ?UtilisateurRepository $utilisateurRepository=null;

    private function __construct()
    {
         parent::__construct();
    }
     public   static function getInstance()
     {
        if (self::$utilisateurRepository===null)
        {
            self::$utilisateurRepository=new self();

        }
        return self::$utilisateurRepository;
     }
    
    public function getLogin($login)
    {
        $sql = "SELECT * FROM utilisateur WHERE login = :login";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':login', $login);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findById(int $id): ?array
    {
        $sql = "SELECT * FROM utilisateur WHERE id = :id ";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        return $user ?: null;
    }

    public function findAll(): array
    {
        $sql = "SELECT * FROM utilisateur";
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create(array $userData): bool
    {
        try {
            $this->pdo->beginTransaction();

            $sqlUser = "INSERT INTO utilisateur (
                nom, prenom, pieceidentite, numerotelephone, datenaissance, profil_id, motdepasse, adresse
            ) VALUES (
                :nom, :prenom, :pieceidentite, :numerotelephone, :datenaissance, :profil_id, :motdepasse, :adresse
            )";
            
            
            $stmtUser = $this->pdo->prepare($sqlUser);
            
            $userParams = [
                ':nom' => $userData['nom'],
                ':prenom' => $userData['prenom'],
                ':pieceidentite' => $userData['pieceidentite'],
                ':numerotelephone' => $userData['numerotelephone'],
                ':datenaissance' => $userData['datenaissance'], 
                ':profil_id' => 1,
                ':motdepasse' => $userData['motdepasse'], 
                ':adresse' => $userData['adresse']
            ];
            
            
            $resultUser = $stmtUser->execute($userParams);
            
            if (!$resultUser) {
               
                $this->pdo->rollBack();
                return false;
            }

            $userId = $this->pdo->lastInsertId();
        
            $sqlCompte = "INSERT INTO compte (
                numero, solde, type, utilisateur_id,numerotelephone
            ) VALUES (
                :numero, :solde, :type, :utilisateur_id,:numerotelephone
            )";
            
            $stmtCompte = $this->pdo->prepare($sqlCompte);
            
            $compteParams = [
                ':numero' => 'c' . uniqid(),
                ':solde' => 0,
                ':type' => 'principal',
                ':utilisateur_id' => $userId,
                ':numerotelephone' => $userData['numerotelephone']


            ];
            
            $stmtCompte->execute($compteParams);
            $this->pdo->commit();
            return true;
            } 
            catch (\Exception $e) 
            {
            // echo 'echec insertion des donnees  pour inscription';
            $this->pdo->rollBack();
            return false;
            }
    }

    public function update(int $id, array $data): bool
    {
        $sql = "UPDATE utilisateur SET nom = :nom, prenom = :prenom, login = :login, password = :password, cni = :cni, numero = :numero, type = :type WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([
            ':id' => $id,
            ':nom' => $data['nom'],
            ':prenom' => $data['prenom'],
            ':login' => $data['login'],
            ':password' => $data['password'],
            ':cni' => $data['cni'],
            ':numero' => $data['numero'],
            ':type' => $data['type'],
        ]);
    }

    public function delete(int $id): bool
    {
        $sql = "DELETE FROM utilisateur WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([':id' => $id]);
    }
}