 <?php
          $alltransaction=( $this->session->get('all'));    
        //   var_dump($alltransaction);
        //   die; 

 ?>
 <div class="bg-white p-4 rounded-xl shadow-md mb-2">
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
                        <div class="space-y-4">
                
                

               
            

                <!-- Transaction 3 -->

             <?php foreach ($alltransaction as $t): ?>
    <?php
        // Détermination des styles selon le type de transaction
        $type = strtolower($t['type']);
        $montant = number_format($t['montant'], 0, ',', ' ') . ' FCFA';
        $date = date('d F Y', strtotime($t['date']));

        // Paramètres dynamiques
        switch ($type) {
            case 'depot':
                $icon = 'fa-comments-dollar';
                $color = 'green-500';
                $prefix = '+';
                $textColor = 'text-green-600';
                $label = 'Dépôt';
                break;
            case 'retrait':
                $icon = 'fa-right-left';
                $color = 'red-500';
                $prefix = '-';
                $textColor = 'text-red-600';
                $label = 'Retrait';
                break;
            case 'paiement':
                $icon = 'fa-cart-shopping';
                $color = 'maxit-orange'; // change si besoin
                $prefix = '-';
                $textColor = 'text-red-600';
                $label = 'Paiement';
                break;
            default:
                $icon = 'fa-circle-question';
                $color = 'gray-500';
                $prefix = '';
                $textColor = 'text-gray-600';
                $label = ucfirst($type);
        }
    ?>
    <div class="transaction-item flex flex-col md:flex-row justify-between items-center bg-gray-50 p-2 rounded-xl border-l-4 border-maxit-orange hover:shadow-md hover:-translate-y-1 transition-all duration-300" data-type="<?= $type ?>">
        <div class="flex items-center gap-4 mb-4 md:mb-0">
            <div class="w-12 h-12 bg-<?= $color ?> rounded-full flex items-center justify-center text-white font-bold text-lg">
                <i class="fa-solid <?= $icon ?>"></i>
            </div>
            <div>
                <h3 class="text-xl font-semibold text-gray-800"><?= $label ?></h3>
                <div class="text-gray-600"><?= $date ?></div>
            </div>
        </div>
        <div class="text-2xl font-bold <?= $textColor ?>"><?= $prefix . $montant ?></div>
    </div>
<?php endforeach; ?>


                
                </div>
