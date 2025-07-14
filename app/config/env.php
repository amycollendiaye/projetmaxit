<?php
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();
define("DB_DRIVER", $_ENV['DB_DRIVER'] ?? 'pgsql');
define("DB_HOST", $_ENV['DB_HOST'] ?? 'localhost');
define("DB_PORT", $_ENV['DB_PORT'] ?? '5432');
define("DB_NAME", $_ENV['DB_NAME'] ?? '');
define("DB_USER", $_ENV['DB_USER'] ?? '');
define("DB_PASSWORD", $_ENV['DB_PASSWORD'] ?? '');