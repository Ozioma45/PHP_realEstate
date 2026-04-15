<?php
session_start();
require_once "../../config/database.php";

$db = (new Database())->connect();

$adminId = $_SESSION['admin_id'];

// Get form data
$name     = $_POST['name'];
$email    = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// Get current image
$stmt = $db->prepare("SELECT image FROM admins WHERE id = ?");
$stmt->execute([$adminId]);
$current = $stmt->fetch(PDO::FETCH_ASSOC);

// ======================
// IMAGE UPLOAD VALIDATION
// ======================
$imageName = $current['image']; // keep old image by default

if (!empty($_FILES['image']['name'])) {

    $allowedTypes = ['jpg', 'jpeg', 'png'];
    $fileName     = $_FILES['image']['name'];
    $fileTmp      = $_FILES['image']['tmp_name'];
    $fileSize     = $_FILES['image']['size'];
    $fileError    = $_FILES['image']['error'];

    // Get file extension
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    // Validate extension
    if (!in_array($fileExt, $allowedTypes)) {
        $_SESSION['error'] = "Only JPG, JPEG, and PNG files are allowed.";
        header("Location: ../admin-profile.php");
        exit;
    }

    // Validate size (2MB = 2 * 1024 * 1024)
    if ($fileSize > 2 * 1024 * 1024) {
       $_SESSION['error'] = "Image must not be larger than 2MB.";
        header("Location: ../admin-profile.php");
        exit;
    }

    // Check for upload errors
    if ($fileError !== 0) {
        $_SESSION['error'] = "Error uploading file.";
        header("Location: ../admin-profile.php");
        exit;
    }

    // Generate unique file name
    $newFileName = time() . '_' . uniqid() . '.' . $fileExt;
    $targetPath  = "../uploads/" . $newFileName;

    // Move file
    if (move_uploaded_file($fileTmp, $targetPath)) {

        // OPTIONAL: delete old image (if exists)
        if (!empty($current['image']) && file_exists("../uploads/" . $current['image'])) {
            unlink("../uploads/" . $current['image']);
        }

        $imageName = $newFileName;

    } else {
         $_SESSION['error'] = "Failed to upload image.";
        header("Location: ../admin-profile.php");
        exit;
        
    }
}

// Update
if (!empty($password)) {
    $password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $db->prepare("UPDATE admins SET name=?, email=?, phone=?, image=?, password=? WHERE id=?");
    $stmt->execute([$name, $email, $phone, $imageName, $password, $adminId]);

} else {
    $stmt = $db->prepare("UPDATE admins SET name=?, email=?, phone=?, image=? WHERE id=?");
    $stmt->execute([$name, $email, $phone, $imageName, $adminId]);
}

$_SESSION['success'] = "Profile Updated successfully!";
header("Location: ../admin-profile.php");
exit;