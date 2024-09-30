<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "edumate");
    if ($conn->connect_error) {
        die("Connnection failed: " . $conn->connect_error);
    }
?>