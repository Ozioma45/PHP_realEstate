<?php
session_start();
require_once "../../config/database.php";

$db = (new Database())->connect();

// Get inputs
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$password = $_POST['password'];

if (!$name || !$email || !$phone || !$password) {
    $_SESSION['error'] = "All fields are required";
    header("Location: ../add-admin.php");
    exit;
}

// Hash password
$hashed = password_hash($password, PASSWORD_DEFAULT);

// ==========================
// HANDLE IMAGE
// ==========================
$imageName = null;

if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {

    $tmp = $_FILES['image']['tmp_name'];
    $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));

    $allowed = ['jpg','jpeg','png'];

    if (!in_array($ext, $allowed)) {
        $_SESSION['error'] = "Invalid image type";
        header("Location: ../add-admin.php");
        exit;
    }

    if ($_FILES['image']['size'] > 2 * 1024 * 1024) {
        $_SESSION['error'] = "Image must be less than 2MB";
        header("Location: ../add-admin.php");
        exit;
    }

    $imageName = time() . "_admin." . $ext;
    move_uploaded_file($tmp, "../../uploads/" . $imageName);
}

// ==========================
// INSERT ADMIN
// ==========================
$stmt = $db->prepare("
    INSERT INTO admins (name, email, phone, password, image)
    VALUES (:name, :email, :phone, :password, :image)
");

$stmt->execute([
    ':name' => $name,
    ':email' => $email,
    ':phone' => $phone,
    ':password' => $hashed,
    ':image' => $imageName
]);

$_SESSION['success'] = "Admin added successfully!";
header("Location: ../add-admin.php");
exit;