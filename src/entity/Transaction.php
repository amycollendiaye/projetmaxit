<?php
 namespace Src\Entity;
 namespace Src\Entity\Compte;
 namespace Src\Entity\TypeTransaction;



 class Transtaction 
 {
     private int $id ;
     private int $date;
     private Compte $compte;
     private TYpeTransaction $type;
      public function __construct($id,$numero)
      {
            $this->id=$id;
            $this->date=$date;
      }

     /**
      * Get the value of compte
      */ 
     public function getCompte()
     {
          return $this->compte;
     }

     /**
      * Set the value of compte
      *
      * @return  self
      */ 
     public function setCompte($compte)
     {
          $this->compte = $compte;

          return $this;
     }
 }