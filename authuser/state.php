
   
    <?php include 'includes/adminheader.php'; ?>

    <?php include 'includes/sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h4 class="mb-3 fw-bold">
                    States
                </h4>
                <p>Dashboard /  <span class="text-muted">States</span></p>

                <!--Add state-->
                <div class="card shadow-sm border-0 mb-4 py-4">
                    <div class="card-body">
                        <h5 class="fw-semibold mb-4">Add New State</h5>

                        <hr>

                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="stateName" class="form-label">State Details</label>
                                <input type="text" class="form-control" id="stateName" placeholder="Enter state name">
                            </div>
                            <div class="col-6 d-flex align-items-end">
                                <button type="submit" class="btn btn-primary">Add State</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!--Tables for cities-->
                <div class="card shadow-sm border-0 mb-4">
                    
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">   
                            <h5 class="fw-semibold mb-0">Cities List</h5>

                           <div class="d-flex align-items-center gap-3 flex-wrap">

                             <div class="position-relative">
                                <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                <input type="text" id="searchInput" class="form-control ps-5" placeholder="Search cities...">
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
                                        <th>State</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td class="fw-semibold">1</td>
                                        <td class="text-muted">Delta</td>
                                        <td class="text-start">
                                            <div class="dropdown action-menu">
                                                <button class="btn btn-sm action-btn" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 p-2">

                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2" href="view_user.php">
                                                            <i class="bi bi-person"></i>
                                                            Edit City
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

                                    <tr>
                                        <td class="fw-semibold">2</td>
                                        <td class="text-muted">Anambra State</td>
                                        <td class="text-start">
                                            <div class="dropdown action-menu">
                                                <button class="btn btn-sm action-btn" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 p-2">

                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2" href="view_user.php">
                                                            <i class="bi bi-person"></i>
                                                            Edit City
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

                                    <tr>
                                        <td class="fw-semibold">3</td>
                                        <td class="text-muted">Taraba State</td>
                                        <td class="text-start">
                                            <div class="dropdown action-menu">
                                                <button class="btn btn-sm action-btn" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0 p-2">

                                                    <li>
                                                        <a class="dropdown-item d-flex align-items-center gap-2" href="view_user.php">
                                                            <i class="bi bi-person"></i>
                                                            Edit City
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
