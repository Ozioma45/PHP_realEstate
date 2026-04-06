<?php
session_start();

require_once "../config/database.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$db = (new Database())->connect();

// =====================
// GET FORM DATA
// =====================
$title = trim($_POST['title']);
$price = $_POST['price'];
$location = trim($_POST['location']);
$type = $_POST['type'];
$bedrooms = $_POST['bedrooms'] ?: null;
$bathrooms = $_POST['bathrooms'] ?: null;
$size = $_POST['size'] ?: null;
$status = $_POST['status'];
$description = trim($_POST['description']);
$user_id = $_SESSION['user_id'];

// =====================
// VALIDATION
// =====================
if (!$title || !$price || !$location) {
    $_SESSION['error'] = "Please fill required fields";
    header("Location: ../submitproperties.php");
    exit;
}

// =====================
// HANDLE MAIN IMAGE
// =====================
$mainImageName = null;

if (isset($_FILES['main_image']) && $_FILES['main_image']['error'] === 0) {

    $tmp = $_FILES['main_image']['tmp_name'];
    $ext = strtolower(pathinfo($_FILES['main_image']['name'], PATHINFO_EXTENSION));

    $allowed = ['jpg', 'jpeg', 'png'];

    if (!in_array($ext, $allowed)) {
        $_SESSION['error'] = "Invalid main image type";
        header("Location: ../submitproperties.php");
        exit;
    }

    $mainImageName = time() . "_main." . $ext;
    move_uploaded_file($tmp, "../uploads/" . $mainImageName);
}

// =====================
// INSERT PROPERTY
// =====================
$stmt = $db->prepare("
    INSERT INTO properties 
    (title, price, location, type, bedrooms, bathrooms, size, status, main_image, description, user_id)
    VALUES 
    (:title, :price, :location, :type, :bedrooms, :bathrooms, :size, :status, :main_image, :description, :user_id)
");

$stmt->execute([
    ':title' => $title,
    ':price' => $price,
    ':location' => $location,
    ':type' => $type,
    ':bedrooms' => $bedrooms,
    ':bathrooms' => $bathrooms,
    ':size' => $size,
    ':status' => $status,
    ':main_image' => $mainImageName,
    ':description' => $description,
    ':user_id' => $user_id
]);

$property_id = $db->lastInsertId();

// =====================
// HANDLE GALLERY IMAGES
// =====================
if (!empty($_FILES['gallery']['name'][0])) {

    foreach ($_FILES['gallery']['tmp_name'] as $key => $tmpName) {

        if ($_FILES['gallery']['error'][$key] === 0) {

            $ext = strtolower(pathinfo($_FILES['gallery']['name'][$key], PATHINFO_EXTENSION));

            if (!in_array($ext, ['jpg','jpeg','png'])) {
                continue; // skip invalid
            }

            $imageName = time() . "_gallery_" . $key . "." . $ext;

            move_uploaded_file($tmpName, "../uploads/" . $imageName);

            // Insert into gallery table
            $stmt = $db->prepare("
                INSERT INTO property_images (property_id, image)
                VALUES (:property_id, :image)
            ");

            $stmt->execute([
                ':property_id' => $property_id,
                ':image' => $imageName
            ]);
        }
    }
}

// =====================
// SUCCESS
// =====================
$_SESSION['success'] = "Property added successfully!";
header("Location: ../submitproperties.php");
exit;