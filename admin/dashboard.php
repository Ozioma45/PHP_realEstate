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
            background-color: #343a40;
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
    </style>
</head>
<body>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-lg-2 d-md-block bg-dark sidebar">
                <div>
                    <h5 class="text-white">Admin Dashboard</h5>
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

        <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
        <h1 class="mb-4 fw-bold">
            Welcome back, <span class="text-primary">Admin</span>
        </h1>
        <div class="row g-4 mb-4">
            <div class="col-sm-6 col-lg-3 d-flex">
                <div class="card shadow-sm h-100 w-100">
                    <div class="card-body">
                        <h6 class="text-muted">Users</h6>
                        <h3 class="fw-semibold">1,234</h3>
                        <span class="badge bg-success">
                            <i class="bi bi-arrow-right-circle me-1"></i>
                            5.4% this month
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 d-flex">
                <div class="card shadow-sm h-100 w-100">
                    <div class="card-body">
                        <h6 class="text-muted">Revenue</h6>
                        <h3 class="fw-semibold">$12,345</h3>
                        <span class="badge bg-danger">
                            <i class="bi bi-arrow-down-right-circle me-1"></i>
                            -7% this month
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 d-flex">
                <div class="card shadow-sm h-100 w-100">
                    <div class="card-body">
                        <h6 class="text-muted">Projects</h6>
                        <h3 class="fw-semibold">12</h3>
                        <span class="badge bg-success">
                            <i class="bi bi-check-circle me-1"></i>
                            +5% this month
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 d-flex">
                <div class="card shadow-sm h-100 w-100">
                    <div class="card-body">
                        <h6 class="text-muted">Server Upline</h6>
                        <h3 class="fw-semibold">99.9%</h3>
                        <span class="badge bg-primary">
                            <i class="bi bi-check-circle me-1"></i>
                            stable
                        </span>
                    </div>
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