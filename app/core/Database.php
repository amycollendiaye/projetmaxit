<?php
namespace App\Core;
// composer require vlucas/phpdotenv
use PDO;
use PDOException;

class Database 
{

//     DB_USER_POSTGRES=postgres
// DB_PASS_POSTGRES=qIYxSUkXYhWdzpORswiEreFPlqNoXPfc
// DB_HOST_POSTGRES=centerbeam.proxy.rlwy.net
// DB_PORT_POSTGRES=13388


// DB_NAME= railway
    private static ?PDO  $pdo = null;
    public static function getInstance(): PDO
    {
# DB_DSN_MYSQL=mysql:host=127.0.0.1;dbname=mrsfall;port=3306

        $dsn='pgsql:host=centerbeam.proxy.rlwy.net;dbname=railway;port=13388';
        if (self::$pdo === null) {
            // Utilisation des constantes définies dans env.php
            self::$pdo = new PDO(
                $dsn,
                "postgres"
                ,
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