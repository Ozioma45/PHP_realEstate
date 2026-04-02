<?php
require_once "../config/database.php";

$db = (new Database())->connect();

$token = $_POST['token'];
$password = trim($_POST['password']);
$confirm = $_POST['confirm_password'];

if (empty($token)) {
    die("Invalid token");
}

if (strlen($password) < 6) {
    die("Password must be at least 6 characters.");
}

if ($password !== $confirm) {
    die("Passwords do not match");
}

// Find user with token
$stmt = $db->prepare("
    SELECT id FROM users 
    WHERE reset_token = :token 
    AND reset_expires > NOW()
");

$stmt->execute([':token' => $token]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    die("Invalid request");
}

// Hash new password
$hashed = password_hash($password, PASSWORD_DEFAULT);

// Update password & clear token
$stmt = $db->prepare("
    UPDATE users 
    SET password = :password, reset_token = NULL, reset_expires = NULL
    WHERE id = :id
");

$stmt->execute([
    ':password' => $hashed,
    ':id' => $user['id']
]);

if ($stmt->rowCount() > 0) {
    echo "Password reset successful. <a href='../login.php'>Login</a>";
} else {
    echo "Something went wrong. Try again.";
}