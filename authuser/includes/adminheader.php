<?php
session_start();

// check if admin is logged in
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}
?>

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
    
    <!--TinyMCE Editor -->
    <script src="https://cdn.tiny.cloud/1/zgz2833xnti1loopx4hfh2usqleqgdkrqff8s26rk5o4haii/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
    <script>
tinymce.init({
  selector: '#editor',
  height: 300,
  menubar: true,
  plugins: [
    'advlist', 'autolink', 'lists', 'link', 'image', 'charmap',
    'preview', 'anchor', 'searchreplace', 'visualblocks',
    'code', 'fullscreen', 'insertdatetime', 'media',
    'table', 'help', 'wordcount'
  ],
  toolbar:
    'undo redo | formatselect | bold italic underline | \
     alignleft aligncenter alignright alignjustify | \
     bullist numlist outdent indent | link image | code fullscreen'
});
</script>
    
    <title>Admin Dashboard</title>



    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        .admin-hearder-left{
            cursor: pointer;
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
            overflow: visible !important;
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

        .action-btn{
    border:none;
    background:transparent;
    padding:6px 8px;
    border-radius:6px;
    transition:0.2s;
}

.action-btn:hover{
    background:#f5f5f5;
}

.dropdown-menu{
    min-width:180px;
    border-radius:10px;
    z-index: 9999 !important;
    position: absolute;
    margin-top:6px;
}

.dropdown-item{
    border-radius:6px;
    padding:8px 10px;
    font-size:14px;
}

.dropdown-item:hover{
    background:#f7f7f7;
}

.table-responsive{
    overflow: visible !important;
}

    </style>
</head>
<body>
 
 
 <!-- Top Navbar -->
<header class="navbar navbar-expand bg-white shadow-sm px-4 py-3">

    <!-- Left Side -->
    <div class="d-flex align-items-center gap-3 admin-hearder-left">
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
                <li><a class="dropdown-item" href="admin-profile.php"><i class="bi bi-person me-2"></i>Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item text-danger" href="logout.php">
                    <i class="bi bi-box-arrow-right me-2"></i>Logout
                </a></li>
            </ul>
        </div>

    </div>

</header>