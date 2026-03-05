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
   
    <?php include 'includes/adminheader.php'; ?>

    <?php include 'includes/sidebar.php'; ?>

            <main class="col-md-9 ms-sm-auto col-lg-10 py-4">
                <h4 class="mb-3 fw-bold">
                    Users
                </h4>
                <p>Dashboard /  <span class="text-muted">Users</span></p>

                <!--Tables for users-->
                <div class="card shadow-sm border-0 mb-4">
                    
                    <div class="card-body">

                        <!-- Header -->
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-3 mb-4">   
                            <h5 class="fw-semibold mb-0">Users List</h5>

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
