<?php
 if(isset($_GET['our_products']) && !isset($_GET['category'])) {
 $nationID = $_GET['our_products'];
 $sql = "select * from product WHERE proNationID='$nationID'";
 $products = mysqli_query($conn, $sql);                            
  while ($row = mysqli_fetch_assoc($products)) { 
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

<?php
 if(isset($_GET['our_products']) && isset($_GET['category'])) {

 $nationID = $_GET['our_products'];
 $category = $_GET['category'];
 $sql = "select * from product WHERE proNationID='$nationID' AND proCateID='$category'";
 $products = mysqli_query($conn, $sql);                        
  while ($row = mysqli_fetch_assoc($products)) { 
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
                                  
                                  