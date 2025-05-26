<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: login.php');
    exit;
}
require_once __DIR__ . '/../includes/db.php';
if (!isset($_GET['id'])) {
    die('Product ID not specified.');
}
$stmt = $pdo->prepare('DELETE FROM products WHERE id = ?');
$stmt->execute([$_GET['id']]);
header('Location: index.php');
exit;
?>
