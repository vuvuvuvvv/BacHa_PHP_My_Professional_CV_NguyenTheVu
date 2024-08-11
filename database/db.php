<?php
/*
*  Created by Nguyen The Vu - 404 Notfound
*   16-12-2023 00:09
*/

class Database {
    private static $instance = null;
    private static $connection;

    private function __construct() {
        try {
            self::$connection = new PDO("mysql:host=localhost;dbname=php_my_professional", "root", '');
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            $_SESSION['error'] = $e->getMessage();
            header('Location: error.php');
        }
    }

    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public static function getConnection() {
        if (self::$connection === null) {
            self::getInstance(); // Ensure the instance is created
        }
        return self::$connection;
    }

    public static function execute_q($query) {
        $statement = self::getConnection()->prepare($query);
        $statement->execute();
        return $statement;
    }

    public static function db_query($query) {
        $statement = self::execute_q($query);
        $statement->closeCursor();
    }

    public static function db_all($query) {
        $statement = self::execute_q($query);
        $getall = $statement->fetchAll(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $getall;
    }

    public static function db_first($query) {
        $statement = self::execute_q($query);
        $getall = $statement->fetch(PDO::FETCH_ASSOC);
        $statement->closeCursor();
        return $getall;
    }
}

Database::getInstance(); // Initialize the database connection
