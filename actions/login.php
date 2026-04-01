<?php
session_start();

require_once "../config/database.php";
require_once "../classes/User.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if (!$email || !$password) {
        die("Email and password are required");
    }

    $db = (new Database())->connect();
    $userObj = new User($db);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $userObj->login($email, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['role'] = $user['role'];

        header("Location: ../index.php");
    } else {
        echo "Invalid email or password";
    }

} else {
    echo "Invalid request method";
}