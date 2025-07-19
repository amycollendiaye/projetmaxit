<?php
namespace App\Core\Abstract;

use App\Core\App;

use PDO;

 abstract  class AbstractRepository 
{
        
      protected  PDO $pdo; 
       
      public function  __construct()
      {
          
         $this->pdo=App::getDependency("database");
      }


    // abstract public function selectAll();
    // abstract public function selectById($id);
    // abstract public function  insert();

}