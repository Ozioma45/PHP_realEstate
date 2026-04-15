    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include 'includes/header-admin.php'; 
    include 'includes/sidebar.php'; 

    
    ?>

<main class="col-md-9 ms-sm-auto col-lg-10 py-4">

    <!-- Page Title -->
    <h4 class="mb-3 fw-bold">Admin Profile</h4>
    <p>Dashboard / <span class="text-muted">Profile</span></p>

    <div class="row">

        <!-- Profile Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 text-center p-4 d-flex flex-column align-items-center">

                <img src="uploads/<?php echo $admin['image'] ?? 'default.jpg'; ?>" class="rounded-circle mb-3" width="120"  height="120" alt="Profile">

                <h5 class="fw-semibold mb-1"><?= htmlspecialchars($admin['name']) ?></h5>
                <p class="text-muted mb-2"><?= htmlspecialchars($admin['email']) ?></p>

                <span class="badge bg-primary p-2">Administrator</span>

            </div>
        </div>

        <!-- Edit Profile -->
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">

                    <h5 class="fw-semibold mb-4">Edit Profile</h5>

                    <form action="actions/update-profile.php" method="POST" enctype="multipart/form-data">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($admin['name']) ?>">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control" value="<?= htmlspecialchars($admin['email']) ?>">
                        </div>

                        <!-- Phone -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?= htmlspecialchars($admin['phone']) ?>">
                        </div>

                        <!-- Profile Image -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Profile Image</label>
                            <input type="file" name="image" class="form-control" value="<?= htmlspecialchars($admin['image']) ?>">
                        </div>

                        <!-- Password -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">New Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Leave blank to keep current password">
                        </div>

                        <!-- Button -->
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary px-4">
                                Update Profile
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>

</main>

<?php include 'includes/footer.php'; ?>