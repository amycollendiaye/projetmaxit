<?php
namespace Src\Controller;
use App\Core\Abstract\AbstractController;
use Src\Repository\UtilisateurRepository;
use Src\Service\UtilisateurService;
use App\Core\FileUpload;
use App\Core\Database;
use  App\Core\Validator;
use App\Core\Session;


class InscriptionController extends AbstractController {
    
    public function index(){
        $this->renderhtml('inscription/inscription.html.php');
    }
    
    public function inscrire() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            // Upload des fichiers
            $uploadResult = FileUpload::handleFileUploads();
            
            // Préparer les données
            $data = [
                'nom' => trim($_POST['nom'] ?? ''),
                'prenom' => trim($_POST['prenom'] ?? ''),
                'pieceidentite' => trim($_POST['pieceidentite'] ?? ''),
                'numerotelephone' => trim($_POST['numerotelephone'] ?? ''),
                'recto' => $uploadResult['recto'] ?? '',
                'verso' => $uploadResult['verso'] ?? '',
                'adresse' => trim($_POST['adresse'] ?? ''),
            ];
            
            // Validation
            $pdo = Database::getConnection();
// var_dump($errors);

// die;
                $errors = Validator::validateInscription($data, $pdo);

            
            // Inscription
            $service = new UtilisateurService();
            if ($service->inscrire($data)) {
                 var_dump('geirgj');
                 header("location:/");
                 exit;
            } else 
            { 

                Session::set('errors', $errors);
                self::index();
            }
        }
    }

    
   
    
   
}
