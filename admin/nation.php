
<?php
require_once 'connectdb.php';

$conn = connectdb();

$sql = "select nationId, nationName, modifyDate from nation";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="..\app\img\person-on-a-bridge-near-a-lake-747964.ico">
</head>
<body>

<h2 style="text-align:center;">NATION FORM </h2>
<p style="text-align:center; font-size:20px;">This is function of adminstrator to insert, edit, delete one nation.</p>
<p><a href="adding_na.php"> New Nation</a></p>
<p><a href="index.php">Back to admin page</a></p>
<table style="width:100%" border = "1">
  <tr>
    <th>Nation Id</th>
    <th>Nation Name</th> 
    <th>Modify Date</th>
    <th></th>
    <th></th>
  </tr>

<?php if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr> 
            <td><?php echo $row['nationId']?> </td> 
            <td><?php echo $row['nationName']?></td>
            <td><?php echo $row['modifyDate']?></td>
            <td><a onclick="return confirm('Are you sure you want to delete this nation ?');" href="delete_na.php?id=<?php echo $row['nationId']?>">Delete</a></td>
            <td><a href="adding_na.php?id=<?php echo $row['nationId']?>">Edit</a></td>
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