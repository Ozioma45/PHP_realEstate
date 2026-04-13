<?php include 'includes/adminheader.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 py-4">

    <h4 class="fw-bold mb-2">Add Admin</h4>
    <p class="text-muted mb-4">Dashboard / Admin / Add Admin</p>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <h5 class="fw-semibold mb-4">Admin Details</h5>

            <form action="actions/add-admin.php" method="POST" enctype="multipart/form-data" class="row g-4">

                <!-- Name -->
                <div class="col-md-6">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="name" required placeholder="Enter full name">
                </div>

                <!-- Email -->
                <div class="col-md-6">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" required placeholder="Enter email address">
                </div>

                <!-- Contact -->
                <div class="col-md-6">
                    <label class="form-label">Contact</label>
                    <input type="text" class="form-control" name="phone" required placeholder="Enter contact number">
                </div>

                <!-- Password -->
                <div class="col-md-6">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" required placeholder="Enter password">
                </div>

                <!-- Profile Image -->
                <div class="col-md-6">
                    <label class="form-label">Profile Image</label>
                    <input type="file" class="form-control" name="image">
                </div>

                <!-- Submit -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-4">
                        <i class="bi bi-person-plus me-2"></i>
                        Add Admin
                    </button>
                </div>

            </form>

        </div>
    </div>

</main>

<?php include 'includes/footer.php'; ?>