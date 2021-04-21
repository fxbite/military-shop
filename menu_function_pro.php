<div class="dropdown megamenu"><button  name="button_name" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="font-family: 'Carter One', cursive;font-size: 25px;">Nation&nbsp;</button>
    <div class="dropdown-menu animate slideIn"
     role="menu" style="background-color: #000000;width: 459px;">
        <div class="container" style="padding: 10px 15px;padding-top: 35px;padding-bottom: 35px;width: 459px;">
            <div class="row">
             <div class="col-xl-5">
             <?php 
              include_once 'admin/connectdb.php';
              $conn=connectDB();
               $sql = "SELECT * FROM nation";
               $nation = mysqli_query($conn,$sql);
               while($row = mysqli_fetch_assoc($nation)) {
                   $nationId = $row['nationId'];
               ?>
                 <div><a class="animated" href="?our_products=<?php echo $row['nationId']?>"><label style="color: rgb(255,255,255);font-family: 'Baloo Tamma', cursive;font-size: 25px;"><?php echo $row['nationName']?></label></a></div>
                <?php } ?> 
             </div>
             <div class="col">
                 <div>
                     <h3 style="color: rgb(170,90,85);font-family: Audiowide, cursive;">Types of tanks</h3>
                     <hr style="background-color: #ffffff;height: 2px;"></hr>
                 </div>
                 <?php 
              include_once 'admin/connectdb.php';
              $conn=connectDB();
              $uri = $_SERVER['REQUEST_URI'];
               $sql = "SELECT * FROM category";
               $category = mysqli_query($conn,$sql);
               while($row = mysqli_fetch_assoc($category)) {
               ?>
                 <div><a class="animated" href="<?php echo $uri?>&category=<?php echo $row['cateId']?>"><label style="color: rgb(136,255,126);font-family: 'Carter One', cursive;"><?php echo $row['cateName']?></label></a></div>
                 <?php } ?> 
             </div>
         </div>
        </div>
    </div>
</div>

