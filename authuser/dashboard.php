<?php
   
     include 'includes/header-admin.php'; 

     include 'includes/sidebar.php'; 

    require_once "../config/database.php";

    $db = (new Database())->connect();

    // TOTAL USERS
    $totalUsers = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();

    // AGENTS
    $totalAgents = $db->query("SELECT COUNT(*) FROM users WHERE role = 'agent'")->fetchColumn();

    // BUILDERS
    $totalBuilders = $db->query("SELECT COUNT(*) FROM users WHERE role = 'builder'")->fetchColumn();

    // PROPERTIES
    $totalProperties = $db->query("SELECT COUNT(*) FROM properties")->fetchColumn();

    // FOR SALE
    $totalSales = $db->query("SELECT COUNT(*) FROM properties WHERE status = 'For Sale'")->fetchColumn();

    // FOR RENT
    $totalRentals = $db->query("SELECT COUNT(*) FROM properties WHERE status = 'For Rent'")->fetchColumn();
    
    $stmt = $db->prepare("SELECT * FROM users ORDER BY created_at DESC LIMIT 5");
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h1 class="mb-4 fw-bold">
                    Welcome back, <span class="text-primary">Admin</span>
                </h1>
                <div class="row g-4 mb-4">

                    <!-- Active Users -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">
                                
                                <div class="icon-circle bg-primary-subtle text-primary">
                                    <i class="bi bi-people-fill"></i>
                                </div>

                                <h3 class="fw-semibold"><?php echo $totalUsers; ?></h3>
                                <p class="text-muted fw-light mb-0">Active Users</p>
                            </div>
                        </div>
                    </div>

                    <!-- Agents -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-success-subtle text-success">
                                    <i class="bi bi-person-badge-fill"></i>
                                </div>

                                <h3 class="fw-semibold"><?php echo $totalAgents; ?></h3>
                                <p class="text-muted fw-light mb-0">Agents</p>
                            </div>
                        </div>
                    </div>

                    <!-- Builder -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-warning-subtle text-warning">
                                    <i class="bi bi-hammer"></i>
                                </div>

                                <h3 class="fw-semibold"><?php echo $totalBuilders; ?></h3>
                                <p class="text-muted fw-light mb-0">Builder</p>
                            </div>
                        </div>
                    </div>

                    <!-- Properties -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-info-subtle text-info">
                                    <i class="bi bi-house-door-fill"></i>
                                </div>

                                <h3 class="fw-semibold"><?php echo $totalProperties; ?></h3>
                                <p class="text-muted fw-light mb-0">Properties</p>
                            </div>
                        </div>
                    </div>

                    <!-- On Sales -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-success-subtle text-success">
                                    <i class="bi bi-cash-coin"></i>
                                </div>

                                <h3 class="fw-semibold"><?php echo $totalSales; ?></h3>
                                <p class="text-muted fw-light mb-0">On Sales</p>
                            </div>
                        </div>
                    </div>

                    <!-- On Rentals -->
                    <div class="col-sm-6 col-lg-4">
                        <div class="card shadow-sm h-100 border-0">
                            <div class="card-body position-relative">

                                <div class="icon-circle bg-primary-subtle text-primary">
                                    <i class="bi bi-key-fill"></i>
                                </div>

                                <h3 class="fw-semibold"><?php echo $totalRentals; ?></h3>
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
                            <!-- <button class="btn btn-sm btn-outline-primary">
                                View All
                            </button> -->
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

                                    <?php foreach($users as $index => $user): ?>

                                        <tr>
                                            <td class="fw-semibold"><?php echo $index + 1; ?></td>
                                            <td><?php echo htmlspecialchars($user['name']); ?></td>
                                            <td class="text-muted"><?php echo htmlspecialchars($user['email']); ?></td>

                                            <td>
                                                <?php if ($user['role'] === 'agent'): ?>
                                                    <span class="badge rounded-pill bg-primary-subtle text-primary">
                                                        <i class="bi bi-shield-lock-fill me-1"></i>
                                                        Agent
                                                    </span>

                                                <?php elseif ($user['role'] === 'builder'): ?>
                                                    <span class="badge rounded-pill bg-warning-subtle text-warning">
                                                        <i class="bi bi-pencil-square me-1"></i>
                                                        Builder
                                                    </span>

                                                <?php else: ?>
                                                    <span class="badge rounded-pill bg-secondary-subtle text-secondary">
                                                        <i class="bi bi-person me-1"></i>
                                                        User
                                                    </span>
                                                <?php endif; ?>
                                            </td>

                                            <td class="text-muted"><?php echo date("d M Y", strtotime($user['created_at'])); ?></td>
                                            
                                        </tr>

                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </main>
    </div>

    </div>

<?php include 'includes/footer.php'; ?>