<?php
require_once 'connectdb.php';


if (isset($_POST['submit'])) {
    $conn = connectDB();
        // get data from FORM
        $controlUpdate = $_POST['controlUpdate'];
        $id = $_POST['proId'];
        $proCateID = $_POST['cateId'];
        $proNationId = $_POST['nationId'];
        $proImage = $_FILES["proImage"]["name"];
        $proName = mysqli_real_escape_string($conn, $_POST['proName']);
        $proDesc = mysqli_real_escape_string($conn, $_POST['proDesc']);
        $proContent = mysqli_real_escape_string($conn, $_POST['proContent']);
        $proMadeIn = mysqli_real_escape_string($conn, $_POST['proMadeIn']);
        $proCost = $_POST['proCost'];
        $proNumber = $_POST['proNumber'];
        $isshowed = 0;
        if (isset($_POST['isshowed'])) {
            $isshowed = 1;
          
        }

        //Get Image
        if(isset($_FILES))
        {
            $target_dir = "app/img/";
            $target_file = $target_dir.basename($_FILES["proImage"]["name"]);
            
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
              $check = getimagesize($_FILES["proImage"]["tmp_name"]);
              if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
              } else {
                echo "File is not an image.";
                $uploadOk = 0;
              }
            }
        }

        //Update product tabletable
        $new_date=date('Y-m-d'); 
        if ($controlUpdate == 1) {
            $sql = "UPDATE product SET  proCateID=$proCateID, proNationId=$proNationId, proName='$proName',proDesc='$proDesc', proDesc='$proDesc', proContent='$proContent', proMadeIn='$proMadeIn', proCost= $proCost, proNumber= $proNumber, isShow= $isshowed, modifyDate='$new_date' WHERE proId=$id"; 
        } else {
            
            $sql = "insert into product (proId, proCateID, proNationId, proImage, proName, proDesc, proContent, proMadeIn, proCost, proNumber, isShow, createDate, modifyDate) 
            values($id, $proCateID, $proNationId, '$target_file', '$proName', '$proDesc', '$proContent', '$proMadeIn', $proCost, $proNumber, $isshowed, '$new_date', '$new_date')";
        }
        
        if (mysqli_query($conn, $sql)) {
            //echo "New record created successfully";
            header("Location:product.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
        
        
}




?>