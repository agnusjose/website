<?php
session_start();

// Handle product addition form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $artisan_id = $_SESSION['user_id'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_url = $_POST['image_url'];

    // Insert new product into 'products' table
    $sql = "INSERT INTO products (artisan_id, title, description, price, image_url) VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$artisan_id, $title, $description, $price, $image_url]);

    // Redirect to artisan dashboard or product listing page
    header("Location: artisan_dashboard.php");
    exit();
}
?>


