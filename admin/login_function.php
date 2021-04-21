<?php
   session_start();
   require 'connectdb.php';
   $conn=connectDB();
   
    if(isset($_POST["submit"]) && $_POST["username"] !='' && $_POST["password"] !='') {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $password = md5($password);
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password' AND level='1'";
        $user = mysqli_query($conn, $sql);
        if(mysqli_num_rows($user) > 0) {
           $_SESSION["admin"]= $username;
           header("location:index.php");
        } else {
           $_SESSION["notice_log"] = "Incorrect username or password";
           header("location:login.php");
          }   
    } else {
       $_SESSION["notice_log"] = "Please fill all fields in the form";
       header("location:login.php");
    } 
  
?>