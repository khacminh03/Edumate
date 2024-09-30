<?php
session_start();
// Database configuration
$servername = "127.0.0.1"; // XAMPP usually uses 127.0.0.1 instead of localhost to avoid DNS resolution issues
$username = "root";        // Default XAMPP MySQL username is "root"
$password = "Duongta6623";            // Default XAMPP MySQL password is empty
$dbname = "edumate"; // Replace with your database name
$port = 3307;              // XAMPP MySQL default port is 3306

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>