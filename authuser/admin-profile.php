<?php include 'includes/header-admin.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 py-4">

    <!-- Page Title -->
    <h4 class="mb-3 fw-bold">Admin Profile</h4>
    <p>Dashboard / <span class="text-muted">Profile</span></p>

    <div class="row">

        <!-- Profile Card -->
        <div class="col-md-4 mb-4">
            <div class="card shadow-sm border-0 text-center p-4 d-flex flex-column align-items-center">

                <img src="https://i.pravatar.cc/40" class="rounded-circle mb-3" width="120" height="120" alt="Profile">

                <h5 class="fw-semibold mb-1">Admin Name</h5>
                <p class="text-muted mb-2">admin@example.com</p>

                <span class="badge bg-primary p-2">Administrator</span>

            </div>
        </div>

        <!-- Edit Profile -->
        <div class="col-md-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">

                    <h5 class="fw-semibold mb-4">Edit Profile</h5>

                    <form action="" method="POST" enctype="multipart/form-data">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" name="name" class="form-control" value="Admin Name">
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Email</label>
                            <input type="email" name="email" class="form-control" value="admin@example.com">
                        </div>

                        <!-- Username -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Username</label>
                            <input type="text" name="username" class="form-control" value="admin">
                        </div>

                        <!-- Profile Image -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Profile Image</label>
                            <input type="file" name="image" class="form-control">
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