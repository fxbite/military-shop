<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>product detail</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aldrich">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <link rel="stylesheet" href="app/css/styles6.css">
    <link rel="icon" href="app\img\25660338_566580303688184_2665468988380454003_n.ico">
</head>

<body style="background-image: url(&quot;app/img/close-up-photography-of-a-man-holding-rifle-876344.jpg&quot;);background-position: center;background-size: cover;background-repeat: no-repeat;background-attachment: fixed;">
    <?php
      require 'require/header.php';
    ?>
    <?php
      require 'admin/connectdb.php';
      $conn = connectDB();
      
      $result = mysqli_query($conn, "SELECT * FROM product WHERE proId=".$_GET['id']);
      $product = mysqli_fetch_assoc($result); 

      $answer = mysqli_query($conn, "SELECT * FROM category WHERE cateId=".$product['proCateID']);
      $category = mysqli_fetch_assoc($answer);
      
    ?>
    <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-sm-center justify-content-md-center justify-content-lg-center justify-content-xl-center" style="margin: 120px;margin-right: 0px;margin-bottom: 0px;margin-left: 0px;margin-top: 309px;">
        <h1 style="color: rgb(255,255,255);font-family: Audiowide, cursive;">Tank Detail</h1>
    </div>
    <div style="background-color: #ffffff;height: 568px;margin-top: 448px;">
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-md-center justify-content-lg-center" style="margin: 0px;margin-top: 0px;">
            <h1 style="margin-top: 10px;font-family: Actor, sans-serif;"><?=$product['proName']?></h1>
        </div>
        <div class="d-flex d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-center justify-content-md-center justify-content-lg-center" style="margin-top: 4px;">
            <h3 style="font-family: Aldrich, sans-serif;"><?=$category['cateName']?></h3>
        </div>
        <div class="row" style="margin-top: 34px;">
            <div class="col-lg-4 d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-sm-center justify-content-md-center" style="padding-left: 55px;padding-right: 19px;">
                <div class="d-sm-flex d-md-flex d-lg-flex d-xl-flex justify-content-lg-center" style="width: 247.725px;"><img src="<?=$product['proImage']?>" style="width: 269px;margin: 10px;"></div>
            </div>
            <div class="col d-flex align-items-xl-center">
                <div>
                    <div class="d-flex align-items-xl-center"><label style="font-size: 24px;margin-right: 4px;margin-left: 4px;">- From:</label><label style="font-size: 24px;"><?=$product['proMadeIn']?></label></div>
                    <div class="d-flex align-items-xl-center"><label style="font-size: 24px;margin-right: 4px;margin-left: 4px;width: 600px;">- <?=$product['proContent']?></label></div>
                    <div class="d-flex align-items-xl-center"><label style="margin-right: 4px;margin-left: 4px;font-size: 24px;">- <?=$product['proDesc']?></label></div>
                    <div class="d-flex align-items-xl-center"><label style="margin-right: 4px;margin-left: 4px;font-size: 24px;">- Cost:</label><label style="font-size: 24px;"><?=number_format($product['proCost'],0,",",".")?></label></div>
                </div>
            </div>
        </div>
    </div>
    <div class="text-center d-flex justify-content-center justify-content-md-center justify-content-xl-center" style="color: rgb(255,255,255);font-family: Audiowide, cursive;margin-top: 200px;">
        <h1>Let's buy this tank</h1>
    </div>
    <?php
      require 'require/footer.php';
    ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
</body>

</html>