<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: login.php');
    exit;
}
require_once __DIR__ . '/../includes/db.php';

// Initialize variables
$id = $name = $short_description = $full_description = $image_path = $price = $specs_json = '';
$editing = false;
$error = '';

// Handle edit mode
if (isset($_GET['id'])) {
    $editing = true;
    $stmt = $pdo->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$_GET['id']]);
    $product = $stmt->fetch();
    if (!$product) {
        die('Product not found.');
    }
    extract($product);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $short_description = $_POST['short_description'];
    $full_description = $_POST['full_description'];
    $price = $_POST['price'];
    $specs_json = $_POST['specs_json'];
    // Handle image upload
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $newName = 'assets/images/products/' . uniqid('product_') . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/../' . $newName);
        $image_path = $newName;
    } elseif ($editing) {
        $image_path = $product['image_path'];
    }
    if ($editing) {
        $stmt = $pdo->prepare('UPDATE products SET name=?, short_description=?, full_description=?, image_path=?, price=?, specs_json=? WHERE id=?');
        $stmt->execute([$name, $short_description, $full_description, $image_path, $price, $specs_json, $_GET['id']]);
    } else {
        $stmt = $pdo->prepare('INSERT INTO products (name, short_description, full_description, image_path, price, specs_json) VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute([$name, $short_description, $full_description, $image_path, $price, $specs_json]);
    }
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $editing ? 'Edit' : 'Add' ?> Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <h1 class="mb-4"><?= $editing ? 'Edit' : 'Add' ?> Product</h1>
    <form method="post" enctype="multipart/form-data" class="bg-white p-4 rounded shadow-sm">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?= htmlspecialchars($name) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Short Description</label>
            <textarea name="short_description" class="form-control" rows="2" required><?= htmlspecialchars($short_description) ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Full Description</label>
            <textarea name="full_description" class="form-control" rows="4" required><?= htmlspecialchars($full_description) ?></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Price ($)</label>
            <input type="number" name="price" class="form-control" step="0.01" value="<?= htmlspecialchars($price) ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Specs (JSON format)</label>
            <textarea name="specs_json" class="form-control" rows="3" required><?= htmlspecialchars($specs_json) ?></textarea>
            <small class="text-muted">e.g. {"Processor":"Apple M2","RAM":"16GB","Storage":"512GB SSD"}</small>
        </div>
        <div class="mb-3">
            <label class="form-label">Product Image</label>
            <input type="file" name="image" class="form-control" <?= $editing ? '' : 'required' ?>>
            <?php if ($editing && $image_path): ?>
                <div class="mt-2">
                    <img src="../<?= htmlspecialchars($image_path) ?>" alt="Current Image" style="max-width:120px;max-height:80px;">
                </div>
            <?php endif; ?>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="index.php" class="btn btn-secondary">Cancel</a>
    </form>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
