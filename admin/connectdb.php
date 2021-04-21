<?php
function connectDB() {
    //Get Heroku ClearDB connection information
    $cleardb_server = "us-cdbr-east-03.cleardb.com";
    $cleardb_username = "bf9a74b7b1e568";
    $cleardb_password = "97595a6d";
    $cleardb_db = "heroku_19306ce81a4f7f1";

    // Connect to DB
    $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    return $conn;
} 
?>

