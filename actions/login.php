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
    $_SESSION['error'] = "Too many login attempts. Try again later.";
    header("Location: ../login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'] ?? null;
    $password = $_POST['password'] ?? null;

    if (!$email || !$password) {
        $_SESSION['error'] = "Email and password are required";
        header("Location: ../login.php");
        exit;
    }

  
    $userObj = new User($db);

    $user = $userObj->login($email, $password);

    if ($user) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        $_SESSION['role'] = $user['role'];
        
        $_SESSION['success'] = "Login successful!";
        header("Location: ../index.php");
         // Clear attempts
        $stmt = $db->prepare(
            "DELETE FROM login_attempts WHERE email = :email"
        );

        $update = $db->prepare("UPDATE users SET last_login = NOW() WHERE id = ?");
        $update->execute([$user['id']]);

        $stmt->execute([':email' => $email]);

        exit;
    } else {
        $_SESSION['error'] = "Invalid email or password";
        header("Location: ../login.php");

        // Log failed attempt
        $stmt = $db->prepare("
            INSERT INTO login_attempts (email, ip_address)
            VALUES (:email, :ip)
        ");

        $stmt->execute([
            ':email' => $email,
            ':ip' => $ip
        ]);

        exit;
    }

} else {
    $_SESSION['error'] = "Invalid request method";
    header("Location: ../login.php");
    exit;
}