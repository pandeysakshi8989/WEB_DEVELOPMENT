<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>User Dashboard - Academic and Living Resource Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="User Dashboard for accessing academic and living resources.">
    <meta name="keywords" content="dashboard, user services, academic help, living resources">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Review, Recommend and Connect</small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i><a href="mailto:sample@gmail.com" class="text-white">sample@gmail.com</a></p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i><a href="tel:+123456789" class="text-white">+123456789</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="bi bi-square"></i>Academic and Living Resource Feedback Network</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <a href="dashboard.php" class="nav-item nav-link active">Dashboard</a>
                <a href="#" class="nav-item nav-link">Connect</a>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Dashboard Start -->
    <div class="container my-5">
        <h2 class="text-center mb-4">User Dashboard</h2>
        <div class="row">
            <div class="col-lg-3">
                <div class="list-group">
                    <a href="services.php" class="list-group-item list-group-item-action">Services</a>
                    <a href="details.php" class="list-group-item list-group-item-action">Details</a>
                    <a href="pricing.php" class="list-group-item list-group-item-action">Pricing Plans</a>
                    <a href="team.php" class="list-group-item list-group-item-action">Team</a>
                    <a href="testimonials.php" class="list-group-item list-group-item-action">Testimonials</a>
                    <a href="offers.php" class="list-group-item list-group-item-action">Offers</a>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Welcome, [User's Name]!</h5>
                        <p class="card-text">Here you can access various services and resources to support your academic and living needs. Use the menu on the left to navigate through different options.</p>
                        <p class="card-text">If you need assistance, feel free to contact us!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Dashboard End -->

    <!-- Footer Start -->
    <footer class="container-fluid bg-light text-dark mt-5 pt-5">
        <div class="container text-center">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>About Us</h5>
                    <p>We provide a comprehensive range of resources and support for academic and living needs.</p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Contact</h5>
                    <p>Email: <a href="mailto:sample@gmail.com">sample@gmail.com</a></p>
                    <p>Phone: <a href="tel:+123456789">+123456789</a></p>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5>Follow Us</h5>
                    <a href="#" class="btn btn-primary btn-sm">Facebook</a>
                    <a href="#" class="btn btn-primary btn-sm">Twitter</a>
                    <a href="#" class="btn btn-primary btn-sm">LinkedIn</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-lg back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js" defer></script>
</body>

</html>
