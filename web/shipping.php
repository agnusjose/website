<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $zip = $_POST['zip'];
    $phone = $_POST['phone'];

    // Validate data (for example, ensure fields are not empty)

    // Process the data (you might save to database or session for checkout process)

    // Redirect to next step (e.g., payment page)
    header("Location: payment.php");
    exit();
}
?>
