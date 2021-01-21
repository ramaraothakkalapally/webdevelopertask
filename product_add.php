<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Product </title>
<script src="jquery-3.5.1.min.js"></script>
<link href="css/style.css" rel="stylesheet" type="text/css">

<script>  
// jQuery function used to show and hide the type switcher
$(document).ready(function() {
   $("select").change(function() {
       $(this).find("option:selected").each(function() {
          var optionValue = $(this).attr("value");
            if(optionValue) {
                  $(".box").not("." + optionValue).hide();
                  $("." + optionValue).show();
              } else{
                  $(".box").hide();
            }
        });
    }).change();
});
</script>

<script src="validation.js"></script> 

</head>

<body>
<form name="frmUser" method="post">
<div id="textbox">
    <h3 class="alignleft">&nbsp;Product Add</h3> <!--heading-->
    <p class="alignright">
     <input type="button" name="save" value="Save" onClick="validateform()">
</p>
</div>  
<br/>
<br/>
<br/>

<hr class="style-one">
<br/>
<tr>
    <td>&nbsp;</td>
    <td>SKU: &nbsp;&nbsp;</td> <!--stock keeping unit-->
    <td><input type="text" name="sku" id="sku"></td><br><br>
</tr>

<tr>
    <td>&nbsp;</td>
    <td>Name:&nbsp;</td>
    <td><input type="text" name="name" id="name"></td><br><br>
</tr>

<tr>
    <td>&nbsp;</td>
    <td>Price: &nbsp;</td>
    <td><input type="text" name="price" id="price"></td><br><br>
</tr>

<tr>
    <td>&nbsp;</td>
    <td>Type Switcher:</td>
    <td>
    <select name="type_switcher" id="type_switcher"> 
       <option>Choose Product Type</option>
       <option value="red">DVD-disc</option>
       <option value="green">Book</option>
       <option value="blue">Furniture</option>
    </select>
    </td>
</tr>
    
<div class="red box">
	<table>
		<th  colspan="2" height="36">DVD-Disc</th>
			<tr>
			<td >Size:</td>
			<td><input type="text" name="disc"></td>
			</tr>
	</table>
    <p><q>Please provide size in MB format</q></p>
</div>

<div class="green box">
<table >
	<th colspan="2" height="36">Book</th>
		<tr>
		<td>Weight:</td>
		<td><input type="text" name="book" id="book"></td>
		</tr>
</table>
<p><q>Please provide weight in KG format</q></p>
</div>

<div class="blue box">
<table>
	<th colspan="2" height="10">Furniture</th>
	<tr>
		<td>Height:</td>
		<td><input type="text" name="height"></td>
	</tr>
	<tr>
		<td>Width:</td>
		<td><input type="text" name="width"></td>
	</tr>
	<tr>
		<td>Length:</td>
		<td><input type="text" name="length"></td>
	</tr>
</table>
<p><q>Please provide dimentions in HxWxL format</q></p>
</div>

</form>

<footer>
<p align="right"><a href="product_list.php">View All Products</a></p>
</footer>

</body>>
</html>


