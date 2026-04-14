
   
    <?php include 'includes/header-admin.php'; ?>

    <?php include 'includes/sidebar.php'; ?>

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

                    <img src="https://i.pravatar.cc/40"
                         class="rounded-circle mb-3"
                         width="120"
                         height="120">

                    <h6 class="fw-semibold">Profile Photo</h6>

                    <p class="text-muted small">
                        Upload a new profile picture
                    </p>

                    <input type="file" class="form-control">

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

                    <form>

                        <!-- Personal Info -->
                        <h6 class="text-muted mb-3">Personal Information</h6>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label class="form-label">First Name</label>
                                <input type="text"
                                       class="form-control"
                                       value="Jane">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Last Name</label>
                                <input type="text"
                                       class="form-control"
                                       value="Smith">
                            </div>

                        </div>


                        <div class="mb-3">
                            <label class="form-label">Email Address</label>
                            <input type="email"
                                   class="form-control"
                                   value="jane.smith@example.com">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text"
                                   class="form-control"
                                   value="09011921098">
                        </div>


                        <!-- Account Settings -->
                        <hr class="my-4">

                        <h6 class="text-muted mb-3">Account Settings</h6>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label class="form-label">Role</label>

                                <select class="form-select">

                                    <option>Admin</option>
                                    <option>Editor</option>
                                    <option>User</option>

                                </select>

                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Status</label>

                                <select class="form-select">

                                    <option>Active</option>
                                    <option>Suspended</option>

                                </select>

                            </div>

                        </div>


                        <!-- Password -->
                        <hr class="my-4">

                        <h6 class="text-muted mb-3">Change Password</h6>

                        <div class="row mb-3">

                            <div class="col-md-6">
                                <label class="form-label">New Password</label>
                                <input type="password"
                                       class="form-control"
                                       placeholder="Enter new password">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Confirm Password</label>
                                <input type="password"
                                       class="form-control"
                                       placeholder="Confirm password">
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

    
<?php include 'includes/footer.php'; ?>
