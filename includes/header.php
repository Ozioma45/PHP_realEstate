<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    


    <title>Hello, world!</title>

    <!--style-->
    <link rel="stylesheet" href="assets/css/style.css">
  </head>

   <body>
    <div class="contact bg-dark text-white d-flex justify-content-between p-2 pt-3 px-4 d-none d-lg-flex">
        <div>
            <span class="me-3"><i class="bi bi-facebook me-1 color-primary"></i></span>
            <span class="me-3"><i class="bi bi-twitter me-1"></i></span>
            <span class="me-3"><i class="bi bi-instagram me-1"></i></span>
        </div>
        <span><i class="bi bi-telephone-fill me-1"></i> +91 1234567890</span>
        <span><i class="bi bi-envelope-fill me-1"></i> info@zubaproperties.com</span>
    </div>

    <header class="container-fluid mb-5 mb-lg-0">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="" width="40" height="30" class="d-inline-block align-text-top">
                    <span class="fw-bold">Zuba Properties</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav mx-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="property.php">Properties</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Agent/Builder
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="agents.php">Agent</a></li>
                                <li><a class="dropdown-item" href="builders.php">Builder</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login/Register</a>
                        </li>
                    </ul>
                    
                    <button type="button" class="btn btn-primary rounded-pill">Submit Property</button>
                </div>
            </div>
        </nav>
    </header>