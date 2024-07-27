<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Simulated check (replace with actual database query)
    // For example, connecting to MySQL:
    // $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    
    // Example with hardcoded values (replace with actual logic)
    $valid_username = 'user';
    $valid_password = 'password';
    
    // Check if username and password are correct
    if ($username === $valid_username && $password === $valid_password) {
        // Start session and store username
        session_start();
        $_SESSION['username'] = $username;
        header("Location: welcome.php"); // Redirect to welcome page
    } else {
        echo "Invalid username or password";
    }
}
?>