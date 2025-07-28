<?php

    $data = $this->session->get('donnescompte');
    $solde=$data["solde"];
  $prenom=  ($data["prenom"] );
  $nom=($data["nom"]);
   $name="    $prenom $nom ";
   $numero=$data["numerotelephone"]

             

?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte - MAXIT SA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/js/all.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'maxit-orange': '#FF6B35',
                        'maxit-light-orange': '#FF8A5B',
                        'maxit-peach': '#FFE5D9',
                        'maxit-dark': '#2C2C2C',
                        'maxit-gray': '#4A4A4A'
                    }
                }
            }
        }
    </script>
</head>
<body class="bg-gray-100 font-sans">
    <!-- Navigation Sidebar -->
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <div class="w-64 bg-maxit-dark text-white flex flex-col">
            <!-- Logo -->
            <div class="p-6 border-b border-gray-700">
                <div class="flex items-center gap-2">
                    <div class="bg-maxit-orange p-2 rounded">
                        <i class="fas fa-bolt text-white"></i>
                    </div>
                    <div>
                        <span class="text-xl font-bold">MAXIT</span>
                        <span class="text-maxit-orange text-xl font-bold">SA</span>
                    </div>
                </div>
            </div>

            <!-- User Profile -->
            <div class="p-6 border-b border-gray-700">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-maxit-orange rounded-full flex items-center justify-center">
                        <i class="fas fa-user text-white"></i>
                    </div>
                    <div>
                        <div class="font-medium"><?= $name ?></div>
                        <div class="text-sm text-gray-400"><?= $numero?></div>
                    </div>
                </div>
            </div>

            <!-- Navigation Menu -->
            <nav class="p-4 flex-1">
                <ul class="space-y-4">
                    <li>
                        <a href="#" class="flex items-center bg-maxit-orange gap-3 p-4 rounded-lg hover:bg-gray-700 transition-colors">
                            <i class="fas fa-tachometer-alt text-white"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 p-4 rounded-lg hover:bg-gray-700 transition-colors">
                            <i class="fa-solid fa-right-left text-maxit-orange"></i>
                            <span>Transfert</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 p-4 rounded-lg text-white">
                            <i class="fa-solid fa-cash-register text-maxit-orange"></i>
                            <span>Paiement</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center gap-3 p-4 rounded-lg hover:bg-gray-700 transition-colors">
                            <i class="fas fa-user-edit text-maxit-orange"></i>
                            <span>Changer compte</span>
                        </a>
                    </li>
                    <li>
                        <a href="create" class="flex items-center gap-3 p-4 rounded-lg hover:bg-gray-700 transition-colors">
                            <i class="fas fa-plus-circle text-maxit-orange"></i>
                            <span>Créer compte</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Bou foton de déconnexion -->
              <form action="logout" method="post" >
            <div class="p-4 border-t border-gray-700">
                <button  type="submit" class="flex items-center gap-3 p-4 rounded-lg hover:bg-red-600 transition-colors text-red-400 hover:text-white"> deconnexion
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </div>
            </form>
        </div>
    <div class="flex-1 p-4">
            <!-- Header -->
            <div class="flex    justify-evenly items-center mb-2">
<div class="flex-1 max-w-md">
                    <input type="text" class="w-full px-4 py-3 border-2 border-maxit-orange rounded-full outline-none focus:border-orange-500" placeholder="Rechercher une transaction...">
                </div>                     <div class="bg-white p-2 rounded-xl text-center shadow-md border-t-4 border-maxit-orange">
                    <div class="text-gray-600 text-lg">Solde actuel (FCFA)</div>

<div class="text-3xl font-bold text-maxit-orange mb-2"><?= number_format($solde, 2, ',', ' ') ?>F</div>                    <button class="bg-maxit-orange text-white px-4 py-2 rounded-lg hover:bg-maxit-light-orange transition-colors">
                        <i class="fas fa-qrcode mr-2"></i>
                        Scanner
                    </button>
                </div>
                <div class="flex items-center gap-4">
                    <select class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-maxit-orange">
                        <option>Principal</option>
                        <option>Secondaire</option>
                    </select>
                
                            </div>

            </div>
             <div class="bg-maxit-orange text-white p-4  rounded-2xl mb-2 ">
            <h1 class="text-2xl md:text-2xl font-bold mb-3  ">Historique des Transactions</h1>
            <p class="text-lg opacity-90">Gérez et consultez toutes vos transactions facilement</p>
        </div>
                <?php  echo  $contentForLayout ?>

            </div>

        <!-- Contenu principal -->

    </div>
</body>
</html>