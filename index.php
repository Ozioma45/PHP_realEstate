<!doctype html>
<html lang="en">
  
    <?php include 'includes/header.php'; ?>

    <section class="hero d-flex align-items-center justify-content-between">
        <div class="container d-flex align-items-center justify-content-center flex-column flex-lg-row mt-5 mt-lg-0">
            <div class="text-center text-lg-start">
                <h1 class="fs-1 fw-bold">Find It. Love It. Own It.</h1>
                <p class="lead">Discover the best properties in town with Zuba Properties.</p>
                <a href="#" class="btn btn-primary btn-lg rounded">Explore Now</a>
            </div>

            <div class="hero-img">
                <img src="assets/img/rb_26815.png" alt="House img" class="img-fluid"  >
            </div>
        </div>
    </section>

    <section class="findHome">
        <div class="container bg-light p-5 rounded shadow">
            <h2 class="text-center mb-4">Find Your Dream Home</h2>
            <form class="row g-3">
                
                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Property Type</option>
                        <option value="1">Apartment</option>
                        <option value="2">House</option>
                        <option value="3">Villa</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <select class="form-select">
                        <option selected>Select Status</option>
                        <option value="1">For Sale</option>
                        <option value="2">For Rent</option>
                    </select>
                </div>

                <div class="col-md-3">
                    <input type="number" class="form-control" placeholder="Enter City">
                </div>
                <div class="col-md-3 d-grid">
                    <button type="submit" class="btn btn-primary btn-lg rounded">Search</button>
                </div>
            </form>
        </div>
    </section>

    <hr>

    <section class="whatWedo">
        <div class="container mt-5 p-5">
            <h2 class="text-center mb-5">What We Do</h2>
            <div class="row g-4">

                <div class="col-md-3">
                    <div class="card h-100 text-center bg-transparent border-0 shadow-none">
                        <div class="card-body">
                            <i class="bi bi-house-door-fill fs-1 mb-3 color-primary"></i>
                            <h5 class="card-title">Buy a Home</h5>
                            <p class="card-text">Explore our extensive listings to find your perfect home.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 text-center bg-transparent border-0 shadow-none">
                        <div class="card-body">
                            <i class="bi bi-building fs-1 mb-3 color-primary"></i>
                            <h5 class="card-title">Sell a Home</h5>
                            <p class="card-text">Get expert assistance to sell your property quickly and efficiently.</p>
                        </div>  
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 text-center bg-transparent border-0 shadow-none">
                        <div class="card-body">
                            <i class="bi bi-building fs-1 mb-3 color-primary"></i>
                            <h5 class="card-title">Property Management</h5>
                            <p class="card-text">Get expert assistance to manage your property effectively.</p>
                        </div>  
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card h-100 text-center bg-transparent border-0 shadow-none">
                        <div class="card-body">
                            <i class="bi bi-building fs-1 mb-3 color-primary"></i>
                            <h5 class="card-title">Rent a Home</h5>
                            <p class="card-text">Find the best rental properties that suit your needs and budget.</p>
                        </div>
                    </div>
                </div>
    </section>

    <section class="properties pb-5">
        <div class="container mt-5">
            <h2 class="text-center mb-5">Featured Properties</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100 shadow">
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
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
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
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow">
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
                    </div>
                </div>
    </section>

    

    <?php include 'includes/footer.php'; ?>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>