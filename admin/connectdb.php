<?php
function connectDB() {
    $servername = "localhost";
    $username = "fxbite";
    $password = "17032001";
    $dbname = "shoppingonline";
  
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    return $conn;
} 
?>