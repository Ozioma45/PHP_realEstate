<?php
session_start();
require_once "../../config/database.php";

$db = (new Database())->connect();

// Check if ID exists
if (!isset($_GET['id'])) {
    $_SESSION['error'] = "Invalid request";
    header("Location: ../admins.php");
    exit;
}

$id = $_GET['id'];

// ==========================
// OPTIONAL: DELETE IMAGE
// ==========================
$stmt = $db->prepare("SELECT image FROM admins WHERE id = :id");
$stmt->execute([':id' => $id]);
$admin = $stmt->fetch();

if ($admin && $admin['image']) {
    $imagePath = "../../uploads/" . $admin['image'];
    if (file_exists($imagePath)) {
        unlink($imagePath);
    }
}

// ==========================
// DELETE ADMIN
// ==========================
$stmt = $db->prepare("DELETE FROM admins WHERE id = :id");
$stmt->execute([':id' => $id]);

$_SESSION['success'] = "Admin deleted successfully!";
header("Location: ../admins.php");
exit;