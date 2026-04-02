<?php include 'includes/header.php'; ?>

<div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    
    <div class="card shadow p-4" style="width: 100%; max-width: 400px;">
        
        <h3 class="text-center mb-4">Forgot Password</h3>

        <form action="actions/forgot-password.php" method="POST">
            
            <div class="mb-3">
                <label class="form-label">Email address</label>
                <input 
                    type="email" 
                    name="email" 
                    class="form-control" 
                    placeholder="Enter your email" 
                    required
                >
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">
                    Send Reset Link
                </button>
            </div>

        </form>

    </div>

</div>

<?php include 'includes/footer.php'; ?>