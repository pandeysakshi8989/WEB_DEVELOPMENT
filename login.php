<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login - Academic and Living Resource Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.php" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="bi bi-square"></i>Academic and Living Resource Feedback Network</h1>
        </a>
    </nav>
    <!-- Navbar End -->

    <!-- Login Form Start -->
    <div class="container mt-5">
        <h2 class="text-center">Login</h2>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <form>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Enter your password" required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div>
                            <input type="checkbox" id="rememberMe">
                            <label for="rememberMe">Remember me</label>
                        </div>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
                </form>
                <p class="text-center mt-3">Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal">Register here</a></p>
            </div>
        </div>
    </div>
    <!-- Login Form End -->

    <!-- Registration Modal Start -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="regEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="regEmail" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-3">
                            <label for="regPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="regPassword" placeholder="Enter your password" required>
                        </div>
                        <div class="mb-3">
                            <label for="regConfirmPassword" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="regConfirmPassword" placeholder="Confirm your password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration Modal End -->

    <!-- Footer Start -->
    <footer class="container-fluid bg-light text-dark mt-5 pt-5">
        <div class="container text-center">
            <p>&copy; 2024 Academic and Living Resource Feedback Network. All rights reserved.</p>
        </div>
    </footer>
    <!-- Footer End -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
