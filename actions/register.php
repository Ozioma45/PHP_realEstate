<?php
session_start();

require_once "../config/database.php";
require_once "../classes/User.php";

$db = (new Database())->connect();
$user = new User($db);

$allowed_roles = ['agent', 'builder'];

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$role = $_POST['role'] ?? 'agent';
$password = $_POST['password'];

if (!in_array($role, $allowed_roles)) {
    $role = 'agent'; // fallback
}

$stmt = $db->prepare("SELECT id FROM users WHERE email = :email");
$stmt->execute([':email' => $email]);

if ($stmt->fetch()) {
    $_SESSION['error'] = "Email already exists!";
    header("Location: ../login.php");
    exit;
}

$imageName = null;

//check if image is uploaded
if (isset($_FILES['image']) && $_FILES['image']['error'] === 0){

    $fileTmp = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];

    //Get file extension
    $ext = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    //Allowed extensions
    $allowed = ['jpg', 'jpeg', 'png'];

    if(!in_array($ext, $allowed)){
        $_SESSION['error'] = "Only JPG, JPEG, PNG allowed";
        header("Location: ../login.php");
        exit;
    }

    if ($fileSize > 2 * 1024 * 1024) {
        $_SESSION['error'] = "Image too large (max 2MB)";
        header("Location: ../login.php");
        exit;
    }

    //generate name
    $imageName = time() . "_" . uniqid() . "." . $ext;

    move_uploaded_file($fileTmp, "../uploads/" . $imageName);

}

if ($user->register($name, $email, $phone, $password, $role, $imageName)) {
    $_SESSION['success'] = "Registration successful!";
    header("Location: ../login.php");
    exit;
} else {
    $_SESSION['error'] = "Registration failed. Email may already be in use.";
    header("Location: ../login.php");
    exit;
}