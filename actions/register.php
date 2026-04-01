<?php
session_start();

require_once "../config/database.php";
require_once "../classes/User.php";

$db = (new Database())->connect();
$user = new User($db);

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$password = $_POST['password'];

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
        die("Invalid file type. Only JPG, JPEG, and PNG are allowed.");
    }

    if ($fileSize > 2 * 1024 * 1024) {
        die("File size exceeds 2MB limit.");
    }

    //generate name
    $imageName = time() . "_" . uniqid() . "." . $ext;

    move_uploaded_file($fileTmp, "../uploads/" . $imageName);

}

if ($user->register($name, $email, $phone, $password, $imageName)) {
    $_SESSION['success'] = "Registration successful!";
    header("Location: ../login.php");
} else {
    echo "Registration failed";
}