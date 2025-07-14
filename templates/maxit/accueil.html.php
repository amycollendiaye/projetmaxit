<?php
use App\Core\Session;
session_start();
var_dump($_SESSION); // tu dois voir ['donnes' => ...]
$data = Session::get('donnes');
var_dump($data);
?>    <!-- Main Content -->
        <div class="flex-1 p-4">
            <!-- Header -->
            <div class="flex justify-between items-center mb-2">
                <h1 class="text-3xl font-bold text-maxit-dark">dashboard</h1>
                     <div class="bg-white p-2 rounded-xl text-center shadow-md border-t-4 border-maxit-orange">
                    <div class="text-gray-600 text-lg">Solde actuel (FCFA)</div>

<div class="text-3xl font-bold text-maxit-orange mb-2"><?= htmlspecialchars($data["solde"]) ?></div>                    <button class="bg-maxit-orange text-white px-4 py-2 rounded-lg hover:bg-maxit-light-orange transition-colors">
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

            <!-- Payment Form -->
            
 <div class="bg-maxit-orange text-white p-4  rounded-2xl mb-8">
            <h1 class="text-3xl md:text-4xl font-light mb-3">Historique des Transactions</h1>
            <p class="text-lg opacity-90">Gérez et consultez toutes vos transactions facilement</p>
        </div>

        <!-- Statistiques -->
      

        <!-- Filtres -->
        <div class="bg-white p-4 rounded-xl shadow-md mb-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-4">Filtrer par type :</h3>
            <div class="flex flex-wrap gap-3">
                <button class="filter-btn bg-maxit-orange text-white px-6 py-2 rounded-full border-2 border-maxit-orange hover:bg-maxit-light-orangey transition-all duration-300 font-medium" onclick="filterTransactions('all')">
                    Toutes
                </button>
                <button class="filter-btn bg-white text-maxit-orange px-6 py-2 rounded-full border-2 border-maxit-orange hover:bg-maxit-orange hover:text-white transition-all duration-300 font-medium" onclick="filterTransactions('paiement')">
                    Paiements
                </button>
                <button class="filter-btn bg-white text-maxit-orange px-6 py-2 rounded-full border-2 border-maxit-orange hover:bg-maxit-orange hover:text-white transition-all duration-300 font-medium" onclick="filterTransactions('depot')">
                    Dépôts
                </button>
                <button class="filter-btn bg-white text-maxit-orange px-6 py-2 rounded-full border-2 border-maxit-orange hover:bg-maxit-orange hover:text-white transition-all duration-300 font-medium" onclick="filterTransactions('retrait')">
                    Retraits
                </button>
            </div>
        </div>

        <!-- Liste des transactions -->
        <div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8 pb-6 border-b-2 border-gray-100">
                <a href="#" class="text-maxit-orange hover:text-maxit-light-orangey text-xl font-medium transition-colors duration-300">
                    Voir Plus <i class="fa-regular fa-circle-right"></i>
                </a>
            </div>

            <div class="space-y-4">
                <!-- Transaction 1 -->
                <div class="transaction-item flex flex-col md:flex-row justify-between items-center p-5 bg-gray-50 rounded-xl border-l-4 border-maxit-orange hover:shadow-md hover:-translate-y-1 transition-all duration-300" data-type="paiement">
                    <div class="flex items-center gap-4 mb-4 md:mb-0">
                        <div class="w-12 h-12 bg-maxit-orange rounded-full flex items-center justify-center text-white font-bold text-lg">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Paiement</h3>
                            <div class="text-gray-600">12 janvier 2025</div>
                        </div>
                    </div>
                    <div class="text-2xl font-bold text-red-600">-25 000 FCFA</div>
                </div>

                <!-- Transaction 2 -->
                <div class="transaction-item flex flex-col md:flex-row justify-between items-center p-5 bg-gray-50 rounded-xl border-l-4 border-maxit-orange hover:shadow-md hover:-translate-y-1 transition-all duration-300" data-type="depot">
                    <div class="flex items-center gap-4 mb-4 md:mb-0">
                        <div class="w-12 h-12 bg-green-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            <i class="fa-solid fa-comments-dollar"></i>
             </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Dépôt</h3>
                            <div class="text-gray-600">23 juin 2025</div>
                        </div>
                    </div>
                    <div class="text-2xl font-bold text-green-600">+245 488 FCFA</div>
                </div>

                <!-- Transaction 3 -->
                <div class="transaction-item flex flex-col md:flex-row justify-between items-center p-5 bg-gray-50 rounded-xl border-l-4 border-maxit-orange hover:shadow-md hover:-translate-y-1 transition-all duration-300" data-type="retrait">
                    <div class="flex items-center gap-4 mb-4 md:mb-0">
                        <div class="w-12 h-12 bg-red-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                            <i class="fa-solid fa-right-left"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-gray-800">Retrait</h3>
                            <div class="text-gray-600">23 juillet 2025</div>
                        </div>
                    </div>
                    <div class="text-2xl font-bold text-red-600">-245 488 FCFA</div>
                </div>

             

                
                </div>

                <!-- Transaction 6 -->
                
                <!-- Transaction 8 -->
            
            </div>
        </div>
    </div>