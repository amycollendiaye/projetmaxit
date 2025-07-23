<?php

 namespace Src\Entity;


 class Transtaction 
 {
     private int $id ;
     private int $date;
     private Compte $compte;
     private TypeTransaction $type;
      public function __construct($id,$date)
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