<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Admin Dashboard</title>



    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .sidebar {
            color: #fff;
            min-height: 100vh;
            padding:1.5rem;
        }
        .sidebar h3{
            color: #fff;
            margin-bottom: 2rem;
        }
        .sidebar a{
            color: #adb5bd;
            display: flex;
            text-decoration: none;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1rem;
            border-radius: 0.25rem;
            margin-bottom: 0.5rem;
            transition: background 0.2s;
        }
        .sidebar a:hover, .sidebar a.active{
            background-color: #495057;
            color: #fff;
        }

        .card{
            transition: transform 0.2s;
        }

        .card:hover{
            transform: translateY(-5px);
        }

        .offcanvas-start{
            width: 250px;
        }

        .icon-circle {
            position: absolute;
            top: 20px;
            right: 20px;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
        }
    </style>
</head>
<body>
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
    <div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarMenuLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-4 bg-dark">
            <div class="sidebar">
                <h3 class="d-none">Dashboard</h3>
                <a href="#" class="active">
                    <i class="bi bi-house-fill"></i>
                    Home
                </a>
                <a href="#">
                    <i class="bi bi-graph-up"></i>
                    Analytics
                </a>
                <a href="#">
                    <i class="bi bi-folder2-open"></i>
                    Projects
                </a>
                <a href="#">
                    <i class="bi bi-gear-fill"></i>
                    Settings
                </a>
                <a href="#">
                    <i class="bi bi-box-arrow-right"></i>
                    Logout
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="d-none d-md-block col-md-3 col-lg-2 bg-dark sidebar">
                    <div>
                        <!-- <h5 class="text-white mb-4">Admin Dashboard</h5> -->

                        <!-- Home -->
                        <a href="#" class="active">
                            <i class="bi bi-house-fill"></i>
                            Home
                        </a>

                        <!-- Users Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#usersMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-people-fill"></i>
                                Users
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="usersMenu">
                            <a href="#" class="submenu-item">
                                Admins
                            </a>
                            <a href="#" class="submenu-item">
                                Users
                            </a>
                            <a href="#" class="submenu-item">
                                Agents
                            </a>
                            <a href="#" class="submenu-item">
                                Builders
                            </a>
                        </div>

                        <!-- City and State Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#settingsMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-gear-fill"></i>
                                City & State
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="settingsMenu">
                            <a href="#" class="submenu-item">
                                City
                            </a>
                            <a href="#" class="submenu-item">
                                State
                            </a>
                        </div>

                        <!-- Properties Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#propertiesMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-house-door-fill"></i>
                                Properties
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="propertiesMenu">
                            <a href="#" class="submenu-item">
                                Add Property
                            </a>
                            <a href="#" class="submenu-item">
                                View Properties
                            </a>
                        </div>

                        <!-- Contact and feedback Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#contactMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-chat-dots-fill"></i>
                                Contacts & Feedback
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="propertiesMenu">
                            <a href="#" class="submenu-item">
                                Contact
                            </a>
                            <a href="#" class="submenu-item">
                                Feedback
                            </a>
                        </div>

                        <!-- About page Dropdown -->
                        <a class="d-flex justify-content-between align-items-center"
                        data-bs-toggle="collapse"
                        href="#aboutMenu"
                        role="button"
                        aria-expanded="false">

                            <span>
                                <i class="bi bi-info-circle-fill"></i>
                                About
                            </span>

                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="aboutMenu">
                            <a href="#" class="submenu-item">
                                Add About
                            </a>
                            <a href="#" class="submenu-item">
                                View About
                            </a>
                        </div>

                        <!-- Logout -->
                        <a href="#">
                            <i class="bi bi-box-arrow-right"></i>
                            Logout
                        </a>

                    </div>
                </div>

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

    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous"></script>
</body>
</html>