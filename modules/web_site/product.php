<?php
require_once __DIR__ . '/../../includes/db.php';
if (!isset($_GET['id'])) {
    die('Product ID not specified.');
}
$id = intval($_GET['id']);
$stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
$stmt->execute([$id]);
$product = $stmt->fetch();
if (!$product) {
    die('Product not found.');
}
$specs = json_decode($product['specs_json'], true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($product['name']) ?> - Product Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-white">
<?php include 'navbar.php'; ?>
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6">
            <img src="<?= htmlspecialchars($product['image_path']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h1 class="display-5 fw-bold mb-3"><?= htmlspecialchars($product['name']) ?></h1>
            <h2 class="h4 text-muted mb-3">$<?= number_format($product['price'], 2) ?></h2>
            <p class="lead mb-4"><?= nl2br(htmlspecialchars($product['full_description'])) ?></p>
            <a href="#buy" class="btn btn-dark btn-lg px-4 me-2">Buy Now</a>
        </div>
    </div>
    <hr class="my-5">
    <h3 class="mb-4">Technical Specifications</h3>
    <ul class="list-group list-group-flush mb-5">
        <?php foreach ($specs as $key => $value): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <span><?= htmlspecialchars($key) ?></span>
                <span class="fw-semibold text-end ms-3"><?= htmlspecialchars($value) ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
    <a href="index.php" class="btn btn-outline-secondary">Back to Home</a>
</div>
<?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/product.js"></script>
</body>
</html>
