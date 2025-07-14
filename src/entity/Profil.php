<?php
 namespace Src\Entity;

 class Profil 
 {
    private int  $id;
    private string  $libelle;
     private  array $utilisateurs;
     
    public function __construct($id, $liblle)
    {
         $this->id=$id;
         $this->libelle=$libeele;
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
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

     /**
      * Get the value of typeutilsateur
      */ 
    

     /**
      * Get the value of utilisateurs
      */ 
     public function addtilisateurs($utilsateur)
     {
          return $utilisateurs[]= $this->utilisateur;
     }
     

 }