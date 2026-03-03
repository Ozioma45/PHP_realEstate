 <!-- Top Navbar -->
<header class="navbar navbar-expand bg-white shadow-sm px-4 py-3">

    <!-- Left Side -->
    <div class="d-flex align-items-center gap-3">
        <button class="btn btn-light d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
            <i class="bi bi-list"></i>
        </button>
         <img src="../assets/img/logo.png" alt="" width="40" height="30" class="d-inline-block align-text-top">
        <h5 class="mb-0 fw-semibold">Admin Dashboard</h5>
    </div>

    <!-- Right Side -->
    <div class="ms-auto d-flex align-items-center gap-3">

        <!-- User Profile -->
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-dark text-decoration-none"
               data-bs-toggle="dropdown">

                <img src="https://i.pravatar.cc/40"
                     class="rounded-circle me-2"
                     width="35"
                     height="35">

                <span class="fw-medium d-none d-md-inline">Admin</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="#">
                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a></li>
            </ul>
        </div>

    </div>

</header>