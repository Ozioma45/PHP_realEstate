<?php include 'includes/adminheader.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 py-4">

    <h4 class="fw-bold mb-2">Add Property</h4>
    <p class="text-muted mb-4">Dashboard / Property / Add Property</p>

    <div class="card shadow-sm border-0">
        <div class="card-body">

            <h5 class="fw-semibold mb-4">Property Details</h5>

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

</main>

<?php include 'includes/footer.php'; ?>