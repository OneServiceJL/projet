<?php
//require_once __DIR__ . '/../../includes/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Showcase</title>
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <style>
        .hero-section {
            background: linear-gradient(90deg, #f8fafc 60%, #e9ecef 100%);
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 0 40px 0;
        }
        .hero-img {
            max-width: 100%;
            border-radius: 1rem;
            box-shadow: 0 8px 32px rgba(0,0,0,0.12);
        }
        .feature-section {
            background: #fff;
            padding: 60px 0;
        }
        .fade-in {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(.4,0,.2,1);
        }
        .fade-in.visible {
            opacity: 1;
            transform: none;
        }
    </style>
</head>
<body class="bg-white">
<?php include 'navbar.php'; ?>

<!-- Hero Section -->
<section class="hero-section text-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/images/page_bg_3.png" alt="MacBook Air" class="hero-img img-fluid">
            </div>
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-3">TOP 5 SAI</h1>
                <p class="lead mb-4">Experience the next level of performance and design with our latest product lineup, inspired by the iconic MacBook Air.</p>
                <a href="#products" class="btn btn-dark btn-lg px-4 me-2">Shop Now</a>
                <a href="#features" class="btn btn-outline-secondary btn-lg px-4">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="feature-section">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col-md-4 fade-in">
                <i class="fas fa-bolt fa-3x mb-3 text-primary"></i>
                <h3 class="fw-semibold">Performance</h3>
                <p>Blazing-fast processors and all-day battery life for work and play.</p>
            </div>
            <div class="col-md-4 fade-in">
                <i class="fas fa-laptop fa-3x mb-3 text-success"></i>
                <h3 class="fw-semibold">Design</h3>
                <p>Ultra-thin, lightweight, and crafted with precision for a premium feel.</p>
            </div>
            <div class="col-md-4 fade-in">
                <i class="fas fa-battery-full fa-3x mb-3 text-warning"></i>
                <h3 class="fw-semibold">Battery Life</h3>
                <p>Go further with power that lasts all day, wherever you are.</p>
            </div>
        </div>
    </div>
</section>

<!-- Product Showcase Section -->
<section id="products" class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Featured Products</h2>
        <div class="row">
        <?php
        $stmt = $pdo->query('SELECT * FROM products ORDER BY id DESC LIMIT 6');
        while ($product = $stmt->fetch()):
            $specs = json_decode($product['specs_json'], true);
        ?>
            <div class="col-md-4 mb-4 fade-in">
                <div class="card h-100 shadow-sm border-0">
                    <img src="<?= htmlspecialchars($product['image_path']) ?>" class="card-img-top" alt="<?= htmlspecialchars($product['name']) ?>">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold mb-2"><?= htmlspecialchars($product['name']) ?></h5>
                        <p class="card-text text-muted mb-2">$<?= number_format($product['price'], 2) ?></p>
                        <p class="card-text small mb-3"><?= htmlspecialchars($product['short_description']) ?></p>
                        <a href="product.php?id=<?= $product['id'] ?>" class="btn btn-outline-dark btn-sm">View Details</a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
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
