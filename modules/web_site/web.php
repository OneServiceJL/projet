<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>TOP 5 SAI </title>
    <link rel="icon" type="image/x-icon" href="images/fevicon.png">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow fixed-top">
        <div class="container">
            <a class="navbar-brand" href="web.php">
                <img src="images/fevicon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                TOP 5 SAI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-dark text-white" href="signup.php">Sign Up</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Heder -->
    <header class="hero-section mt-5 mb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mt-5 ">
                    <h1 class="display-4 fw-bold">Welcome to TOP 5 SAI</h1>
                    <p class="lead">Your one-stop destination for all your needs.</p>
                    <a href="signup.php" class="btn btn-primary btn-lg">Get Started</a>
                </div>
                <div class="col-md-6 text-center mt-5">
                    <img src="images/page_bg_1.png" alt="Hero Image" class="hero-img">
                </div>
            </div>
        </div>
    </header>
    <!-- Features -->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 fade-in">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/page_bg_1.png" class="card-img-top" alt="Feature 1">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-2">Fast and Reliable</h5>
                            <p class="card-text">We offer fast and reliable delivery services to ensure your order arrives on time.</p>
                        </div>
                    </div>
                </div>  
                <div class="col-md-4 mb-4 fade-in">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/page_bg_2.png" class="card-img-top" alt="Feature 2">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-2">Wide Range of Products</h5>
                            <p class="card-text">We have a wide range of products to choose from, from laptops to smartphones.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 fade-in">
                    <div class="card h-100 shadow-sm border-0">
                        <img src="images/page_bg_3.png" class="card-img-top" alt="Feature 3">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold mb-2">Easy to Use</h5>    
                            <p class="card-text">Our website is easy to use and navigate, making it a breeze for you to find the products you need.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section class="about-section p-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 order-md-2">
                    <img src="images/page_bg_4.png" alt="About Image" class="img-fluid">
                </div>  
                <div class="col-md-6 order-md-1">
                    <h2 class="fw-bold mb-4">About Us</h2>
                    <p class="lead">We are a leading computer store in the Philippines, providing a wide range of products to meet your needs.</p>
                    <p>We are committed to providing our customers with the best possible experience, and we strive to exceed your expectations.</p>
                </div>
            </div>
        </div>
    </section>  
    
    <!-- Footer -->
    <footer class="bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">&copy; 2023 TOP 5 SAI. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <a href="privacy.php" class="text-dark">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        // Fade-in on scroll    
        function revealOnScroll() {
            document.querySelectorAll('.fade-in').forEach(function(el) {
                var rect = el.getBoundingClientRect();
                if (rect.top < window.innerHeight - 100) {
                    el.classList.add('visible');
                }
            });
        }   
        document.addEventListener('scroll', revealOnScroll);
        document.addEventListener('DOMContentLoaded', revealOnScroll);
    </script>
</body>
</html>



