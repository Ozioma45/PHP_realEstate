  <?php 
    
        include 'includes/header-admin.php'; 
        include 'includes/sidebar.php'; 

        require_once "../config/database.php";
        $db = (new Database())->connect();   

        $page = $_GET['page'] ?? 1;
        $limit = $_GET['limit'] ?? 10;
        $offset = ($page - 1) * $limit;

        // total users
        $total = $db->query("SELECT COUNT(*) FROM users")->fetchColumn();
        $pages = ceil($total / $limit);

        $stmt = $db->prepare("SELECT * FROM users WHERE role = 'builder' LIMIT $limit OFFSET $offset");
        $stmt->execute();
        $users = $stmt->fetchAll();
    ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h4 class="mb-3 fw-bold">
                    Builders
                </h4>
                <p>Dashboard /  <span class="text-muted">Builders</span></p>

                <!--Tables for Builders-->
                <div class="card shadow-sm border-0 mb-4">
                    
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">   
                            <h5 class="fw-semibold mb-0">Builders List</h5>

                           <div class="d-flex align-items-center gap-3 flex-wrap">

                             <div class="position-relative">
                                <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                <input type="text" id="searchInput" class="form-control ps-5" placeholder="Search Builders...">
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

                                     <?php foreach ($users as $index => $user): ?>
                                        <tr>
                                            <td class="fw-semibold"><?php echo $index + 1; ?></td>
                                            <td><?php echo htmlspecialchars($user['name']); ?></td>
                                            <td class="text-muted"><?php echo htmlspecialchars($user['email']); ?></td>
                                            <td class="text-muted">
                                                <?php echo htmlspecialchars($user['phone']); ?>
                                            </td>
                                            <td class="text-muted"><?php echo date('d M Y', strtotime($user['created_at'])); ?></td>

                                            <td class="text-end">
                                                <div class="dropdown action-menu">
                                                    <button class="btn btn-sm action-btn" data-bs-toggle="dropdown">
                                                        <i class="bi bi-three-dots"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 p-2">

                                                        <li>
                                                            <a class="dropdown-item d-flex align-items-center gap-2" href="view_user.php?id=<?php echo $user['id']; ?>">
                                                                <i class="bi bi-person"></i>
                                                                View Profile
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a class="dropdown-item d-flex align-items-center gap-2" href="actions/suspend-user.php?id=<?php echo $user['id']; ?>">
                                                                <i class="bi bi-slash-circle"></i>
                                                                Suspend
                                                            </a>
                                                        </li>

                                                        <li><hr class="dropdown-divider"></li>

                                                        <li>
                                                            <a class="dropdown-item text-danger d-flex align-items-center gap-2" href="actions/delete-user.php?id=<?php echo $user['id']; ?>" >
                                                                <i class="bi bi-trash"></i>
                                                                Delete
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    
                                    <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>

                         <!-- Pagination -->
                        <div class="d-flex justify-content-between align-items-center mt-4">

                            <small class="text-muted">
                                Showing <?php echo ($offset + 1); ?> 
                                to <?php echo min($offset + $limit, $total); ?> 
                                of <?php echo $total; ?> entries</small>

                            <nav>

                                <ul class="pagination pagination-sm mb-0">

                                    <!-- Previous -->
                                    <li class="page-item <?php if ($page <= 1) echo 'disabled'; ?>">
                                        <a class="page-link" href="?page=<?php echo $page - 1; ?>&limit=<?php echo $limit; ?>">Prev</a>
                                    </li>

                                    <!-- Page Numbers -->
                                    <?php for ($i = 1; $i <= $pages; $i++): ?>
                                        <li class="page-item <?php if ($i == $page) echo 'active'; ?>">
                                            <a class="page-link" href="?page=<?php echo $i; ?>&limit=<?php echo $limit; ?>">
                                                <?php echo $i; ?>
                                            </a>
                                        </li>
                                    <?php endfor; ?>

                                    <!-- Next -->
                                    <li class="page-item <?php if ($page >= $pages) echo 'disabled'; ?>">
                                        <a class="page-link" href="?page=<?php echo $page + 1; ?>&limit=<?php echo $limit; ?>">Next</a>
                                    </li>

                                </ul>

                            </nav>
                        </div>

                    </div>
                </div>
            </main>
    </div>

    
<?php include 'includes/footer.php'; ?>
