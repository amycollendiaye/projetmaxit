<?php
 namespace Src\Entity;

 class Utilisateur
{
    private int    $id;
    private string $nom;
    private string $prenom;
    private string $adresse;
    private string $telephone;
    private string $photo ;
    private   array $typecompte; 
     private Profil $profil;

    
     public function  __construct($id,$nom,$prenom,$adresse,$telephone,$photo)
    {
        $this->id=$id;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->telephone= $telephone;
        $this->photo= $photo;

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
         * Get the value of nom
         */ 
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */ 
        public function setNom($nom)
        {
                $this->nom = $nom;

                return $this;
        }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }
     public function gettypecompte ()
     {
          return $this->typecompte;
     }
    //   public function addtypecompte($compte)
    //   {
    //      return $this->compte[]=$compte;
    //   }

     /**
      * Get the value of profil
      */ 
     public function getProfil()
     {
          return $this->profil;
     }

     /**
      * Set the value of profil
      *
      * @return  self
      */ 
     public function setProfil($profil)
     {
          $this->profil = $profil;

          return $this;
     }
}