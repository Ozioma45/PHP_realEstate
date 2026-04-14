<?php
declare(strict_types=1);
session_start();

// ==============================
// AUTH CHECK
// ==============================
if (empty($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}

// Optional: dynamic page title
$pageTitle = $pageTitle ?? "Dashboard";

// Optional: admin name (if stored)
$adminName = $_SESSION['admin_name'] ?? "Administrator";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <meta name="author" content="Admin Panel">
        <meta name="description" content="Admin dashboard panel">

        <!-- FAVICON (optional) -->
        <link rel="icon" href="../assets/img/logo.png">

        <!-- Icons -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        
        
        <title><?= htmlspecialchars($pageTitle) ?> | Admin Panel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
        <!-- TinyMCE -->
        <script src="https://cdn.tiny.cloud/1/zgz2833xnti1loopx4hfh2usqleqgdkrqff8s26rk5o4haii/tinymce/8/tinymce.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                if (document.querySelector('#editor')) {
                    tinymce.init({
                        selector: '#editor',
                        height: 300,
                        menubar: false,
                        plugins: [
                            'lists link image table code fullscreen wordcount'
                        ],
                        toolbar:
                            'undo redo | bold italic underline | alignleft aligncenter alignright | bullist numlist | link image | code fullscreen'
                    });
                }
            });
        </script>


<!-- CUSTOM STYLES -->
    <style>
        header {
            position: relative;
            z-index: 9999;
        }


        body {
            font-family: "Segoe UI", system-ui, -apple-system, sans-serif;
            background-color: #f4f6f9;
        }

        /* NAVBAR */
        .admin-navbar {
            background: #ffffff;
            border-bottom: 1px solid #e5e7eb;
        }

        .admin-navbar .brand {
            font-weight: 600;
            font-size: 1.1rem;
        }

        /* SIDEBAR */
        .sidebar {
            min-height: 100vh;
            background: #111827;
            padding: 1.5rem 1rem;
        }

        .sidebar a {
            color: #9ca3af;
            display: flex;
            align-items: center;
            padding: 0.65rem 0.9rem;
            border-radius: 6px;
            text-decoration: none;
            transition: 0.2s;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #1f2937;
            color: #fff;
        }

        /* CARDS */
        .card {
            border: none;
            border-radius: 10px;
            transition: 0.2s ease;
        }

        .card:hover {
            transform: translateY(-4px);
        }

        /* TABLE */
        .table tbody tr:hover {
            background: #f9fafb;
        }

        /* PROFILE */
        .profile-img {
            object-fit: cover;
        }

        .dropdown-menu {
            z-index: 2000;
        }
    </style>
    
    </head>
    <body>
        <!-- ==============================
        TOP NAVBAR
        ============================== -->
        <header class="navbar navbar-expand admin-navbar px-4 py-2">

            <!-- LEFT -->
            <div class="d-flex align-items-center gap-3">

                <!-- Mobile Toggle -->
                <button class="btn btn-light d-md-none"
                    type="button"
                    data-bs-toggle="offcanvas"
                    data-bs-target="#sidebarMenu">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Logo -->
                <img src="../assets/img/logo.png" width="38" height="30" alt="Logo">

                <!-- Title -->
                <span class="brand"><?= htmlspecialchars($pageTitle) ?></span>
            </div>

             <!-- RIGHT -->
            <div class="ms-auto">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center"
                        href="#"
                        id="adminDropdown"
                        role="button"
                        data-bs-toggle="dropdown"
                        aria-expanded="false">

                            <img src="https://i.pravatar.cc/40"
                                class="rounded-circle me-2"
                                width="36"
                                height="36"
                                alt="User">

                            <span class="fw-medium d-none d-md-inline text-dark">
                                <?= htmlspecialchars($adminName) ?>
                            </span>
                        </a>

                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="adminDropdown">

                            <li class="px-3 py-2">
                                <small class="text-muted">Signed in as</small><br>
                                <strong><?= htmlspecialchars($adminName) ?></strong>
                            </li>

                            <li><hr class="dropdown-divider"></li>

                            <li><a class="dropdown-item" href="admin-profile.php">
                                <i class="bi bi-person me-2"></i>My Profile
                            </a></li>

                            <li><hr class="dropdown-divider"></li>

                            <li><a class="dropdown-item text-danger" href="logout.php">
                                <i class="bi bi-box-arrow-right me-2"></i>Logout
                            </a></li>

                        </ul>
                    </li>

                </ul>
            </div>

        </header>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </body>
</html>

