<?php
   session_start();
   require 'admin/connectdb.php';
   $conn =connectDB();
   if(isset($_POST['submit']) && $_POST["username"] !='' && $_POST["password"] !='' && $_POST["repassword"] !=''){
       $username = $_POST["username"];
       $password = $_POST["password"];
       $repassword = $_POST["repassword"];
       $level = 0;
       if($password != $repassword){
          $_SESSION["notice"] = "Confirm password incorrect";
           header("location:register_user.php");
           die();
       }
       
       $sql="SELECT * FROM user WHERE username='$username'";
       $check = mysqli_query($conn,$sql);
      
       $password = md5($password);
       if(mysqli_num_rows($check) > 0){
        $_SESSION["notice"] = "Username is availabel";
        header("location:register_user.php");
        die();
       }
       $sql = "INSERT INTO user (username,password,level) VALUES ('$username','$password','$level')"; 
       mysqli_query($conn,$sql);
       $_SESSION["notice"] = "Register is successful";
       header("location:login_user.php");
       
    } else {
        $_SESSION["notice"] = "Please fill all fields in the form";
        header("location:register_user.php");
    }
?>