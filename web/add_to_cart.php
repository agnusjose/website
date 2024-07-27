<?php
session_start();

// Handle adding item to cart
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Example: store cart items in session (should be in database for a real application)
    $_SESSION['cart'][$product_id] = $quantity;

    // Redirect back to product page or cart page
    header("Location: product.php?id=$product_id");
    exit();
}
?>
