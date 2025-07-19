<?php

use App\Core\Database;
use App\Core\Session;
use Src\Repository\CompteRepository;
use Src\Repository\TransactionRepository;
use Src\Repository\UtilisateurRepository;
use Src\Service\CompteService;
use Src\Service\SecurityService;
use Src\Service\TransactionService;

 $dependencies=
 [
    "core"=>
    [
        "database"=>Database::class,
        "session"=>Session::class,
    ],
    "repository"=>
    [
            "compteRepository"=>CompteRepository::class,
            "utilisateurRepository"=>UtilisateurRepository::class,
            "transactionRepository"=>TransactionRepository::class
    ],
    "service"=>
    [
        "compteService"=>CompteService::class,
        "securityService"=>SecurityService::class,
        "transactionService"=>TransactionService::class
    ]


 ];
  return $dependencies;