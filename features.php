<?php
include 'includes/header.php'; 

// Redirect if not logged in
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
?>

 <style>
        .profile-card { background: white; padding: 20px; border-radius: 10px; }
        .profile-img { 
            width: 100%; 
            border-radius: 10px; 
            object-fit: cover; 
            object-position:top;
            height: 300px;
        }

        .top-profile{
            background: linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.6) 100%), url('assets/img/prop1.jpg');
            width: 100%;
            height: 200px;
            background-size: cover;
            background-position: top;
            color:#fff;
            padding: 0px 5rem;
            position: relative;
        }
    </style>

<div class="mb-4 d-flex justify-content-between align-items-center top-profile">
        <h2>Properties</h2>
        <p>Home > <span class="text-primary">Properties</span> </p>
</div>

<div class="container mt-5">
    <div class="row">
        <h3>User Listed Properties</h3>

        <!--Table-->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Location</th>
                    <th>Price</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><img src="assets/img/prop1.jpg" width="100" height="70" style="object-fit:cover"></td>
                    <td>Modern Apartment in City Center</td>
                    <td>City Center</td>
                    <td>$1,200/month</td>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>

                <tr>
                    <td><img src="assets/img/prop2.jpg" width="100" height="70" style="object-fit:cover"></td>
                    <td>Cozy Suburban House with Garden</td>
                    <td>Suburban Area</td>
                    <td>$250,000</td>
                    <td><span class="badge bg-secondary">Sold</span></td>
                </tr>

                <tr>
                    <td><img src="assets/img/prop3.jpg" width="100" height="70" style="object-fit:cover"></td>
                    <td>Luxury Condo with Ocean View</td>
                    <td>Beachfront</td>
                    <td>$3,500/month</td>
                    <td><span class="badge bg-success">Active</span></td>
                </tr>

            </tbody>
        </table>

    </div>
</div>

 <?php include 'includes/footer.php'; ?>

