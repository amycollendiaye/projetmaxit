<?php
  namespace Src\Entity;

  enum TypeCompte:string 
  {
     case PRINCIPAL="client";
     case SECONDAIRE="secondaire";
  }
