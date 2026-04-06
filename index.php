<?php 

    include 'includes/header.php'; 
    require_once "config/database.php";

    $db = (new Database())->connect();

    $stmt = $db->prepare("
        SELECT p.*, u.name AS owner_name
        FROM properties p
        LEFT JOIN users u ON p.user_id = u.id
        ORDER BY p.created_at DESC
    ");

    $stmt->execute();
    $properties = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

    <style>
        .hero-section {
            background: linear-gradient(90deg, rgba(0,0,0,0.8) 0%, rgba(0,0,0,0.6) 100%), url('assets/img/prop2.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding:20px 15px;
            transition: all 0.3s ease-in-out;
        }
    </style>


    <section class="hero-section text-center text-white m-2 m-md-5 rounded shadow">

        <!--Top text-->
        <div class="container pt-2">
             <p class="mb-2">Welcome to Zuba Properties</p>
        </div>


        <div class="container">

           
            
            <h1 class="display-5 fw-bold">Welcome to Zuba Properties</h1>
            <p class="lead mb-4">Your Trusted Real Estate Partner</p>

             <a href="#" class="btn btn-primary btn-lg rounded mb-4">Explore Listings</a>

        </div>


        <!--Search home-->
        <div class="container">

            <div class="px-md-5 px-3 py-3 rounded shadow">

                <form class="row g-3">

                    <div class="col-12 col-sm-6 col-lg-2">
                        <select class="form-select">
                            <option selected>Property Type</option>
                            <option>Apartment</option>
                            <option>House</option>
                            <option>Villa</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-2">
                        <select class="form-select">
                            <option selected>Min Price</option>
                            <option>$100,000</option>
                            <option>$200,000</option>
                            <option>$300,000</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-2">
                        <select class="form-select">
                            <option selected>Max Price</option>
                            <option>$500,000</option>
                            <option>$800,000</option>
                            <option>$1,000,000</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-2">
                        <select class="form-select">
                            <option selected>Status</option>
                            <option>For Sale</option>
                            <option>For Rent</option>
                        </select>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-2">
                        <input type="text" class="form-control" placeholder="Enter City">
                    </div>

                    <div class="col-12 col-sm-6 col-lg-2 d-grid">
                        <button type="submit" class="btn btn-primary rounded">
                            Search
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </section>

    

   

     <hr>

    <section class="about-us">
        <div class="container my-5">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img src="assets/img/prop1.jpg" alt="House img" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6">
                    <h2 class="fs-2 fw-bold">Your Trusted Real Estate Partner</h2>
                    <p class="lead">At Zuba Properties, we are committed to helping you find your dream home. With our extensive listings and expert guidance, we make the home buying process easy and enjoyable.</p>
                    <a href="#" class="btn btn-primary btn-lg rounded">Learn More</a>
                </div>
            </div>    
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

                <?php foreach($properties as $property): ?>

                    <div class="col-md-4">
                        <div class="card h-100 shadow">

                             <!-- Make image container relative -->
                            <div class="position-relative">
                                <img src="uploads/<?= htmlspecialchars($property['main_image']) ?>" class="card-img-top" alt="<?= htmlspecialchars($property['title']) ?>">

                                <!-- Sale / Rent Badge -->
                                <span class="badge bg-primary position-absolute top-0 end-0 m-3 px-3 py-2">
                                    <?= htmlspecialchars($property['status']) ?>
                                </span>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><?= htmlspecialchars($property['title']) ?></h5>
                                <p class="card-text"><i class="bi bi-geo-alt-fill me-2 text-primary"></i><?= htmlspecialchars($property['location']) ?></p> 
                                <p class="card-text p-2 prop-feat"><?= htmlspecialchars($property['bedrooms']) ?> Beds, <?= htmlspecialchars($property['bathrooms']) ?> Baths, <?= htmlspecialchars($property['size']) ?> sqft</p>
                                 
                                 <p class="card-text mb-0 d-flex justify-content-between align-items-center ">
                                        <span><i class="bi bi-person-fill me-2 text-primary"></i>by : <?= htmlspecialchars($property['owner_name'] ?? 'Unknown') ?></span>
                                        <span><strong>$<?= number_format($property['price'], 2) ?></strong></span>
                                </p>   
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>    


                
    </section>

    

    <?php include 'includes/footer.php'; ?>