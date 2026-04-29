    <?php
        include 'includes/header-admin.php'; 

        include 'includes/sidebar.php';

        $id = $_GET['id'];

        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch();

        // Count properties added by this user
        $stmt = $db->prepare("SELECT COUNT(*) FROM properties WHERE user_id = ?");
        $stmt->execute([$id]);
        $totalProperties = $stmt->fetchColumn();
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

                                    <img src="../uploads/<?php echo $user['image'] ?? 'default.jpg'; ?>" alt="Profile Image"
                                        class="rounded-circle mb-3"
                                        width="120"
                                        height="120">

                                    <h5 class="fw-semibold mb-1"><?= htmlspecialchars($user['name']) ?></h5>

                                    <p class="text-muted mb-2"><?= htmlspecialchars($user['email']) ?></p>

                                    <span class="badge bg-success-subtle text-success mb-3">
                                        Active
                                    </span>

                                    <div class="d-grid">
                                        <button class="btn btn-primary">
                                            <a href="edit_user.php?id=<?= $user['id'] ?>" class="text-white text-decoration-none">Edit Profile</a>
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
                                            <?= htmlspecialchars($user['name']) ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted">
                                            Email
                                        </div>
                                        <div class="col-sm-8">
                                            <?= htmlspecialchars($user['email']) ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted">
                                            Phone
                                        </div>
                                        <div class="col-sm-8">
                                            <?= htmlspecialchars($user['phone']) ?>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted">
                                            Role
                                        </div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-primary-subtle text-primary">
                                                <?= htmlspecialchars($user['role']) ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 text-muted">
                                            Status
                                        </div>
                                        <div class="col-sm-8">
                                            <span class="badge bg-success-subtle text-success">
                                                <?= htmlspecialchars($user['status']) ?>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4 text-muted">
                                            Joined Date
                                        </div>
                                        <div class="col-sm-8">
                                            <?= date('d M Y', strtotime($user['created_at'])) ?>
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
                                            <span class="text-muted">
                                                <?php 
                                                    echo isset($user['last_login']) && $user['last_login'] 
                                                    ? date('d M Y, h:i A', strtotime($user['last_login'])) 
                                                    : 'Not available';
                                                ?>
                                            </span>
                                        </li>

                                        <li class="list-group-item d-flex justify-content-between">
                                            Properties Added
                                            <span class="text-muted">
                                                <?php echo $totalProperties; ?>
                                            </span>
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
