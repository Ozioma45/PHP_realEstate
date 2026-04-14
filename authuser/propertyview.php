
   
    <?php include 'includes/header-admin.php'; ?>

    <?php include 'includes/sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h4 class="mb-3 fw-bold">
                    Property List
                </h4>
                <p>Dashboard /  <span class="text-muted">Property</span></p>

                <!--Tables for users-->
                <div class="card shadow-sm border-0 mb-4">
                    
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">   
                            <h5 class="fw-semibold mb-0">Property List</h5>

                           <div class="d-flex align-items-center gap-3 flex-wrap">

                           
                            <button class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-print"></i> Print Table
                            </button>

                             <div class="position-relative">
                                <i class="bi bi-search position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>
                                <input type="text" id="searchInput" class="form-control ps-5" placeholder="Search properties...">
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
                                        <th>Price</th>
                                        <th>Location</th>
                                        <th>Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <!--Table row 1-->
                                    <tr>
                                        <td class="fw-semibold">1</td>
                                        <td>Universal King’s Lodge</td>
                                        <td class="text-muted">₦8,500,000</td>
                                        <td class="text-muted">Port Harcourt</td>
                                        <td class="text-muted">Apartment</td>

                                        <td class="text-end">
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-end p-2">

                                                    <li>
                                                        <a class="dropdown-item"
                                                        data-bs-toggle="collapse"
                                                        href="#property1">
                                                        View Info
                                                        </a>
                                                    </li>

                                                    <li><hr class="dropdown-divider"></li>

                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">
                                                            Delete
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Expandable Details -->
                                    <tr class="collapse" id="property1">
                                        <td colspan="6">

                                            <div class="card shadow-sm border-0">
                                                <div class="card-body">

                                                    <div class="row align-items-center">

                                                        <!-- Property Image -->
                                                        <div class="col-md-3">
                                                            <img src="../assets/img/prop1.jpg" class="img-fluid rounded">
                                                        </div>

                                                        <!-- Property Details -->
                                                        <div class="col-md-7">

                                                            <h6 class="fw-bold">Universal King’s Lodge</h6>

                                                            <div class="row mt-3">

                                                                <div class="col-md-4">
                                                                    🛏 Beds  
                                                                    <br><strong>3</strong>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    🛁 Bathrooms  
                                                                    <br><strong>2</strong>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    📐 Sqft  
                                                                    <br><strong>1200</strong>
                                                                </div>

                                                            </div>

                                                            <div class="mt-3">
                                                                👤 Agent: <strong>John Doe</strong>
                                                            </div>

                                                        </div>

                                                        <!-- Close Button -->
                                                        <div class="col-md-2 text-end">

                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#property1">

                                                                Close

                                                            </button>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </td>
                                    </tr>

                                    <!--Table row 1-->
                                    <tr>
                                        <td class="fw-semibold">1</td>
                                        <td>Universal King’s Lodge</td>
                                        <td class="text-muted">₦8,500,000</td>
                                        <td class="text-muted">Port Harcourt</td>
                                        <td class="text-muted">Apartment</td>

                                        <td class="text-end">
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-end p-2">

                                                    <li>
                                                        <a class="dropdown-item"
                                                        data-bs-toggle="collapse"
                                                        href="#property2">
                                                        View Info
                                                        </a>
                                                    </li>

                                                    <li><hr class="dropdown-divider"></li>

                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">
                                                            Delete
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Expandable Details -->
                                    <tr class="collapse" id="property2">
                                        <td colspan="6">

                                            <div class="card shadow-sm border-0">
                                                <div class="card-body">

                                                    <div class="row align-items-center">

                                                        <!-- Property Image -->
                                                        <div class="col-md-3">
                                                            <img src="../assets/img/prop1.jpg" class="img-fluid rounded">
                                                        </div>

                                                        <!-- Property Details -->
                                                        <div class="col-md-7">

                                                            <h6 class="fw-bold">Universal King’s Lodge</h6>

                                                            <div class="row mt-3">

                                                                <div class="col-md-4">
                                                                    🛏 Beds  
                                                                    <br><strong>3</strong>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    🛁 Bathrooms  
                                                                    <br><strong>2</strong>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    📐 Sqft  
                                                                    <br><strong>1200</strong>
                                                                </div>

                                                            </div>

                                                            <div class="mt-3">
                                                                👤 Agent: <strong>John Doe</strong>
                                                            </div>

                                                        </div>

                                                        <!-- Close Button -->
                                                        <div class="col-md-2 text-end">

                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#property1">

                                                                Close

                                                            </button>

                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </td>
                                    </tr>


                                    <!--Table row 1-->
                                    <tr>
                                        <td class="fw-semibold">1</td>
                                        <td>Universal King’s Lodge</td>
                                        <td class="text-muted">₦8,500,000</td>
                                        <td class="text-muted">Port Harcourt</td>
                                        <td class="text-muted">Apartment</td>

                                        <td class="text-end">
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-light" data-bs-toggle="dropdown">
                                                    <i class="bi bi-three-dots"></i>
                                                </button>

                                                <ul class="dropdown-menu dropdown-menu-end p-2">

                                                    <li>
                                                        <a class="dropdown-item"
                                                        data-bs-toggle="collapse"
                                                        href="#property3">
                                                        View Info
                                                        </a>
                                                    </li>

                                                    <li><hr class="dropdown-divider"></li>

                                                    <li>
                                                        <a class="dropdown-item text-danger" href="#">
                                                            Delete
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </td>
                                    </tr>


                                    <!-- Expandable Details -->
                                    <tr class="collapse" id="property3">
                                        <td colspan="6">

                                            <div class="card shadow-sm border-0">
                                                <div class="card-body">

                                                    <div class="row align-items-center">

                                                        <!-- Property Image -->
                                                        <div class="col-md-3">
                                                            <img src="../assets/img/prop1.jpg" class="img-fluid rounded">
                                                        </div>

                                                        <!-- Property Details -->
                                                        <div class="col-md-7">

                                                            <h6 class="fw-bold">Universal King’s Lodge</h6>

                                                            <div class="row mt-3">

                                                                <div class="col-md-4">
                                                                    🛏 Beds  
                                                                    <br><strong>3</strong>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    🛁 Bathrooms  
                                                                    <br><strong>2</strong>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    📐 Sqft  
                                                                    <br><strong>1200</strong>
                                                                </div>

                                                            </div>

                                                            <div class="mt-3">
                                                                👤 Agent: <strong>John Doe</strong>
                                                            </div>

                                                        </div>

                                                        <!-- Close Button -->
                                                        <div class="col-md-2 text-end">

                                                            <button class="btn btn-sm btn-outline-secondary"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#property3">

                                                                Close

                                                            </button>

                                                        </div>

                                                    </div>

                                                </div>
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
