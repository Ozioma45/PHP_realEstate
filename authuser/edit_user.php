
   
    <?php 
        error_reporting(E_ALL);
        ini_set('display_errors', 1);


        include 'includes/header-admin.php'; 
        include 'includes/sidebar.php'; 

        require_once "../config/database.php";
        $db = (new Database())->connect();

        

        $id = $_GET['id'] ?? null;

        if (!$id) {
            die("User ID not found");
        }

        $stmt = $db->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        $user = $stmt->fetch();

        if (!$user) {
            die("User not found");
        }

    ?>


            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h4 class="mb-3 fw-bold">
                    Users
                </h4>
                <p>Dashboard /  <span class="text-muted">Users</span></p>

                <div class="container py-4">

    <div class="row">

        <!-- Profile Image -->
        <div class="col-lg-4 mb-4">

            <div class="card shadow-sm border-0 text-center">

                <div class="card-body">

                    <img src="../uploads/<?php echo $user['image'] ?? 'default.jpg'; ?>"
                         class="rounded-circle mb-3"
                         width="120"
                         height="120">

                    <h6 class="fw-semibold mb-1"><?= htmlspecialchars($user['name']) ?></h6>

                    <p class="text-muted mb-2"><?= htmlspecialchars($user['email']) ?></p>

                <span class="badge bg-primary p-2"><?= htmlspecialchars($user['role']) ?></span>

                </div>

            </div>

        </div>


        <!-- Edit Form -->
        <div class="col-lg-8">

            <div class="card shadow-sm border-0">

                <div class="card-header bg-white border-0">
                    <h5 class="mb-0 fw-semibold">
                        Edit Profile
                    </h5>
                </div>

                <div class="card-body">

                    <form action="actions/update-user.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">

                        <!-- Personal Info -->
                        <h6 class="text-muted mb-3">Personal Information</h6>

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Full Name</label>
                            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($user['name']) ?>">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   value="<?= htmlspecialchars($user['email']) ?>">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text"
                                   class="form-control"
                                   name="phone"
                                   value="<?= htmlspecialchars($user['phone']) ?>">
                        </div>


                        <!-- Account Settings -->
                        <hr class="my-4">

                        <h6 class="text-muted mb-3">Account Settings</h6>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label class="form-label">Role</label>

                                    <select name="role" class="form-select">
                                        <option value="user" <?= $user['role'] == 'user' ? 'selected' : '' ?>>User</option>
                                        <option value="agent" <?= $user['role'] == 'agent' ? 'selected' : '' ?>>Agent</option>
                                    </select>

                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>

                                    <select name="status" class="form-select">
                                        <option value="active" <?= $user['status'] == 'active' ? 'selected' : '' ?>>Active</option>
                                        <option value="suspended" <?= $user['status'] == 'suspended' ? 'selected' : '' ?>>Suspended</option>
                                    </select>

                            </div>

                        </div>

                        <div class="mb-3">
                                <label class="form-label">Profile Image</label>
                                <input type="file" name="image" class="form-control">
                        </div>


                        <!-- Password -->
                        <hr class="my-4">

                        <h6 class="text-muted mb-3">Change Password</h6>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label class="form-label">New Password</label>
                                <input type="password" name="password" class="form-control" placeholder="New password">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" placeholder="Confirm password"> 
                            </div>

                        </div>


                        <!-- Buttons -->
                        <div class="d-flex justify-content-end gap-2 mt-4">

                            <button type="button"
                                    class="btn btn-light">
                                Cancel
                            </button>

                            <button type="submit"
                                    class="btn btn-primary">
                                Save Changes
                            </button>

                        </div>


                    </form>

                </div>

            </div>

        </div>

    </div>

</div>  
                
</main>
    
</div>

</div>

    
<?php include 'includes/footer.php'; ?>
