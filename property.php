<?php include 'includes/header.php'; ?>
    
    <section class="mt-5">
        <div class="container">
            <h1 class="text-center my-5 fw-bold">Properties</h1>
            <div class="row">

                <!--Filtering-->
                <div class="mb-4">
                    <h5 class="mb-3 fw-bold">Filter By</h5>
                    <div class="d-flex gap-3">

                        <select class="form-select">
                            <option selected>Property Type</option>
                            <option value="1">Apartment</option>
                            <option value="2">House</option>
                            <option value="3">Villa</option>
                        </select>

                        <select class="form-select">
                            <option selected>Select Status</option>
                            <option value="1">For Sale</option>
                            <option value="2">For Rent</option>
                        </select>

                       
                            <input type="number" class="form-control" placeholder="Min Price">
                            <input type="number" class="form-control" placeholder="Max Price">

                        <input type="text" class="form-control" placeholder="Enter City">

                        <button type="submit" class="btn btn-primary btn-lg rounded">Search</button>
                    </div>
            </div>
        </div>
    </section>

    <section class="properties pb-5">
        <div class="container mt-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="mb-3">3 Properties Found</h5>
                <select class="form-select w-auto">
                    <option selected>Sort by</option>
                    <option value="1">Newest</option>
                    <option value="2">Lowest Price</option>
                    <option value="3">Highest Price</option>
                </select>
            </div>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <a href="propertyinfo.php" class="text-decoration-none text-dark">
                            <!-- Make image container relative -->
                            <div class="position-relative">
                                <img src="assets/img/prop1.jpg" class="card-img-top" alt="Property 1">

                                <!-- Sale / Rent Badge -->
                                <span class="badge bg-primary position-absolute top-0 end-0 m-3 px-3 py-2">
                                    For Sale
                                </span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Modern Apartment in City Center</h5>
                                <p class="card-text"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>123 Main Street, City Center</p>
                                <p class="card-text p-2 prop-feat">2 Beds, 2 Baths, 1200 sqft</p>
                                
                                <p class="card-text mb-0 d-flex justify-content-between align-items-center ">
                                        <span><i class="bi bi-person-fill me-2 text-primary"></i>by : Ozioma Egole</span>
                                        <span><strong>$550,000</strong></span>
                                </p>   
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <a href="propertyinfo.php" class="text-decoration-none text-dark">
                            <!-- Make image container relative -->
                            <div class="position-relative">
                                <img src="assets/img/prop3.jpg" class="card-img-top" alt="Property 1">

                                <!-- Sale / Rent Badge -->
                                <span class="badge bg-primary position-absolute top-0 end-0 m-3 px-3 py-2">
                                    For Sale
                                </span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Spacious Family Home</h5>
                                <p class="card-text"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>456 Oak Avenue, Suburbia</p>
                                <p class="card-text p-2 prop-feat">4 Beds, 3 Baths, 2500 sqft</p>
                                
                                <p class="card-text mb-0 d-flex justify-content-between align-items-center ">
                                        <span><i class="bi bi-person-fill me-2 text-primary"></i>by : Ozioma Egole</span>
                                        <span><strong>$550,000</strong></span>
                                </p>   
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
                        <a href="propertyinfo.php" class="text-decoration-none text-dark">
                            <!-- Make image container relative -->
                            <div class="position-relative">
                                <img src="assets/img/prop2.jpg" class="card-img-top" alt="Property 1">

                                <!-- Sale / Rent Badge -->
                                <span class="badge bg-primary position-absolute top-0 end-0 m-3 px-3 py-2">
                                    For Sale
                                </span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Luxury Waterfront Villa</h5>
                                <p class="card-text"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>123 Main Street, City Center</p>
                                <p class="card-text p-2 prop-feat">3 Beds, 3 Baths, 1800 sqft</p>
                                
                                <p class="card-text mb-0 d-flex justify-content-between align-items-center ">
                                        <span><i class="bi bi-person-fill me-2 text-primary"></i>by : Ozioma Egole</span>
                                        <span><strong>$550,000</strong></span>
                                </p>   
                            </div>
                        </a>
                    </div>
                </div>
    </section>

   <?php include 'includes/footer.php'; ?>