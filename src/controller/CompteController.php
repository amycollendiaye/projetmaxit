<?php
namespace Src\Controller;
use  App\Core\Abstract\AbstractController;
use  App\Core\Validator;

use App\Core\Session;
use Src\Service\CompteService;
use App\Core\Database;
use Src\Controller\SecurityController;




class   CompteController extends AbstractController {
          protected string $layout ='base';
          private CompteService  $service ;
 public function __construct()
 {
    $this->service =new CompteService();
 }
       public function index(){
         $SecurityController=new SecurityController();
         $SecurityController->index();
   }
    public function show()
    {
       $this->renderhtml('maxit/accueil.html.php');
    }
  public function login()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $numero = $_POST['numero'];

        $user =$this->service->seconnecter($numero);
       
        if ($user) {
      $id=($user["utilisateur_id"]);
   $data=$this->service->getiduser($id);
   
Session::set('donnes', $data);
         
            header("location:/show");
            exit;
        } else {
                var_dump("amycolle");

            // $errors['login'] = "Numéro de téléphone inconnu";
            // $this->session->set('errors', $errors);
            self::index();
        }
    } else {
       var_dump("echoue");
        self::index();
    }
}

}