<?php
session_start(); 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>shopping page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="app/css/Footer-Basic2.css">
    <link rel="stylesheet" href="app/css/Footer-Dark.css">
    <link rel="stylesheet" href="app/css/styles4.css">
</head>

<body>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="background-color: #474747;">
        <div style="margin-left: 18px;width: 142;"><a class="navbar-brand text-center" href="index.php" style="font-family: Audiowide, cursive;color: rgb(255,255,255);">MilitaryShop</a></div>
       <?php 
       If(!isset($_SESSION['user'])) {
       ?> 
        <div class="d-flex float-left d-sm-flex d-md-flex d-xl-flex align-items-center justify-content-sm-end justify-content-xl-end align-items-xl-center"
            style="margin-right: 9px;margin-left: 12px;width: 2000px;"><a href="login_user.php" style="color: rgb(255,255,255);">Log in</a><a href="#" style="margin-right: 4px;margin-left: 4px;height: 29px;color: rgb(255,255,255);">/</a><a href="register_user.php" style="color: rgb(255,255,255);">Create account</a></div>
       <?php } else { ?>
        <div class="d-flex float-left d-sm-flex d-md-flex d-xl-flex align-items-center justify-content-sm-end justify-content-xl-end align-items-xl-center"
            style="margin-right: 9px;margin-left: 12px;width: 2000px;"><a href="./logout_function.php" style="margin-right:10px;color: rgb(255,255,255);">Logout</a><a  style="color: rgb(255,255,255);">@<?php echo $_SESSION['user']; ?></a></div>
       <?php } ?>
    </div>
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #9a9a9a;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse d-flex d-md-flex d-lg-flex d-xl-flex justify-content-lg-start justify-content-xl-start"
                id="navcol-1">
                <ul class="nav navbar-nav justify-content-lg-end">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="our_products.php">Products</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item" role="presentation" style="margin-right: 22px;"><a class="nav-link" href="#">Feedback</a></li>
                </ul>
            </div>
            <div><a href="#" style="color: rgb(0,0,0,0.5);"><i class="fa fa-search" style="font-size: 20px;"></i></a><a href="#" style="margin-left: 10px;color: rgb(0,0,0,0.5);"><i class="fa fa-shopping-cart" style="font-size: 20px;"></i></a></div>
        </div>
    </nav>
</body>

</html>