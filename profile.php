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
        <h2>Profile</h2>
        <p>Home > <span class="text-primary">Profile</span> </p>
</div>

<div class="container mt-5">
    <div class="row">
        <!-- LEFT: FORM -->
        <div class="col-md-6">
            <div class="profile-card">
                <h5>Feedback Form</h5>

                <form>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter Full Name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Contact Number</label>
                        <input type="text" class="form-control" placeholder="Enter Phone">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Your Feedback</label>
                        <textarea class="form-control" rows="5" placeholder="Enter Text Here..."></textarea>
                    </div>

                    <button class="btn btn-primary">Send Feedback</button>
                </form>
            </div>
        </div>

        <!-- RIGHT: PROFILE INFO -->
        <div class="col-md-6">
            <div class="profile-card">
                <img src="<?= $user['image']; ?>" class="profile-img mb-3" alt="Profile Image">

                <p><strong>Name:</strong> <?= $user['name']; ?></p>
                <p><strong>Email:</strong> <?= $user['email']; ?></p>
                <p><strong>Contact:</strong> <?= $user['phone']; ?></p>
                <p><strong>Role:</strong> <?= $user['role']; ?></p>

                <a href="logout.php" class="btn btn-danger mt-3">Logout</a>
            </div>
        </div>
    </div>
</div>

 <?php include 'includes/footer.php'; ?>
