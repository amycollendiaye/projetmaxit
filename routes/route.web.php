<?php
use Src\Controller\InscriptionController;
use Src\Controller\SecurityController;
use Src\Controller\CompteController;
use App\Core\Middleware\Auth;




 $routes=
    [
            "sign"=>["controller"=>InscriptionController::class,"fonction"=>'index'],
            "inscrire"=>["controller"=>InscriptionController::class,"fonction"=>'inscrire'],
            ""=>["controller"=>SecurityController::class,"fonction"=>'index'],
            "login"=>["controller"=>CompteController::class,"fonction"=>'login'],
            "show"=>["controller"=>CompteController::class,"fonction"=>'show','middleware'=>["auth"=>Auth::class]],
            "logout"=>["controller"=>CompteController::class,"fonction"=>'logout'],
            "all"=>["controller"=>CompteController::class,"fonction"=>'transaction'],
            "create"=>["controller"=>CompteController::class,"fonction"=>'create']








   ];


