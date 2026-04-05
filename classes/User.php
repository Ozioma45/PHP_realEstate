<?php

class User {
    private $conn;
    private $table = "users";

    public function __construct($db) {
        $this->conn = $db;
    }

    // Register user
public function register($name, $email, $phone, $password, $role, $image) {

    $hashed = password_hash($password, PASSWORD_DEFAULT);

    $query = "INSERT INTO users (name, email, phone, password, role, image)
              VALUES (:name, :email, :phone, :password, :role, :image)";

    $stmt = $this->conn->prepare($query);

    try {
        return $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':phone' => $phone,
            ':password' => $hashed,
            ':role' => $role,
            ':image' => $image
        ]);
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            return false; // duplicate email
        }
        throw $e;
    }
}

    // Login user
    public function login($email, $password) {
        $query = "SELECT * FROM $this->table WHERE email = :email LIMIT 1";

        $stmt = $this->conn->prepare($query);
        $stmt->execute([':email' => $email]);

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return false;
    }
}