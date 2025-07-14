<?php
namespace App\core;
// composer require vlucas/phpdotenv
use PDO;
use PDOException;

class Database 
{
    private static ?PDO  $pdo = null;
    public static function getConnection(): PDO
    {
        if (self::$pdo === null) {
            // Utilisation des constantes définies dans env.php
            $driver = DB_DRIVER;
            $host = DB_HOST;
            $port = DB_PORT;
            $dbname = DB_NAME;
            $user = DB_USER;
            $pass = DB_PASSWORD;

            $dsn = "$driver:host=$host;port=$port;dbname=$dbname";
            // var_dump($dsn); die(); // À retirer en production
            try {
                self::$pdo = new PDO($dsn, $user, $pass, [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
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