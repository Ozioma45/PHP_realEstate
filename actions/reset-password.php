<?php
session_start();
require_once "../config/database.php";

$db = (new Database())->connect();

$token = $_POST['token'] ?? null;
$password = trim($_POST['password']);
$confirm = $_POST['confirm_password'];

if (!$token) {
    $_SESSION['error'] = "Invalid token";
    header("Location: ../forgot-password.php");
    exit;
}

if (strlen($password) < 6) {
    $_SESSION['error'] = "Password must be at least 6 characters";
    header("Location: ../reset-password.php?token=$token");
    exit;
}

if ($password !== $confirm) {
    $_SESSION['error'] = "Passwords do not match";
    header("Location: ../reset-password.php?token=$token");
    exit;
}

// Check token
$stmt = $db->prepare("
    SELECT id FROM users 
    WHERE reset_token = :token 
    AND reset_expires > NOW()
");

$stmt->execute([':token' => $token]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    $_SESSION['error'] = "Invalid or expired link";
    header("Location: ../forgot-password.php");
    exit;
}

// Update password
$hashed = password_hash($password, PASSWORD_DEFAULT);

$stmt = $db->prepare("
    UPDATE users 
    SET password = :password, reset_token = NULL, reset_expires = NULL
    WHERE id = :id
");

$stmt->execute([
    ':password' => $hashed,
    ':id' => $user['id']
]);

$_SESSION['success'] = "Password reset successful!";
header("Location: ../login.php");
exit;