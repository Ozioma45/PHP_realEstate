<?php 
    
        include 'includes/adminheader.php'; 
        include 'includes/sidebar.php'; 

        require_once "../config/database.php";
        $db = (new Database())->connect();   

        $page = $_GET['page'] ?? 1;
        $limit = $_GET['limit'] ?? 10;
        $offset = ($page - 1) * $limit;

        // total users
        $total = $db->query("SELECT COUNT(*) FROM admins")->fetchColumn();
        $pages = ceil($total / $limit);

        $stmt = $db->prepare("SELECT * FROM admins LIMIT $limit OFFSET $offset");
        $stmt->execute();
        $admins = $stmt->fetchAll();
    ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h4 class="mb-3 fw-bold">
                    Admin
                </h4>
                <p>Dashboard /  <span class="text-muted">Admins</span></p>

                <!--Tables for users-->
                <div class="card shadow-sm border-0 mb-4">
                    
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">   
                            <h5 class="fw-semibold mb-0">Admin List</h5>

                           <div class="d-flex align-items-center gap-3 flex-wrap">

                           <!-- ADD ADMIN BUTTON -->
                            <a href="add-admin.php" class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-circle me-1"></i> Add Admin
                            </a>

                             <div class="position-relative">
                                <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                <input type="text" id="searchInput" class="form-control ps-5" placeholder="Search users...">
                            </div>

                            <!--entries-->
                            <div class="d-flex align-items-center gap-2">
                                <label for="entriesSelect" class="mb-0 text-muted">Show</label>
                                <select id="entriesSelect" class="form-select form-select-sm w-auto">
                                    <option value="5">5</option>
                                    <option value="10" selected>10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                </select>
                            </div>

                           </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead class="table-light">
                                    <tr class="text-muted small text-uppercase">
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Joined</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($admins as $index => $admin): ?>

                                        <tr>
                                            <td class="fw-semibold"><?php echo $index + 1; ?></td>
                                            <td><?php echo htmlspecialchars($admin['name']); ?></td>
                                            <td class="text-muted"><?php echo htmlspecialchars($admin['email']); ?></td>
                                            <td class="text-muted">
                                                <?php echo htmlspecialchars($admin['phone']); ?>
                                            </td>
                                            <td class="text-muted"><?php echo htmlspecialchars($admin['created_at']); ?></td>
                                            <td>
                                                <button class="btn btn-sm btn-danger fw-bold">DELETE</button>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>

                         <!-- Pagination -->
                        <div class="d-flex justify-content-between align-items-center mt-4">
                            <small class="text-muted">Showing 1 to 3 of 3 entries</small>
                            <nav>
                                <ul class="pagination pagination-sm mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </main>
    </div>

    
<?php include 'includes/footer.php'; ?>