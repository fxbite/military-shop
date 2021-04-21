
<!-- function connectDB() {
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
}  -->

<?php
function connectDB() {
    $servername = "us-cdbr-east-03.cleardb.com";
    $username = "bf9a74b7b1e568";
    $password = "97595a6d";
    $myDB = "heroku_19306ce81a4f7f1";

    try {
    $conn = new PDO("mysql:host=$servername;dbname=$myDB", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
    } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    }
}
?>

