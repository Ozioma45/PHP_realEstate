<?php
require_once "../config/database.php";
require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

// PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

$db = (new Database())->connect();

$email = $_POST['email'];

// Check if user exists
$stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
$stmt->execute([':email' => $email]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user) { 

// Generate secure token
$token = bin2hex(random_bytes(32));
$expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

// Save token
$stmt = $db->prepare("
    UPDATE users 
    SET reset_token = :token, reset_expires = :expires 
    WHERE email = :email
");

$stmt->execute([
    ':token' => $token,
    ':expires' => $expires,
    ':email' => $email
]);

// Create reset link
$link = "http://localhost/real-estate1/reset-password.php?token=$token";



// Send email
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USER'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('joecre8ive@gmail.com', 'Zuba Properties');
        $mail->addAddress($email);

        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Request';
        $mail->Body = "
            <h3>Password Reset</h3>
            <p>Click the link below to reset your password:</p>
            <a href='$link'>Reset Password</a>
            <p>This link expires in 1 hour.</p>
        ";

        $mail->send();

    } catch (Exception $e) {
        // Optional: log error
    }

}

    // Always show same message
echo "If the email exists, a reset link has been sent.";