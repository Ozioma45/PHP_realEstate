<?php
$token = $_GET['token'] ?? null;

if (!$token) {
    die("Invalid request");
}
?>

<?php include 'includes/header.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        
        <h3 class="text-center mb-4">Reset Password</h3>

        <form action="actions/reset-password.php" method="POST">

            <input type="hidden" name="token" value="<?php echo $token; ?>">

            <div class="mb-3">
                <input type="password" name="password" class="form-control" placeholder="New Password" required>
                <input type="password" name="confirm_password" class="form-control mt-2" placeholder="Confirm Password" required>
                
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    Reset Password
                </button>
            </div>

        </form>

    </div>

</div>

<?php include 'includes/footer.php'; ?>