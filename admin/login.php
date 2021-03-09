<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../app/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="../app/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="../app/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../app/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="../app/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="../app/css/styles.css">
    <link rel="icon" href="..\app\img\person-on-a-bridge-near-a-lake-747964.ico">
</head>

<body style="background-image: url(&quot;../app/img/classic-blue-coupe-die-cast-model-1037995.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
    <div class="container" style="width: 332px;margin-top: 120px;">
           <form style="width: 300px;" action="login_function.php" method="POST">
           <label class="d-xl-flex justify-content-xl-center" style="margin-bottom: 40px;">
             <?php
                 if(isset($_SESSION["notice"])) {
                   echo $_SESSION["notice"];
                   session_unset();                 
                 }
                ?>
            </label>
            <label class="d-flex d-md-flex d-lg-flex justify-content-center justify-content-md-center justify-content-lg-center" style="margin-bottom: 20px;font-size: 20px;font-family: Montserrat, sans-serif;font-weight: bold;"><strong>Login into your server</strong></label>
            <label class="d-xl-flex justify-content-xl-center">
                <?php
                  if(isset($_SESSION["notice_log"])) {
                    echo $_SESSION["notice_log"];
                    session_unset();
                  }
                ?>
            </label>
            <div><label style="font-size: 11px;font-family: Montserrat, sans-serif;font-weight: bold;padding: 0px;margin-bottom: 0px;padding-bottom: 5px;"><strong>USERNAME:</strong>&nbsp;</label><input class="form-control" type="text" style="padding: 16px 10px;width: 300px;" name="username"></div>
            <div><label style="font-size: 11px;font-family: Montserrat, sans-serif;font-weight: bold;"><strong>PASSWORD:&nbsp;</strong></label><input class="form-control" type="password" style="padding: 16px 10 px;width: 300px;" name="password"></div>
            <div style="width: 300px;">
              <div class="d-xl-flex justify-content-xl-center" style="margin: 15px 30px;width: 300px;margin-right: 0px;margin-left: 0px;"><button type="submit" name="submit" class="btn btn-primary d-xl-flex justify-content-xl-center" style="font-size: 13px;font-family: Montserrat, sans-serif;font-weight: bold;background-color: rgb(0,0,0);width: 300px;border-radius: 5rem;padding-right: 0px;padding-bottom: 6px;padding-left: 0px;" >LOG IN</button></div>
              <div class="d-xl-flex justify-content-xl-center" style="margin-bottom: 23px;"><a href="#"><label class="d-flex d-md-flex justify-content-center justify-content-md-center" style="font-size: 14px;font-family: Roboto, sans-serif;">I've forgotten my password</label></a></div>
              <div class="d-flex d-md-flex d-xl-flex justify-content-center justify-content-md-center justify-content-xl-center" style="margin-bottom: 25px;font-size: 14px;font-family: Roboto, sans-serif;"><label>New to server?&nbsp;</label><a href="register.php"><span style="color: #009ace;">Create an account</span></a></div>
            </div>
        </form>
       
    </div>
    <script src="../app/js/jquery.min.js"></script>
    <script src="../app/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>