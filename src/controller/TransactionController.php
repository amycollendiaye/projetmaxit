 <?php
// namespace Src\Controller;
// use App\Core\Abstract\AbstractController;
// use App\Core\Session;
// use Src\Service\TransactionService;

// class TransactionController extends AbstractController {
//     private TransactionService $service;
    
//     public function __construct()
//     {
//         $this->service = new TransactionService();
//     }
    
//     public function index()
//     {
      
//         $compteId = $this->session->get('compte_id');
        
//         if ($compteId === null) {
//             header("Location: /");
 //             exit;
//         }
        
//         $transactions = $this->service->getTransactionsByCompte($compteId);
        
//         $this->renderhtml('transaction/index.html.php', [
//             'tranactions' => $transactions
//         ]);
//     }
// 