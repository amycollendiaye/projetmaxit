<?php
namespace Src\Controller;
use  App\Core\Abstract\AbstractController;

class   SecurityController extends AbstractController {
        public  function index(){
    $this->renderhtml('security/security.html.php');

   }

}