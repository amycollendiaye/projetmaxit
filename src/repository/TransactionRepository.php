<?php 
namespace Src\Repository;
use App\Core\Database;
use PDO;

class TransactionRepository
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance();
    }

}