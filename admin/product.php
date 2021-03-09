
<?php
require_once 'connectdb.php';

$conn = connectdb();

$sql = "select proId, proNationId, proCateID, proImage, proName, proDesc, proContent, proMadeIn, proCost, proNumber, createDate, modifyDate from product";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="..\app\img\person-on-a-bridge-near-a-lake-747964.ico">
</head>
<body>

<h2 style="text-align:center;">PRODUCTS FORM </h2>
<p style="text-align:center; font-size:20px;">This is function of adminstrator to insert, edit, delete one products.</p>
<p><a href="adding_pro.php"> New Product</a></p>
<p><a href="index.php">Back to admin page</a></p>
<table style="width:100%" border = "1">
  <tr>
    <th>Product Id</th>
    <th>Category Id</th> 
    <th>Nation Id</th> 
    <th>Product Image</th>
    <th>Product Name</th>
    <th>Product Description</th>
    <th>Product Content</th>
    <th>Product Made In</th>
    <th>Product Cost</th>
    <th>Number</th>
    <th>Create Date</th>
    <th>Modify Date</th>
  </tr>

<?php if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr> 
            <td><?php echo $row['proId']?> </td> 
            <td><?php echo $row['proCateID']?></td>
            <td><?php echo $row['proNationId']?></td>
            <td><?php echo $row['proImage']?></td>
            <td><?php echo $row['proName']?></td>
            <td><?php echo $row['proDesc']?></td>
            <td><?php echo $row['proContent']?></td>
            <td><?php echo $row['proMadeIn']?></td>
            <td><?php echo $row['proCost']?></td>
            <td><?php echo $row['proNumber']?></td>
            <td><?php echo $row['createDate']?></td>
            <td><?php echo $row['modifyDate']?></td>
            <td><a onclick="return confirm('Are you sure you want to delete this product ?');" href="delete_pro.php?id=<?php echo $row['proId']?>">Delete</a></td>
            <td><a href="adding_pro.php?id=<?php echo $row['proId']?>">Edit</a></td>
        </tr>
    <?php }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>
</table>
</body>
</html>