<?php
require_once 'connectdb.php';

$conn = connectDB();
if (isset($_POST['fid']) && isset($_POST['fname'])) {
        // get data from FORM
        $controlUpdate = $_POST['controlUpdate'];
        $id = $_POST['fid'];
        $fname = $_POST['fname'];
        $isshowed = 0;
        if (isset($_POST['isshowed'])) {
            $isshowed = 1;
        }

        $new_date=date('Y-m-d'); 
        if ($controlUpdate == 1) {
            $sql = "UPDATE nation SET nationName='$fname', isShow=$isshowed, modifyDate='$new_date' WHERE nationId=$id";
        } else {
            $sql = "insert into nation(nationId, nationName, isShow, createDate, modifyDate) values($id, '$fname', $isshowed, '$new_date', '$new_date')";
        }
        
        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
            header("Location:nation.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        
    }

mysqli_close($conn);


?>