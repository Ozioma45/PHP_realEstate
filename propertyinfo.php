
<?php include 'includes/header.php'; ?>

<style>
/* Property image zoom */

.main-image{
    overflow:hidden;
    border-radius:10px;
    position:relative;
}

.main-image img{
    width:100%;
    transition: transform 0.2s ease;
    transform-origin:center;
    cursor:zoom-in;
}

/* thumbnails */

.thumb{
    cursor:pointer;
    transition:0.2s;
}

.thumb:hover{
    opacity:0.8;
    transform:scale(1.05);
}
</style>

<body>

<!-- Property Header -->
<section class="mt-5">
    <div class="container">

        <h3 class="fw-bold">Universal King’s Lodge</h3>

        <p class="text-muted mb-4">
            By Admin /
            <span>February 30, 2026</span>
        </p>

    </div>
</section>


<section class="mt-5 mb-5">
    <div class="container">

        <div class="row g-4">

            <!-- IMAGE GALLERY -->
            <div class="col-lg-7">

                <div class="property-gallery">

                    <!-- Main Image -->
                    <div class="main-image mb-3">
                        <img id="mainImage" src="assets/img/prop1.jpg"  class="img-fluid rounded">
                    </div>

                    <!-- Thumbnails -->
                    <div class="row g-2">

                        <div class="col-4">
                            <img src="assets/img/prop1.jpg" class="img-fluid rounded thumb">
                        </div>

                        <div class="col-4">
                            <img src="assets/img/prop2.jpg"  class="img-fluid rounded thumb">
                        </div>

                        <div class="col-4">
                            <img src="assets/img/prop2.jpg"  class="img-fluid rounded thumb">
                        </div>

                    </div>

                </div>
            </div>


            <!-- PROPERTY INFO -->
            <div class="col-lg-5">

                <h3 class="fw-bold mb-2">
                    Universal King’s Lodge
                </h3>

                <p class="text-muted mb-3">
                    Port Harcourt • Listed Feb 2026
                </p>

                <h4 class="text-primary fw-bold mb-4">
                    ₦8,500,000
                </h4>

                <div class="d-flex gap-4 mb-4">

                    <div>
                        <i class="bi bi-door-open"></i>
                        <strong>3</strong> Beds
                    </div>

                    <div>
                        <i class="bi bi-badge-wc"></i>
                        <strong>2</strong> Baths
                    </div>

                    <div>
                        <i class="bi bi-aspect-ratio"></i>
                        <strong>1200</strong> sqft
                    </div>

                </div>

                <p class="text-muted">
                    Universal King’s Lodge is a luxury residential apartment located in a quiet and secure environment. It offers spacious rooms, modern fittings, and a peaceful environment ideal for families.
                </p>

                <button class="btn btn-primary w-100 mt-3">
                    <a href="contactagents.php" class="text-white text-decoration-none">Contact Agent</a>
                </button>

            </div>

        </div>
    </div>
</section>


<?php include 'includes/footer.php'; ?>

</body>
</html>