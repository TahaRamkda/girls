<?php
// Database configuration
$servername = "localhost";
$username = "root"; // Default XAMPP/WAMP username
$password = ""; // Default password is empty for XAMPP/WAMP
$dbname = "shape_your_style";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
