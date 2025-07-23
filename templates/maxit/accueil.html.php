<?php
  $transaction  = $this->session->get('transaction');
// var_dump($transaction);
//  die;
?>
    <!-- Main Content -->
    
            <!-- Payment Form -->
            


        <!-- Statistiques -->
      

        <!-- Filtres -->
 

        <!-- Liste des transactions -->
        <div class="bg-white rounded-2xl p-8 md:p-8 shadow-lg mt-8">
            <div class="flex flex-col md:flex-row justify-between items-center mb-8 pb-6 border-b-2 border-gray-100">
                <a href="all" class="text-maxit-orange hover:text-maxit-light-orangey text-xl font-medium transition-colors duration-300">
                    Voir Plus <i class="fa-regular fa-circle-right"></i>
                </a>
            </div>

            <div class="space-y-4">
                
                

               
            

                <!-- Transaction 3 -->

             <?php foreach ($transaction as $t): ?>
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

                <!-- Transaction 6 -->
                
                <!-- Transaction 8 -->
            
            </div>
        </div>
    </div>