<?php
require_once 'connectdb.php';

$conn = connectdb();
if (isset($_GET['id'])) {
    
        $id = $_GET['id'];
        
        $sql = "delete from product where proId = $id";
        
        if (mysqli_query($conn, $sql)) {
            header("Location:product.php");
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            exit;
        }
        
        
    }

mysqli_close($conn);
?>