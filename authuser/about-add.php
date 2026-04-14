<?php include 'includes/header-admin.php'; ?>
<?php include 'includes/sidebar.php'; ?>

<main class="col-md-9 ms-sm-auto col-lg-10 py-4">
    
    <!-- Page Title -->
    <h4 class="mb-3 fw-bold">About Us</h4>
    <p>Dashboard / <span class="text-muted">About Us</span></p>

    <!-- Card -->
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h5 class="fw-semibold mb-0">Edit About Page</h5>
            </div>

            <!-- Form -->
            <form action="" method="POST" enctype="multipart/form-data">

                <!-- Title -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Title</label>
                    <input type="text" name="title" class="form-control" placeholder="Enter title">
                </div>

                <!-- Image -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <!-- Content -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Content</label>
                    <textarea id="editor" name="content"></textarea>
                </div>

                <!-- Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-primary px-4">
                        Update About Page
                    </button>
                </div>

            </form>

        </div>
    </div>

</main>

<?php include 'includes/footer.php'; ?>