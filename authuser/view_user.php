    <?php
        include 'includes/header-admin.php'; 

        include 'includes/sidebar.php';

        $id = $_GET['id'];

        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch();

    ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h4 class="mb-3 fw-bold">
                    Users
                </h4>
                <p>Dashboard /  <span class="text-muted">Users</span></p>

                <!--Tables for users-->
                <div class="container py-4">

                    <div class="row">

                        <!-- Profile Card -->
                        <div class="col-lg-4 mb-4">
                            <div class="card shadow-sm border-0 text-center">

                                <div class="card-body">

                                    <img src="https://i.pravatar.cc/40"
                                        class="rounded-circle mb-3"
                                        width="120"
                                        height="120">

                                    <h5 class="fw-semibold mb-1">Jane Smith</h5>

                                    <p class="text-muted mb-2">jane.smith@example.com</p>

                                    <span class="badge bg-success-subtle text-success mb-3">
                                        Active
                                    </span>

                                    <div class="d-grid">
                                        <button class="btn btn-primary">
                                            <a href="edit_user.php" class="text-white text-decoration-none">Edit Profile</a>
                                        </button>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!-- Profile Details -->
                        <div class="col-lg-8">

                            <div class="card shadow-sm border-0 mb-4">

                                <div class="card-header bg-white border-0">
                                    <h6 class="mb-0 fw-semibold">User Information</h6>
                                </div>

                                <div class="card-body">

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted">
                                            Full Name
                                        </div>
                                        <div class="col-sm-8">
                                            Jane Smith
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted">
                                            Email
                                        </div>
                                        <div class="col-sm-8">
                                            jane.smith@example.com
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted">
                                            Phone
                                        </div>
                                        <div class="col-sm-8">
                                            09011921098
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted">
                                            Role
                                        </div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-primary-subtle text-primary">
                                                Admin
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted">
                                            Status
                                        </div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-success-subtle text-success">
                                                Active
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 text-muted">
                                            Joined Date
                                        </div>
                                        <div class="col-sm-8">
                                            29 Mar 2025
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <!-- Account Activity -->
                            <div class="card shadow-sm border-0">

                                <div class="card-header bg-white border-0">
                                    <h6 class="mb-0 fw-semibold">Account Activity</h6>
                                </div>

                                <div class="card-body">

                                    <ul class="list-group list-group-flush">

                                        <li class="list-group-item d-flex justify-content-between">
                                            Last Login
                                            <span class="text-muted">Today, 09:40 AM</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between">
                                            Properties Added
                                            <span class="text-muted">12</span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between">
                                            Account Created
                                            <span class="text-muted">29 Mar 2025</span>
                                        </li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>

    
<?php include 'includes/footer.php'; ?>
