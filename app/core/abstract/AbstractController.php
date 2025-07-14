<?php
namespace App\Core\Abstract;
 use App\Core\Session;

abstract class AbstractController{
     
      protected  Session $session;
      protected string $layout ='security';

     public function __construct(){
        $this->session=Session::getInstance();
     }
    abstract public function  index();
    protected function renderhtml($view)
    {
            
            ob_start();
            require_once __DIR__ . '/../../../templates/'.$view;         
            $contentForLayout=ob_get_clean();
            require_once __DIR__ . "/../../../templates/layout/$this->layout.layout.html.php";
        

    
    }

}