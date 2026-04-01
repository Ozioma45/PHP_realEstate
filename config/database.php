<?php

class Database {
    private $host = "localhost";
    private $db_name = "php_realestate";
    private $username = "ozioma1";
    private $password = "Oziblink@2846";

    public function connect() {
        try {
            $conn = new PDO(
                "mysql:host=$this->host;dbname=$this->db_name",
                $this->username,
                $this->password
            );

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $conn;

        } catch(PDOException $e) {
            die("Connection failed: " . $e->getMessage());
        }
    }
}