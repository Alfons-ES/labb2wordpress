<?php
/**
 * Database-klass
 * Hanterar anslutning till MySQL-databasen med PDO.
 * Enkel Singleton-liknande pattern för att återanvända samma anslutning.
 */
class Database {
    private static $instance = null;
    private $pdo;

    private $host = 'localhost';
    private $dbname = 'bucketlist_db';
    private $username = 'root';
    private $password = '';          

    private function __construct() {
        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $this->pdo = new PDO($dsn, $this->username, $this->password, $options);
        } catch (PDOException $e) {
            // I produktion ska man inte visa felmeddelanden så här
            die("Databasanslutning misslyckades: " . $e->getMessage());
        }
    }

    /**
     * Hämtar den enda instansen av Database
     */
    public static function getInstance(): Database {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    /**
     * Returnerar PDO-objektet
     */
    public function getConnection(): PDO {
        return $this->pdo;
    }
}