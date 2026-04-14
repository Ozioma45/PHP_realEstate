
   
    <?php include 'includes/header-admin.php'; ?>

    <?php include 'includes/sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h4 class="mb-3 fw-bold">
                    Feedback List
                </h4>
                <p>Dashboard /  <span class="text-muted">Feedback</span></p>

                <!--Tables for feedback-->
                <div class="card shadow-sm border-0 mb-4">
                    
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">   
                            <h5 class="fw-semibold mb-0">Feedback List</h5>

                           <div class="d-flex align-items-center gap-3 flex-wrap">

                             <div class="position-relative">
                                <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                <input type="text" id="searchInput" class="form-control ps-5" placeholder="Search Feedback...">
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
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="fw-semibold">1</td>
                                        <td>About Us</td>
                                        <td class="text-muted">Zuba Properties is a trusted real estate company dedicated to helping you find the right property with ease. From homes and lands to investment opportunities, we provide transparent, reliable, and client-focused services every step of the way.

Our mission is to simplify real estate and help you make smart property decisions with confidence.</td>
                                        <td class="text-muted">
                                           <img src="../assets/img/condos.png" alt="About Us Image" width="100" height="60">
                                        </td>
                                        <td class="text-end">
                                            <div class="dropdown action-menu">
                                                <button class="btn btn-sm action-btn" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 p-2">

                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2" href="view_user.php">
                                                            <i class="bi bi-person"></i>
                                                            Edit
                                                        </a>
                                                    </li>

                                                    <li><hr class="dropdown-divider"></li>

                                                    <li>
                                                        <a class="dropdown-item text-danger d-flex align-items-center gap-2" href="#">
                                                            <i class="bi bi-trash"></i>
                                                            Delete
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
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
