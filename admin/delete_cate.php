<?php
require_once 'connectdb.php';

$conn = connectdb();
if (isset($_GET['id'])) {
    
        $id = $_GET['id'];
        
        $sql = "delete from category where cateId = $id";
        
        if (mysqli_query($conn, $sql)) {
            header("Location:category.php");
            
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            exit;
        }
        
        
    }

mysqli_close($conn);
?>