<?php
namespace App\Core;

class FileUpload
{
    public static function upload($file, $destDir = '', $allowedTypes = ['image/jpeg', 'image/png', 'image/gif']): ?string
    {
       
        
        // echo "<br>";
        
        if (!isset($file['tmp_name']) || $file['error'] !== UPLOAD_ERR_OK) {
            // echo "Erreur: tmp_name manquant ou erreur upload. Error code: " . ($file['error'] ?? 'N/A') . "<br>";
            return null;
        }
        
        if (!in_array($file['type'], $allowedTypes)) {
            // echo "Erreur: Type de fichier non autorisé: " . $file['type'] . "<br>";
            return null;
        }

        $ext = pathinfo($file['name'], PATHINFO_EXTENSION);
        $filename = uniqid('cni_', true) . '.' . $ext;
        $dest = $destDir . $filename;
        
        // echo "Destination: " . $dest . "<br>";

        if (!is_dir($destDir)) {
            mkdir($destDir, 0777, true);
            // echo "Dossier créé: " . $destDir . "<br>";
        }

        if (move_uploaded_file($file['tmp_name'], $dest)) {
            // echo "Fichier uploadé avec succès: " . $filename . "<br>";
            return $filename;
        }
        
        // echo "Erreur lors du déplacement du fichier<br>";
        return null;
    }
      public static function handleFileUploads(): array
    {
        $uploadDir = 'public/uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        
        $allowedTypes = ['image/jpeg', 'image/png', 'image/gif', 'image/svg+xml'];
        $result = ['recto' => '', 'verso' => ''];
        
        if (isset($_FILES['photo_recto']) && $_FILES['photo_recto']['error'] === UPLOAD_ERR_OK) {
            $result['recto'] = FileUpload::upload($_FILES['photo_recto'], $uploadDir, $allowedTypes);
        }
        
        if (isset($_FILES['photo_verso']) && $_FILES['photo_verso']['error'] === UPLOAD_ERR_OK) {
            $result['verso'] = FileUpload::upload($_FILES['photo_verso'], $uploadDir, $allowedTypes);
        }
        
        return $result;
    }
    
}
