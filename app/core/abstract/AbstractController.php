<?php
namespace App\Core\Abstract;

use App\Core\App;
use App\Core\Session;

abstract class AbstractController{
     
      protected  Session $session;
      protected string $layout ='security';

     public function  __construct(){
        $this->session=App::getDependency("session");
     }
    abstract public function  index();

    protected function renderhtml(string $view = "",array $data = [])
    {
            
            ob_start();
            require_once __DIR__ . '/../../../templates/'.$view;         
            $contentForLayout=ob_get_clean();
            require_once __DIR__ . "/../../../templates/layout/$this->layout.layout.html.php";
        

    
    }

}