<?php
include("product_class.php");
if(isset($_REQUEST['type_switcher'])=="red") // if set the type_switcher to red
{
    $product = new Product();
    $prod_type = "disc";
    $product = $product->add_disc($_REQUEST['sku'],$_REQUEST['name'],$_REQUEST['price'],$prod_type,$_REQUEST['disc']);
}
if(isset($_REQUEST['type_switcher'])=="green") // if set the type_switcher to green
{
    $product = new Product();
    $prod_type = "book";
    $product = $product->add_book($_REQUEST['sku'],$_REQUEST['name'],$_REQUEST['price'],$prod_type,$_REQUEST['book']);
}
if(isset($_REQUEST['type_switcher'])=="blue") // if set the type_switcher to green
{
    $product = new Product();
    $prod_type = "furniture";
    $product = $product->add_fur($_REQUEST['sku'],$_REQUEST['name'],$_REQUEST['price'],$prod_type,$_REQUEST['height'],$_REQUEST['width'],$_REQUEST['length']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View All Products</title>

<link href="css/style.css" rel="stylesheet" type="text/css">

<script language="javascript"  type="text/javascript">
function setDeleteAction() 
{
	if (confirm("Are you sure you want to delete these rows?")) 
	{
		document.frmUser.action = "delete_product.php";
		document.frmUser.submit();
	}
}
</script>

</head>

<body>
<form name="frmUser" method="post">
<div id="textbox">
    <h3 class="alignleft">Product List</h3> <!--heading-->
    <p class="alignright">
        <select name="multi">
        <option value="mass">Mass Delete Action</option>
        </select>
        <input type="button" name="delete" value="Apply" onClick="setDeleteAction();">
    </p>
</div>
<br />
<br />
<br />
<hr class="style-one">

<?php 
$view = new Product();
$view = $view->viewAll();
?>

</form>

<footer>
<p align="right"><a href="product_add.php">Add Product</a></p>
</footer>

</body>
</html>
