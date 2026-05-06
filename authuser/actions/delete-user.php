<?php
session_start();
require_once "../../config/database.php";

$db = (new Database())->connect();

// Check if ID exists
if (!isset($_GET['id'])) {
    $_SESSION['error'] = "Invalid request";
    header("Location: ../users.php");
    exit;
}

$id = $_GET['id'];

// ==========================
// OPTIONAL: DELETE IMAGE
// ==========================
$stmt = $db->prepare("SELECT image FROM users WHERE id = :id");
$stmt->execute([':id' => $id]);
$user = $stmt->fetch();

if ($user && $user['image']) {
    $imagePath = "../../uploads/" . $user['image'];
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
}

// ==========================
// DELETE USER
// ==========================
$stmt = $db->prepare("DELETE FROM users WHERE id = :id");
$stmt->execute([':id' => $id]);

$_SESSION['success'] = "User deleted successfully!";
header("Location: ../users.php");
exit;