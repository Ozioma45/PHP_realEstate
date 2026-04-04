<?php
session_start();

require_once "../config/database.php";
require_once "../classes/User.php";

  $db = (new Database())->connect();

$ip = $_SERVER['REMOTE_ADDR'];
$email = $_POST['email'];

// Check attempts
$stmt = $db->prepare("
    SELECT COUNT(*) FROM login_attempts 
    WHERE (email = :email OR ip_address = :ip)
    AND created_at > (NOW() - INTERVAL 5 MINUTE)
");

$stmt->execute([
    ':email' => $email,
    ':ip' => $ip
]);

$attempts = $stmt->fetchColumn();

if ($attempts >= 5) {
    die("Too many login attempts. Try again later.");
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if (!$email || !$password) {
        die("Email and password are required");
    }

  
    $userObj = new User($db);

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = $userObj->login($email, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['role'] = $user['role'];

        header("Location: ../index.php");

        // Clear attempts
        $stmt = $db->prepare("
            DELETE FROM login_attempts WHERE email = :email
        ");

        $stmt->execute([':email' => $email]);
    } else {
        echo "Invalid email or password";

        // Log failed attempt
        $stmt = $db->prepare("
            INSERT INTO login_attempts (email, ip_address)
            VALUES (:email, :ip)
        ");

        $stmt->execute([
            ':email' => $email,
            ':ip' => $ip
        ]);
    }

} else {
    echo "Invalid request method";
}