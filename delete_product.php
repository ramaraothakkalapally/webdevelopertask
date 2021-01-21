<?php
 // delete the rows from product
$con = mysqli_connect("localhost", "root", "", "ramarao");
$rowCount = count($_POST["users"]);
for($i=0; $i<$rowCount; $i++) 
{
$sql = "DELETE FROM product WHERE prod_id='" . $_POST["users"][$i] . "'";
$result = mysqli_query($con,$sql);
}
header("Location:product_list.php");
?>
