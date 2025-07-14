<?php
namespace Src\Repository;
use App\Core\Database;
use App\Entity\Utilisateur;
use PDO;

class UtilisateurRepository {
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
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
            // echo "Repository - Début de la transaction<br>";
            $this->pdo->beginTransaction();

            // Debug des données reçues
            // echo "Repository - Données reçues:<br>";
            // // var_dump($userData);
            // // echo "<br>";

            // Insertion utilisateur
            $sqlUser = "INSERT INTO utilisateur (
                nom, prenom, pieceidentite, numerotelephone, photorecto, profil_id, photoverso, adresse
            ) VALUES (
                :nom, :prenom, :pieceidentite, :numerotelephone, :photorecto, :profil_id, :photoverso, :adresse
            )";
            
            // echo "Repository - Requête SQL utilisateur:<br>" . $sqlUser . "<br><br>";
            
            $stmtUser = $this->pdo->prepare($sqlUser);
            
            $userParams = [
                ':nom' => $userData['nom'],
                ':prenom' => $userData['prenom'],
                ':pieceidentite' => $userData['pieceidentite'],
                ':numerotelephone' => $userData['numerotelephone'],
                ':photorecto' => $userData['recto'], // ✅ Correction ici
                ':profil_id' => 1,
                ':photoverso' => $userData['verso'], // ✅ Correction ici
                ':adresse' => $userData['adresse']
            ];
            
            // echo "Repository - Paramètres utilisateur:<br>";
            // var_dump($userParams);
            // echo "<br>";
            
            $resultUser = $stmtUser->execute($userParams);
            // echo "Repository - Résultat insertion utilisateur: " . ($resultUser ? 'SUCCESS' : 'FAILED') . "<br>";
            
            if (!$resultUser) {
                // echo "Repository - Erreur SQL utilisateur:<br>";
                // var_dump($stmtUser->errorInfo());
                // echo "<br>";
                $this->pdo->rollBack();
                return false;
            }

            $userId = $this->pdo->lastInsertId();
            // echo "Repository - ID utilisateur créé: " . $userId . "<br>";

            // Insertion compte
            $sqlCompte = "INSERT INTO compte (
                numero, solde, type, utilisateur_id,numerotelephone
            ) VALUES (
                :numero, :solde, :type, :utilisateur_id,:numerotelephone
            )";
            
            // echo "Repository - Requête SQL compte:<br>" . $sqlCompte . "<br><br>";
            
            $stmtCompte = $this->pdo->prepare($sqlCompte);
            
            $compteParams = [
                ':numero' => 'c' . uniqid(),
                ':solde' => 0,
                ':type' => 'principal',
                ':utilisateur_id' => $userId,
                ':numerotelephone' => $userData['numerotelephone']


            ];
            
            // echo "Repository - Paramètres compte:<br>";
            // var_dump($compteParams);
            // echo "<br>";
            
            $resultCompte = $stmtCompte->execute($compteParams);
            // echo "Repository - Résultat insertion compte: " . ($resultCompte ? 'SUCCESS' : 'FAILED') . "<br>";
            
       /*      if (!$resultCompte) {
                // echo "Repository - Erreur SQL compte:<br>";
                // var_dump($stmtCompte->errorInfo());
                // echo "<br>";
                $this->pdo->rollBack();
                return false;
            } */

            $this->pdo->commit();
echo "Repository - Transaction commitée avec succès<br>";
            return true;
            
        } catch (\Exception $e) {
            echo "Repository - Exception: " . $e->getMessage() . "<br>";
            echo "Repository - Stack trace: " . $e->getTraceAsString() . "<br>";
            echo 'echouer';
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