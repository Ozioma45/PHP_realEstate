<?php
require_once "../config/database.php";

$db = (new Database())->connect();

$id = $_GET['id'] ?? null;

if ($id) {
    $stmt = $db->prepare("DELETE FROM users WHERE id = ?");
    $stmt->execute([$id]);
}

header("Location: ../users.php");
exit;