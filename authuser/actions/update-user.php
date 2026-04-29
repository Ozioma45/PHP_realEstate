<?php
session_start();
require_once "../../config/database.php";

$db = (new Database())->connect();

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$role = $_POST['role'];
$status = $_POST['status'];
$password = $_POST['password'] ?? null;
$confirm = $_POST['confirm_password'] ?? null;

// ✅ NOW VALIDATE
if (!$id) {
    die("User ID missing");
}

if (!$name || !$email || !$phone) {
    $_SESSION['error'] = "All fields are required";
    header("Location: ../edit_user.php?id=$id");
    exit;
}


// Get old image
$stmt = $db->prepare("SELECT image FROM users WHERE id = ?");
$stmt->execute([$id]);
$old = $stmt->fetch();

// ==========================
// HANDLE IMAGE
// ==========================
$imageName = null;

if(!empty($_FILES['image']['name'])) {
    // DELETE OLD IMAGE HERE (correct place)
    if ($old && $old['image'] && file_exists("../../uploads/" . $old['image'])) {
        unlink("../../uploads/" . $old['image']);
    }


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
        header("Location: ../edit_user.php?id=$id");
        exit;
    }

    // Validate size (2MB = 2 * 1024 * 1024)
    if ($fileSize > 2 * 1024 * 1024) {
       $_SESSION['error'] = "Image must not be larger than 2MB.";
        header("Location: ../edit_user.php?id=$id");
        exit;
    }

    // Check for upload errors
    if ($fileError !== 0) {
        $_SESSION['error'] = "Error uploading file.";
        header("Location: ../edit_user.php?id=$id");
        exit;
    }

    // Generate unique file name
    $imageName = time() . '_' . uniqid() . '.' . $fileExt;
    move_uploaded_file($fileTmp, "../../uploads/" . $imageName);
} elseif ($old && $old['image']) {
    $imageName = $old['image']; // keep old image if no new upload
}

// ==========================
// HANDLE PASSWORD
// ==========================
$hashedPassword = null;

if (!empty($password)) {
    if ($password !== $confirm) {
        $_SESSION['error'] = "Passwords do not match";
        header("Location: ../edit_user.php?id=$id");
        exit;
    }

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
}

// ==========================
// UPDATE QUERY
// ==========================
$sql = "UPDATE users SET name=?, email=?, phone=?, role=?, status=?";

$params = [$name, $email, $phone, $role, $status];

// Add image if uploaded
if ($imageName) {
    $sql .= ", image=?";
    $params[] = $imageName;
}

// Add password if set
if ($hashedPassword) {
    $sql .= ", password=?";
    $params[] = $hashedPassword;
}

$sql .= " WHERE id=?";
$params[] = $id;

$stmt = $db->prepare($sql);
$stmt->execute($params);

$_SESSION['success'] = "User updated successfully!";
header("Location: ../users.php");
exit;