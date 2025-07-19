<?php
namespace App\Core\Middleware;
use   App\Core\Session;

 class Auth{
     private Session $session;

     public function __invoke(){
         $this->session =Session::getInstance();


         if(!$this->session->get("donnescompte"))
         {

            header("location:/");
            exit; 
         }
     
        
     }
 }