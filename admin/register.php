<?php
   session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat+Alternates">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="app/css/styles7.css">
    <link rel="icon" href="..\app\img\person-on-a-bridge-near-a-lake-747964.ico">
</head>

<body style="background-image: url(&quot;../app/img/classic-blue-coupe-die-cast-model-1037995.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;">
    <div class="container" style="width: 332px;margin-top: 120px;">
        <form class="text-center" style="width: 300px;" action="register_function.php" method="POST">
            <label style="font-family: Montserrat, sans-serif;font-weight: bold;font-size: 20px;margin-bottom: 20px;color: #212529;">Register admin account</label>
            <label>
               <?php
                 if(isset($_SESSION["notice"])) {
                     echo $_SESSION["notice"];
                     session_unset();
                 }
                ?>
            </label>
            <div class="text-left"><label style="font-size: 11px;font-family: Montserrat, sans-serif;font-weight: bold;color: #666666;">USERNAME *</label><input class="form-control" type="text" name="username"></div>
            <div class="text-left" style="margin: 0px;margin-top: 5px;padding: 0px;padding-top: 0px;"><label style="font-family: Montserrat, sans-serif;font-weight: bold;font-size: 11px;padding-top: 0px;color: #666666;">PASSWORD *</label><input class="form-control" type="password" name="password"></div>
            <div class="text-left" style="margin-top: 5px;"><label style="font-size: 11px;font-weight: bold;font-family: Montserrat, sans-serif;color: #666666;">CONFIRM PASSWORD *</label><input class="form-control" type="password" name="repassword"></div>
            <div style="margin-top: 15px;"><label style="font-size: 14px;font-family: Roboto, sans-serif;color: #666666;">By creating your account, you agree to our&nbsp;</label><a href="https://www.termsfeed.com/live/736b080b-73c9-43cf-8cc6-1cb407c7b854" ><label style="font-size: 14px;font-family: Roboto, sans-serif;color: #000000;">Term and Conditions</label></a></div>
            <div style="margin-top: 9px;"><button type="submit" name="submit" class="btn btn-primary" style="width: 300px;background-color: #000000;font-size: 13px;font-family: Montserrat, sans-serif;font-weight: bold;" >CREATE ACCOUNT</button></div>
    <div style="margin-top: 20px;"><label style="font-size: 14px;font-family: Roboto, sans-serif;color: #666666;">Already registered?</label><a href="index.php"><span style="font-size: 14px;font-family: Roboto, sans-serif;color: #009ace;margin-left: 4px;">Sign Into Your Account</span></a></div>
    </form>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>