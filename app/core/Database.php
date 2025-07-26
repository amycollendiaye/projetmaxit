<?php
namespace App\Core;
// composer require vlucas/phpdotenv
use PDO;
use PDOException;

class Database 
{

//     DB_USER_POSTGRES=postgres



// DB_NAME= railway
    private static ?PDO  $pdo = null;
    public static function getInstance(): PDO
    {
# DB_DSN_MYSQL=mysql:host=127.0.0.1;dbname=mrsfall;port=3306

        $dns='pgsql:host=centerbeam.proxy.rlwy.net;dnmane=railway;port13388';
        if (self::$pdo === null) {
            // Utilisation des constantes définies dans env.php
            self::$pdo = new PDO(
                $dns,
                "postgres",
                "qIYxSUkXYhWdzpORswiEreFPlqNoXPfc",
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