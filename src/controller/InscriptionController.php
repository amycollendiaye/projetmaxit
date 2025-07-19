<?php
namespace Src\Controller;
use PDO;
use App\Core\App;
use App\Core\Session;
use App\Core\Database;
use  App\Core\Validator;
use App\Core\FileUpload;
use Src\Service\SecurityService;
use Src\Service\UtilisateurService;
use App\Core\Abstract\AbstractController;
use Src\Repository\UtilisateurRepository;

class InscriptionController extends AbstractController {
    private SecurityService $securityService;
        private PDO $pdo; 

    public function __construct()
    {
        parent::__construct();
        $this->securityService= App::getDependency('securityService') ;
        $this->pdo=App::getDependency("database");

    }
        
    
    public function index()
    {
        $this->renderhtml('inscription/inscription.html.php');
    }
    
    public function inscrire() 
    {
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
            $errors = Validator::validateInscription($data, $this->pdo);
            $this->session->set("errors",$errors);
            


            
            // Inscription
            if ($this->securityService->inscrire($data)) {
                 header("location:/");
                 exit;
            } else 
            { 

                self::index();
            }
        }
    }

    
   
    
   
}
