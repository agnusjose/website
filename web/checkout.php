<?php
session_start();

// Handle checkout form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $shipping_address = $_POST['shipping_address'];
    // Add more fields as necessary

    // Insert order details into 'orders' table
    // Assuming 'cart' is stored in session for simplicity, in real app, fetch items from database
    foreach ($_SESSION['cart'] as $product_id => $quantity) {
        $sql = "INSERT INTO orders (user_id, product_id, quantity, shipping_address) VALUES (?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user_id, $product_id, $quantity, $shipping_address]);
    }

    // Clear cart after successful checkout
    unset($_SESSION['cart']);

    // Redirect to order confirmation page
    header("Location: order_confirmation.php");
    exit();
}
?>
