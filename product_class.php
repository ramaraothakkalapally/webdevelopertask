<?php
class createCon
{
var $host = 'localhost';
var $user = 'root';
var $pass = '';
var $db = 'ramarao';
var $myconn;
//connection to the database
function connect()
    {
    $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    $this->myconn = $con;
    return $this->myconn;

    }
}

class Product
{
  
public 
	function add_disc($sku,$name,$price,$prod_type,$size) //add disc
    {
        $connection = new createCon();
        $connection->connect();
        // insert the products
        $sql = "INSERT INTO product (sku,name,price,prod_type,size) values ('$sku','$name','$price','$prod_type',$size)";
        $register = mysqli_query($connection->myconn,$sql);
        return $register;
    }

public 
	function add_book($sku,$name,$price,$prod_type,$weight) //add book
    {
        $connection = new createCon();
        $connection->connect();
        // insert the products
        $sql = "INSERT INTO product (sku,name,price,prod_type,weight) values ('$sku','$name','$price','$prod_type',$weight)";
        $register = mysqli_query($connection->myconn,$sql);
        return $register;
    }
    
public 
	function add_fur($sku,$name,$price,$prod_type,$height,$width,$length)//add fur
    {
        $connection = new createCon();
        $connection->connect();
        // insert the products, return should be registered
        $sql = "INSERT INTO product (sku,name,price,prod_type,height,width,length) values ('$sku','$name','$price','$prod_type',$height,$width,$length)";
        $register = mysqli_query($connection->myconn,$sql);
        return $register;
    }

    public 
	function viewAll()  
{
        $connection = new createCon();
        $connection->connect();
        //select all products
        $result = mysqli_query($connection->myconn,"SELECT * FROM product ORDER BY 'sku' ASC");
        $i = 0;
        $dyn_table = '<table border="0" cellpadding="10">';

        while ($row = mysqli_fetch_array($result)) // fetch all the data 
    {
     
        $id = $row["prod_id"];
        $sku = $row["sku"];
        $name = $row["name"];
        $price = $row["price"];
        $prod_type = $row["prod_type"];
        $height = $row["height"];
        $width = $row["width"];
        $length = $row["length"];
        $size = $row["size"];
        $weight = $row["weight"];

        if ($i % 4 == 0)  
    {
        // create a dynamic table 
        $dyn_table .= '<tr><td>'.'<div class=my_div>'.'<input type=checkbox name=users[] value='.$row["prod_id"].'>'.''.$sku.'<br><br>'.$name.'<br><br>'.$price.'.00 $'.'<br><br>';
        if ($prod_type == "disc")
        {
            $dyn_table .= 'Size: '.$size. ' MB<br><br>';  //size should be in MB
        }
        if ($prod_type == "book")
        {
            $dyn_table .= 'Weight: '.$weight. ' KG<br><br>';   //weight should be in KG
        }
        if ($prod_type == "furniture")
        {
            $dyn_table .= 'Dimension: '.$height.'x'.$width.'x'.$length; //dimention should be in HxWxL format
        }
            $dyn_table .= '</div>'.'</td>';
    
    } 
        else 
        {
            $dyn_table .= '<td>'.'<div class=my_div>'.'<input type=checkbox name=users[] value='.$row["prod_id"].'>'.''.$sku.'<br><br>'.$name.'<br><br>'.$price.'.00 $'.'<br><br>';
            if ($prod_type == "disc")
            {
                $dyn_table .= 'Size: '.$size. ' MB<br><br>'; //size should be in MB
            }
            if ($prod_type == "book")
            {
                $dyn_table .= 'Weight: '.$weight. ' KG<br><br>'; //weight should be in KG
            }
            if ($prod_type == "furniture")
            {
                $dyn_table .= 'Dimension: '.$height.'x'.$width.'x'.$length;  //dimention should be in HxWxL format
            }
                $dyn_table .= '</div>'.'</td>';

        }
        $i++;
    }
            $dyn_table .= '</tr></table>';
            echo $dyn_table;  // print the dynamic table
}
}
?>
