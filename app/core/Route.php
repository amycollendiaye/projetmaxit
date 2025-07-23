<?php
namespace App\Core;

use Src\Controller\InscriptionController;
use Src\Controller\SecurityController;

 Class Route{
     public static function resolve(array $route){
         $uri=trim($_SERVER["REQUEST_URI"],'/');
        if(array_key_exists($uri ,$route))
        {
            $route=$route [$uri];
            
            // 
             if(!empty($route['middleware']))
             {
                 
                foreach (($route['middleware']) as $middlewarekey=>$middlewarevalue){
              
              
                  
                    $middlewareClass=$middlewarevalue;
                    $middlewareInstance=new $middlewareClass();
                   
                if(is_callable($middlewareInstance))
                {
                             $middlewareInstance();  
                 }   


                        }
                }
             }

            $controller = $route['controller'];

            $method=$route['fonction'];

            $controllername= new $controller();
          

            $controllername->$method();
      

        }
        // else
        // {
        //      $InscriptionController =new SecurityController();
        //      ($InscriptionController->index());
        // }


     }
 

