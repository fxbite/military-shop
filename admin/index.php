<?php
   session_start();
   if(!isset($_SESSION["admin"])) {
     header("location:login.php"); 
   } 
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../app/css/Footer-Basic.css">
    <link rel="stylesheet" href="../app/css/styles3.css">
    <link rel="icon" href="..\app\img\person-on-a-bridge-near-a-lake-747964.ico">
</head>

<body style="background-image: url(&quot;../app/img/bird-eye-photogrpahy-of-beachline-beside-trees-1078983.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
    <nav class="navbar navbar-light navbar-expand-md" style="background-color: #ffffff;opacity: 0.72;height: 50px;">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="font-weight: bold;color: rgba(81,78,78,0.9);">Hello @<?=$_SESSION["admin"]?><a style="font-weight: bold;color: rgba(81,78,78,0.9);" href="logout_function.php">Logout</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse float-right d-md-flex float-md-right justify-content-md-end" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="category.php" style="font-weight: bold;">Category</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="nation.php" style="font-weight: bold;">Nation</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="product.php" style="font-weight: bold;">Product</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="font-weight: bold;">Order</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="text-center d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="background-position: center;background-size: cover;background-repeat: no-repeat;background-attachment: fixed;height: 550px;">
        <h1 style="color: rgb(254,254,254);margin-top: 299px;height: 408px;">WELCOME&nbsp;</h1>
    </div>
    <div class="footer-basic" style="margin-top: 46px;">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">MilitaryShop © 2020</p>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>