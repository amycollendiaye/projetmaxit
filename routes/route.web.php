<?php
use Src\Controller\InscriptionController;
use Src\Controller\SecurityController;
use Src\Controller\CompteController;



 $routes=
    [
            "sign"=>["controller"=>InscriptionController::class,"fonction"=>'index'],
            "inscrire"=>["controller"=>InscriptionController::class,"fonction"=>'inscrire'],
            ""=>["controller"=>SecurityController::class,"fonction"=>'index'],
            "login"=>["controller"=>CompteController::class,"fonction"=>'login'],
            "show"=>["controller"=>CompteController::class,"fonction"=>'show']




    ];


