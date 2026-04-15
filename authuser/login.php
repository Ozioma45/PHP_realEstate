<?php
session_start();

require_once "../config/database.php";
$db = (new Database())->connect();   

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        $error = 'Please enter both email and password.';
    } else {
        // Correct query
        $stmt = $db->prepare("SELECT * FROM admins WHERE email = ?");
        $stmt->execute([$email]);
        $admin = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($admin && password_verify($password, $admin['password'])) {
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['admin_user'] = $admin['email'];
            $_SESSION['admin_id'] = $admin['id'];
            $_SESSION['admin_name'] = $admin['name'];

            header('Location: dashboard.php');
            exit;
        } else {
            $error = 'Invalid email or password.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Login</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:wght@300;400;500&display=swap"
          rel="stylesheet" />

    <link rel="stylesheet" href="../assets/css/adminlogin.css" />
</head>
<body>

<!-- Decorative orbs -->
<div class="orb orb-1"></div>
<div class="orb orb-2"></div>

<div class="login-card">

    <!-- Brand -->
    <div class="brand-mark"><i class="bi bi-shield-lock-fill"></i></div>
    <div class="card-title">Admin Portal</div>
    <div class="card-subtitle">Sign in to access the dashboard</div>

    <hr class="divider" />

    <!-- Alerts -->
    <?php if ($error): ?>
    <div class="alert-danger-custom mb-3" role="alert">
        <i class="bi bi-exclamation-circle-fill"></i>
        <?= htmlspecialchars($error) ?>
    </div>
    <?php endif; ?>

    <?php if ($success): ?>
    <div class="alert-success-custom mb-3" role="alert">
        <i class="bi bi-check-circle-fill"></i>
        <?= htmlspecialchars($success) ?>
    </div>
    <?php endif; ?>

    <!-- Form -->
    <form method="POST" action="" novalidate autocomplete="off">

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <div class="input-wrap">
                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    placeholder="Enter your email"
                    value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                    required
                    autofocus
                />
                <i class="bi bi-person input-icon"></i>
            </div>
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <div class="input-wrap">
                <input
                    type="password"
                    id="password"
                    name="password"
                    class="form-control"
                    placeholder="Enter your password"
                    required
                />
                <i class="bi bi-lock input-icon"></i>
                <button type="button" class="toggle-pw" aria-label="Toggle password visibility"
                        onclick="togglePassword()">
                    <i class="bi bi-eye" id="pwIcon"></i>
                </button>
            </div>
        </div>

        <button type="submit" class="btn-login">
            <i class="bi bi-box-arrow-in-right me-1"></i> Sign In
        </button>

    </form>

    <div class="card-footer-text">
        &copy; <?= date('Y') ?> Admin Panel &mdash; All rights reserved
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function togglePassword() {
        const pw   = document.getElementById('password');
        const icon = document.getElementById('pwIcon');
        const show = pw.type === 'password';
        pw.type    = show ? 'text' : 'password';
        icon.className = show ? 'bi bi-eye-slash' : 'bi bi-eye';
    }
</script>
</body>
</html>