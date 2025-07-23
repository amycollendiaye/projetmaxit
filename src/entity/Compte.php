<?php
 namespace Src\Entity;
use  Src\Entity\TypeCompte;
use  Src\Entity\Utilisateur;


class Compte 
{
     private int  $id ;
     private string $numero;
     private int $solde;
     private Typecompte $type;
     private  UTilisateur $utilisateur;
     private array $transactions;
     public  function    __construct($id,$numero,$solde)
     {
          $this->id=$id;
          $this->numero=$numero;
          $this->solde=$solde ;
     }

     /**
      * Get the value of id
      */ 
     public function getId()
     {
          return $this->id;
     }

     /**
      * Set the value of id
      *
      * @return  self
      */ 
     public function setId($id)
     {
          $this->id = $id;

          return $this;
     }

     /**
      * Get the value of numero
      */ 
     public function getNumero()
     {
          return $this->numero;
     }


     public function setNumero($numero)
     {
          $this->numero = $numero;

          return $this;
     }

      /**
       * Get the value of type
       */ 

      public function getType()
      {
          return $this->type;
      }

      /**
       * Set the value of type
       *
       * @return  self
       */ 
     public function setType($type)
     {
          $this->type = $type;

          return $this;
      }

       /**
        * Get the value of utilisateur
        */ 
       public function getUtilisateur()
       {
          return $this->utilisateur;
       }

       /**
        * Set the value of utilisateur
        *
        * @return  self
        */ 
       public function setUtilisateur($utilisateur)
       {
              $this->utilisateur = $utilisateur;

              return $this;
       }

        /**
         * Get the value of transactions
         */ 
     public function getTransactions()
     {
               return $this->transactions;
     }
     public function addtransaction($transaction)
     {
          $this->transaction = $transaction;

          return $this;
     }
}