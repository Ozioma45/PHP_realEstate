<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login / Register</title>

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="assets/css/lstyle.css">
</head>
<body>
    
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="actions/register.php" method="POST" enctype="multipart/form-data">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="name" placeholder="Name" />
                <input type="email" name="email" placeholder="Email" />
                <input type="password" name="password" placeholder="Password" />
                <input type="text" name="phone" placeholder="Phone Number" />
                <input type="file" name="image" placeholder="Profile Image" />
                <button type="submit" name="register">Sign Up</button>


                <div class="switch">
                    <p class="mobile-switch">
                        Already have an account?
                        <button id="mobileSignIn" type="button">Sign In</button>
                    </p>
                </div>
                
            </form>
        </div>

        <div class="form-container sign-in">
            <form action="actions/login.php" method="POST">
                <h1>Sign in</h1>
                <div class="social-icons">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="email" name="email" placeholder="Email" required />
                <input type="password" name="password" placeholder="Password" required />
                <a href="forgot-password.php">Forgot your password?</a>
                <button type="submit" name="login">Sign In</button>


                <div class="switch">
                    <p class="mobile-switch">
                        Don’t have an account?
                        <button id="mobileSignUp">Sign Up</button>
                    </p>
                </div>

            </form>
        </div>

        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>

                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if (isset($_SESSION['success']) || isset($_SESSION['error'])): ?>
        <script>
            Swal.fire({
                icon: '<?php echo isset($_SESSION['success']) ? "success" : "error"; ?>',
                title: '<?php echo isset($_SESSION['success']) ? "Success" : "Error"; ?>',
                text: <?php echo json_encode($_SESSION['success'] ?? $_SESSION['error']); ?>
            });
        </script>
        <?php unset($_SESSION['success'], $_SESSION['error']); ?>
        <?php endif; ?>
    <script src="assets/js/lscript.js"></script>
</body>
</html>