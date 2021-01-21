
function validateform()
{
var sku=document.frmUser.sku.value;
var name=document.frmUser.name.value;
var price=document.frmUser.price.value;
var type_switcher=document.frmUser.type_switcher.value;

if (sku=="")
{
    alert("SKU can't be blank");  // sku should be filled with some data if not focus
    document.getElementById('sku').focus(); 
    return false;
}
if (name=="") 
{
    alert("Name can't be blank");  // name shouldn't be blank
    document.getElementById('name').focus();
    return false;
}
if (!isNaN(name)) 
{
    alert("Name must be in text");
    document.getElementById('name').focus();
    return false;
}
if (price=="") 
{
    alert("Price  can't be blank");
    document.getElementById('price').focus(); 
    return false;
}
if (isNaN(price)) 
{  
    alert("Price must be in number");
    document.getElementById('price').focus();  // focus on price
    return false;
}
if (type_switcher=="Choose Product Type")
{
    alert("Please select atleast one option");
    document.getElementById('type_switcher').focus();
    return false;
}
if (confirm("Are you sure you want to save this records?")) // confirm to save records
{
    document.frmUser.action = "product_list.php";
    document.frmUser.submit();
   }
   return true;
}

