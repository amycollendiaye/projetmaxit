<?php
namespace App\Core;
// composer require vlucas/phpdotenv
use PDO;
use PDOException;

class Database 
{
    private static ?PDO  $pdo = null;
    public static function getInstance(): PDO
    {
        if (self::$pdo === null) {
            // Utilisation des constantes définies dans env.php
            self::$pdo = new PDO(
                DB_DSN_POSTGRES,
                DB_USER_POSTGRES,
                DB_PASS_POSTGRES,
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        }

        return self::$pdo;
    }
}
// try {
//     $pdo = Database::getConnection();
//     echo "Connexion OK";
// } catch (Exception $e) {
//     echo "Erreur de connexion : " . $e->getMessage();
// }
// die;