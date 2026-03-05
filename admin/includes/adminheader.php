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

        .table tbody tr {
            transition: all 0.2s ease-in-out;
        }

        .table tbody tr:hover {
            background-color: #f8f9fa;
            transform: scale(1.005);
        }

        .sidebar a[aria-expanded="true"] .bi-chevron-down {
            transform: rotate(180deg);
            transition: 0.3s;
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