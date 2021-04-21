<?php
require_once 'connectdb.php';

$conn = connectdb();
?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<?php

$id = "";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
} 
$proId= "";
$proCateID="";
$proNationId="";
$proImage="";
$proName="";
$proDesc="";
$proContent="";
$proMadeIn="";
$proCost="";
$proNumber="";
$isShow = 0;
$isUpdated = 0;
if ($id !="") {
    $sql = "select proId, proCateID, proNationId, proImage, proName, proDesc, proContent, proMadeIn, proCost, proNumber, isShow from product where proId = $id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $proId = $row['proId'];
        $proCateID = $row['proCateID'];
        $proNationId = $row['proNationId'];
        $proImage = $row['proImage'];
        $proName = $row['proName'];
        $proDesc = $row['proDesc'];
        $proContent = $row['proContent'];
        $proMadeIn = $row['proMadeIn'];
        $proCost = $row['proCost'];
        $proNumber = $row['proNumber'];
        $isShow = $row['isShow'];
    }    
    $isUpdated = 1;
}
?>
<h2 style="text-align:center;">PRODUCT FORM</h2>
<p style="text-align:center; font-size:20px;">This is function of adminstrator to insert, edit, delete one product.</p>
<p><a href="product.php">Back to Product page</a></p>
<div class="container">
  <form action="insert_pro.php" enctype="multipart/form-data" method="POST">
  <input type="hidden" id="controlUpdate" name="controlUpdate" value="<?php echo $isUpdated?>" />
  <div class="row">
    <div class="col-25">
      <label for="proId">Product Id</label>
    </div>
    <div class="col-75">
      <input type="text" id="proId" name="proId" value="<?php echo $proId?>" <?php if ($isUpdated == 1) echo "readonly";?> placeholder="product id..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="proCateID">Category Id</label>
    </div>
    <div class="col-75">
    <select id="cateId" name="cateId">
      <?php
        $querryCate="select cateId, cateName from category";
        $result=mysqli_query($conn,$querryCate);
        while($row=mysqli_fetch_assoc($result)){
          $cateId=$row['cateId'];
          $cateName= $row['cateName'];
          echo "<option value='$cateId'>$cateName</option>";
        } 
      ?>
    </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="proNationId">Nation Id</label>
    </div>
    <div class="col-75">
    <select id="nationId" name="nationId">
      <?php
        $querryCate="select nationId, nationName from nation";
        $result=mysqli_query($conn,$querryCate);
        while($row=mysqli_fetch_assoc($result)){
          $nationId=$row['nationId'];
          $nationName= $row['nationName'];
          echo "<option value='$nationId'>$nationName</option>";
        } 
      ?>
    </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="proImage">Product Image</label>
    </div>
    <div class="col-75">
      <img >
      <input type="file" id="proImage" name="proImage" value="<?php echo $proImage?>"> 
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="proName">Product Name</label>
    </div>
    <div class="col-75">
      <input type="text" id="proName" name="proName" value="<?php echo $proName?>" placeholder="product name..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="proDesc">Product Description</label>
    </div>
    <div class="col-75" >
      <textarea id="proDesc" name="proDesc"  placeholder="product description.."><?php echo $proDesc?></textarea>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="proContent">Product Content</label>
    </div>
    <div class="col-75">
      <input type="text" id="proContent" name="proContent" value="<?php echo $proContent?>" placeholder="product content..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="proMadeIn">Product Made In</label>
    </div>
    <div class="col-75">
      <input type="text" id="proMadeIn" name="proMadeIn" value="<?php echo $proMadeIn?>" placeholder="product made in..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="procost">Product Cost</label>
    </div>
    <div class="col-75"> 
      <input type="text" id="proCost" name="proCost" value="<?php echo $proCost?>" placeholder="product cost..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="proNumber">Number</label>
    </div>
    <div class="col-75"> 
      <input type="text" id="proNumber" name="proNumber" value="<?php echo $proNumber?>" placeholder="number..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Is showed?</label>
    </div>
    <div class="col-75">
      <input type="checkbox" id="isshowed" name="isshowed" <?php if ($isShow == 1) echo "checked";?> />
    </div>
  </div>
  <div class="row">
    <input name="submit" type="submit" value="Submit" />
    
  </div>
  </form>
</div>

</body>
</html>
<?php
    mysqli_close($conn);
?>
