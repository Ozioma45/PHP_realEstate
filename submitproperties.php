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
        <h2>Submit Property</h2>
        <p>Home > <span class="text-primary">Submit Property</span> </p>
</div>

<main class="col-md-10 m-auto col-lg-10 py-4">

<div class="card shadow-sm border-0">

        <div class="card-body">

            <h5 class="fw-semibold mb-4">Basic Information</h5>

            <form class="row g-4" method="POST" enctype="multipart/form-data">

                <!-- Property Title -->
                <div class="col-md-6">
                    <label class="form-label">Property Title</label>
                    <input type="text" class="form-control" name="title" placeholder="Universal King's Lodge">
                </div>

                <!-- Property Price -->
                <div class="col-md-6">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" placeholder="8500000">
                </div>

                <!-- Location -->
                <div class="col-md-6">
                    <label class="form-label">Location</label>
                    <input type="text" class="form-control" name="location" placeholder="Port Harcourt">
                </div>

                <!-- Property Type -->
                <div class="col-md-6">
                    <label class="form-label">Property Type</label>
                    <select class="form-select" name="type">
                        <option>Apartment</option>
                        <option>Duplex</option>
                        <option>Bungalow</option>
                        <option>Office</option>
                    </select>
                </div>

                <!-- Bedrooms -->
                <div class="col-md-4">
                    <label class="form-label">Bedrooms</label>
                    <input type="number" class="form-control" name="bedrooms">
                </div>

                <!-- Bathrooms -->
                <div class="col-md-4">
                    <label class="form-label">Bathrooms</label>
                    <input type="number" class="form-control" name="bathrooms">
                </div>

                <!-- Size -->
                <div class="col-md-4">
                    <label class="form-label">Size (sqft)</label>
                    <input type="number" class="form-control" name="size">
                </div>

                <!-- Property Status -->
                <div class="col-md-6">
                    <label class="form-label">Property Status</label>
                    <select class="form-select" name="status">
                        <option>For Sale</option>
                        <option>For Rent</option>
                    </select>
                </div>

                <!-- Property Image -->
                <div class="col-md-6">
                    <label class="form-label">Upload Main Image</label>
                    <input type="file" class="form-control" name="main_image">
                </div>

                <!-- Gallery Images -->
                <div class="col-12">
                    <label class="form-label">Property Gallery</label>
                    <input type="file" class="form-control" name="gallery[]" multiple>
                </div>

                <!-- Description -->
                <div class="col-12">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="5" name="description" placeholder="Write property description..."></textarea>
                </div>

                <!-- Submit -->
                <div class="col-12">
                    <button type="submit" class="btn btn-primary px-4">
                    <i class="bi bi-plus-circle me-2"></i>
                    Add Property
                    </button>
                </div>

            </form>

        </div>
    </div>

    </div>
</main>

 <?php include 'includes/footer.php'; ?>

