<?php
namespace Cores;

use PDO;
use PDOException;

class Database 
{
    public PDO $pdo;

    public function __construct() 
    {
        // Change 'portfolio_db' to whatever you named your database in phpMyAdmin
        $dsn = "mysql:host=localhost;dbname=portfolio_db;charset=utf8mb4";
        $username = "root"; // Default XAMPP username
        $password = "";     // Default XAMPP password is empty

        try {
            $this->pdo = new PDO($dsn, $username, $password);
            // Throw an error if something goes wrong
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Automatically return data as a clean associative array
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Stop the app and show the error if the database is offline
            die("Database Connection Failed: " . $e->getMessage());
        }
    }
}