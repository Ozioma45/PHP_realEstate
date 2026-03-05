
    <?php include 'includes/adminheader.php'; ?>

    <?php include 'includes/sidebar.php'; ?>

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

                                    <tr>
                                        <td class="fw-semibold">1</td>
                                        <td>John Doe</td>
                                        <td class="text-muted">john.doe@example.com</td>
                                        <td class="text-muted">
                                            08166365570
                                        </td>
                                        <td class="text-muted">29 May 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger fw-bold">DELETE</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="fw-semibold">2</td>
                                        <td>Jane Smith</td>
                                        <td class="text-muted">jane.smith@example.com</td>
                                        <td class="text-muted">
                                            09011921098
                                        </td>
                                        <td class="text-muted">29 Mar 2025</td>
                                        <td >
                                            <button class="btn btn-sm btn-danger fw-bold">DELETE</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="fw-semibold">3</td>
                                        <td>Emily Johnson</td>
                                        <td class="text-muted">emily.johnson@example.com</td>
                                        <td class="text-muted">
                                            08123456789
                                        </td>
                                        <td class="text-muted">29 May 2025</td>
                                        <td>
                                            <button class="btn btn-sm btn-danger fw-bold">DELETE</button>
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
