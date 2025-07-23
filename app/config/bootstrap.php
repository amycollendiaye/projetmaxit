<?php
use App\Core\Route;
use Src\Entity\Utilisateur;
    

require_once '../routes/route.web.php';
require_once '../vendor/autoload.php';
require_once '../app/config/env.php';
require_once '../app/config/middlewares.php';
 require __DIR__ .'/dependencies.php';

Route::resolve($routes,$middlewares);
