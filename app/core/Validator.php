<?php
namespace App\Core;

use PDO;

class Validator
{
    public static function validateInscription(array $data, PDO $pdo): array
    {
        $errors = [];

        foreach (['nom', 'prenom', 'numerotelephone', 'pieceidentite', 'recto', 'verso',"adresse"] as $field) {
            if (empty($data[$field])) {
                $errors[$field] = "Le champ $field est obligatoire.";
        }
        }

        if (
            !preg_match('/^(?:\+221)?(77|78|76|70|75)[0-9]{7}$/', $data['numerotelephone'] ?? '')

        ) 
        {

            $errors['numero telephone'] = "Numéro de téléphone invalide.";

        } else {
            $numerotelephone = preg_replace('/^\+221/', '', $data['numerotelephone']); // retire +221 pour la vérification en base
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM utilisateur WHERE numerotelephone = :numerotelephone");
            $stmt->execute([':numerotelephone' => $numerotelephone]);
            if ($stmt->fetchColumn() > 0) {      
                
                $errors['numerotelephone'] = "Numéro déjà utilisé.";
            }
        }

        if (!preg_match('/^[0-9]{13}$/', $data['pieceidentite'] ?? '')) {
            $errors['piece_identite'] = "Numéro CNI invalide.";
        } else {
            $stmt = $pdo->prepare("SELECT COUNT(*) FROM utilisateur WHERE pieceidentite = :cni");
            $stmt->execute([':cni' => $data['pieceidentite']]);
            if ($stmt->fetchColumn() > 0) {
                $errors['piece_identite'] = "CNI déjà utilisée.";
            }
        }

        if (empty($data['recto'])) {
            $errors['recto'] = "Le fichier recto est obligatoire.";
        }
        if (empty($data['verso'])) {
            $errors['verso'] = "Le fichier verso est obligatoire.";
        }

        return $errors;
    }
}