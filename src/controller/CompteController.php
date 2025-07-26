<?php
namespace Src\Controller;
use PDO;
use App\Core\App;
use App\Core\Session;
use App\Core\Database;
use App\Core\Validator;
use Src\Service\CompteService;
use Src\Controller\SecurityController;
use App\Core\Abstract\AbstractController;

class CompteController extends AbstractController {
    protected string $layout = 'base';
    private PDO $pdo;
    private CompteService $compteService;
     

    public function __construct()
{
        parent::__construct();
        // $this->pdo =$pdo;

        $this->compteService = App::getDependency("compteService");
    }
    
    public function transaction()
    {
         $alltransaction=( $this->session->get('all'));     
        $this->renderhtml('maxit/listtransaction.html.php', ["all"=>$alltransaction]);

     }
    public function index(){
        $SecurityController = new SecurityController();
        $SecurityController->index();
    }
    
public function show()
    {
        
       
$data = $this->session->get('donnescompte');
        
        if ($data === null) {
            header("Location: /");
            exit;
        }
        
    
        $transaction  = $this->session->get('transaction');

        $this->renderhtml('maxit/accueil.html.php',[$data ,$transaction] );
    }
    
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $numero = $_POST['numero'];

            $user = $this->compteService->seconnecter($numero);
           
            if ($user) {
                $utilisateurId = $user["utilisateur_id"];
            $compteId = $user["id"];

                // Récupérer les données spécifiques à cet utilisateur
                $dataCompte= $this->compteService->getiduser($utilisateurId);
                
                $transaction = $this->compteService->gettransactionuser($compteId);
                $alltransaction=$this->compteService->alltransaction($compteId);
                
            $this->session->set('user_id', $utilisateurId);
            $this->session->set('compte_id', $compteId);
            $this->session->set('all', $alltransaction);

            $this->session->set('donnescompte', $dataCompte);
            $this->session->set('transaction', $transaction);
               
            $data= $this->session->get('donnescompte');
          
           $transaction= $this->session->get('transaction');
            
           

             
                header("location:/show");
                exit;
            } else {
                self::index();
            }
        } else {
            self::index();
    }
        }

    public function logout(){
         if ($_SERVER["REQUEST_METHOD"]=="POST")
         {
            $this->session->destroy();
        header("location:/");
        exit;
         }
           header("location:show");
        exit;
         
      
    }
      public function create( )

      {
        //  $this->layout="null";
                 $this->renderhtml("maxit/comptesecondaire.html.php");

      }
        public function createcompte()
        {
             if($_SERVER["REQUEST_METHOD"]==="POST")
            {
               $data=[

              $number=  trim($_POST['telephone']),
                $solde= trim($_POST['solde']),
               ];
               var_dump($number);
                die;
                $errors=Validator::validateInscription($data ,$this->pdo);
            }
           
        }
    
}