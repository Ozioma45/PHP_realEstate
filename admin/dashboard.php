<?php
   
     include 'includes/adminheader.php'; 

     include 'includes/sidebar.php'; 
     
?>

            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h1 class="mb-4 fw-bold">
                    Welcome back, <span class="text-primary">Admin</span>
                </h1>
                <div class="row g-4 mb-4">

                    <!-- Active Users -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">
                                
                                <div class="icon-circle bg-primary-subtle text-primary">
                                    <i class="bi bi-people-fill"></i>
                                </div>

                                <h3 class="fw-semibold">6</h3>
                                <p class="text-muted fw-light mb-0">Active Users</p>
                            </div>
                        </div>
                    </div>

                    <!-- Agents -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-success-subtle text-success">
                                    <i class="bi bi-person-badge-fill"></i>
                                </div>

                                <h3 class="fw-semibold">4</h3>
                                <p class="text-muted fw-light mb-0">Agents</p>
                            </div>
                        </div>
                    </div>

                    <!-- Builder -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-warning-subtle text-warning">
                                    <i class="bi bi-hammer"></i>
                                </div>

                                <h3 class="fw-semibold">2</h3>
                                <p class="text-muted fw-light mb-0">Builder</p>
                            </div>
                        </div>
                    </div>

                    <!-- Properties -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-info-subtle text-info">
                                    <i class="bi bi-house-door-fill"></i>
                                </div>

                                <h3 class="fw-semibold">3</h3>
                                <p class="text-muted fw-light mb-0">Properties</p>
                            </div>
                        </div>
                    </div>

                    <!-- Apartments -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-danger-subtle text-danger">
                                    <i class="bi bi-building"></i>
                                </div>

                                <h3 class="fw-semibold">6</h3>
                                <p class="text-muted fw-light mb-0">No. of Apartments</p>
                            </div>
                        </div>
                    </div>

                    <!-- Buildings -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-secondary-subtle text-secondary">
                                    <i class="bi bi-buildings-fill"></i>
                                </div>

                                <h3 class="fw-semibold">6</h3>
                                <p class="text-muted fw-light mb-0">No. of Buildings</p>
                            </div>
                        </div>
                    </div>

                    <!-- On Sales -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-success-subtle text-success">
                                    <i class="bi bi-cash-coin"></i>
                                </div>

                                <h3 class="fw-semibold">6</h3>
                                <p class="text-muted fw-light mb-0">On Sales</p>
                            </div>
                        </div>
                    </div>

                    <!-- On Rentals -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-primary-subtle text-primary">
                                    <i class="bi bi-key-fill"></i>
                                </div>

                                <h3 class="fw-semibold">6</h3>
                                <p class="text-muted fw-light mb-0">On Rentals</p>
                            </div>
                        </div>
                    </div>

                </div>


                <!--Tables for users-->
                <div class="card shadow-sm border-0 mb-4">
                    
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-semibold mb-0">Recent Users</h5>
                            <button class="btn btn-sm btn-outline-primary">
                                View All
                            </button>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr class="text-muted small text-uppercase">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Joined</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="fw-semibold">1</td>
                                        <td>John Doe</td>
                                        <td class="text-muted">john.doe@example.com</td>
                                        <td>
                                            <span class="badge rounded-pill bg-primary-subtle text-primary">
                                                <i class="bi bi-shield-lock-fill me-1"></i>
                                                Admin
                                            </span>
                                        </td>
                                        <td class="text-muted">29 May 2025</td>
                                        <td class="text-end">
                                            <i class="bi bi-three-dots-vertical text-muted"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="fw-semibold">2</td>
                                        <td>Jane Smith</td>
                                        <td class="text-muted">jane.smith@example.com</td>
                                        <td>
                                            <span class="badge rounded-pill bg-warning-subtle text-warning">
                                                <i class="bi bi-pencil-square me-1"></i>
                                                Editor
                                            </span>
                                        </td>
                                        <td class="text-muted">29 Mar 2025</td>
                                        <td class="text-end">
                                            <i class="bi bi-three-dots-vertical text-muted"></i>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="fw-semibold">3</td>
                                        <td>Emily Johnson</td>
                                        <td class="text-muted">emily.johnson@example.com</td>
                                        <td>
                                            <span class="badge rounded-pill bg-secondary-subtle text-secondary">
                                                <i class="bi bi-person me-1"></i>
                                                User
                                            </span>
                                        </td>
                                        <td class="text-muted">29 May 2025</td>
                                        <td class="text-end">
                                            <i class="bi bi-three-dots-vertical text-muted"></i>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </main>
    </div>

    

<?php include 'includes/footer.php'; ?>