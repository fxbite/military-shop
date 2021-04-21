<?php
function connectDB() {
    //Get Heroku ClearDB connection information
    $cleardb_url = parse_url(getenv("mysql://bf9a74b7b1e568:97595a6d@us-cdbr-east-03.cleardb.com/heroku_19306ce81a4f7f1?reconnect=true"));
    $cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);

    // Connect to DB
    $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    return $conn;
} 
?>

