<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Acme">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alike">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Atomic+Age">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Baloo+Tamma">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Carter+One">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Chilanka">
    <link rel="stylesheet" href="app/css/Animated-Menu-Icon.css">
    <link rel="stylesheet" href="app/css/hover.css">
    <link rel="stylesheet" href="app/css/Mega-Menu-Dropdown-100-Editable---Ambrodu.css">
    <link rel="stylesheet" href="app/css/styles2.css">
    <link rel="icon" href="app\img\25660338_566580303688184_2665468988380454003_n.ico">
</head>

<body style="background-color: #0a0a0a;">
    <?php
      require 'require/header.php';
    ?>
    <main>
        <section>
            <div class="container">
                <div style="height: 174px;">
                    <div class="container d-inline d-lg-flex justify-content-lg-center" style="margin-top: 20px;">
                        <div class="row row-cols-1 d-sm-flex justify-content-sm-center">
                            <div class="col-lg-12 d-inline" style="font-size: 20px;">
                                <div class="d-flex d-md-flex d-lg-flex justify-content-center justify-content-md-center justify-content-lg-center" style="height: 35px;">
                                    <h1 class="text-center d-inline" style="font-family: 'Carter One', cursive;color: rgb(252,252,252);">Our Products</h1>
                                </div>
                                <div class="d-flex d-md-flex justify-content-center justify-content-md-center" style="height: 83px;">
                                    <p class="text-center d-inline" style="font-family: Chilanka, cursive;color: rgb(185,189,193);"><br>Military Shop contains good tanks from developed countries on the world.<br><br></p>
                                </div>
                                <div class="d-flex d-sm-inline d-md-inline d-lg-inline d-xl-inline justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center">
                                    <h5 class="text-center" style="font-family: Audiowide, cursive;color: rgb(131,181,231);">Let's choose a vehicle that you want</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-inline">
                    <div class="row" style="width: 960;">
                        <div class="col-md-12 col-lg-3 offset-md-0">
                            <!-- MENU LINK
                                 - Link to us.php, german.php, ussr.php, uk.php, france.php, japan.php
                                 - Link to view_type.php to show all type of tanks; All nation -->
                            <?php
                              include 'menu_function_pro.php';
                            ?>
                        </div>
                        <div class="col-md-12 col-lg-9 offset-md-0">
                            <div class="row row-cols-sm-3 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 d-xl" style="margin-bottom: 45px;margin-top: 11px;">
                            <?php 
                            if(isset($_GET['our_products']) && !isset($_GET['category'])) {
                              include 'products.php';
                                 }
                               ?>

                            <?php 
                            if(isset($_GET['our_products']) && isset($_GET['category'])) {
                              include 'products.php';
                                 }
                               ?>
                                <?php
                                 if(!isset($_GET['our_products']) && !isset($_GET['category'])) {
                                 include_once 'admin/connectdb.php';
                                 $conn=connectDB();
                                 $sql = "select * from product";

                                 $products= mysqli_query($conn, $sql);
                                 $i= 9;
                                 $count = 0;
                                  while ($count < $i && $row = mysqli_fetch_array($products)) { 
                                    $count++;

                                ?>
                                <div style="margin-top:40px;" class="col d-inline">
                                    <div class="d-inline d-lg-flex d-xl-flex justify-content-xl-center" style="margin-top: 0px;"><a id="picture" href="product_detail.php?id=<?=$row['proId']?>"><img style="width :210px; height : 158px" class="img-fluid" src="<?=$row['proImage']?>" style="background-color: #0a0a0a;"></a></div>
                                    <div class="d-flex d-sm-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-lg-center justify-content-xl-center"><label style="color: rgb(255,255,255);font-family: arial;font-size: 22px;"><?=$row['proName'] ?></label></div>
                                    <div class="d-inline d-sm-inline d-md-inline d-lg-inline d-xl-inline justify-content-lg-center" style="margin-top: 21px;color: rgb(232,207,119);height: 29px;">
                                        <h4 class="text-center" style="font-family: 'Carter One', cursive;"><?=number_format($row['proCost'],0,",",".")?>&nbsp;$</h4>
                                    </div>
                                </div>
                                <?php } ?>
                                <?php } ?>
                            </div>
                            <nav class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
      require 'require/footer.php';
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>