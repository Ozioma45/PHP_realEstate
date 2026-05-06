<?php
require_once "../config/database.php";

$db = (new Database())->connect();

$name = "Super Admin";
$email = "admin@gmail.com";
$phone = "08000000000";
$password = password_hash("123456", PASSWORD_DEFAULT);

$stmt = $db->prepare("
    INSERT INTO admins (name, email, phone, password)
    VALUES (?, ?, ?, ?)
");

$stmt->execute([$name, $email, $phone, $password]);

echo "Admin created successfully!";