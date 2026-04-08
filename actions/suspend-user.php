<?php
require_once "../config/database.php";

$db = (new Database())->connect();

$id = $_GET['id'];

$stmt = $db->prepare("
    UPDATE users 
    SET status = IF(status='active','suspended','active')
    WHERE id = ?
");

$stmt->execute([$id]);

header("Location: ../users.php");
exit;