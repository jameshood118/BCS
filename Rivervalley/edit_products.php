<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Edit Product Entry</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<STYLE type="text/css">
      body {
color: #000000; background-color: #ffffff; }
    </STYLE>
	
	<style type="text/css">
	
	a:link { 
	color: #333333;
	}
a:visited { 
	color: #fffccc;
	}
a:hover { 
	color: #CCCCCC;
	background-color: #333333;
	text-decoration: none;
	}
a:active { 
	color: #333333;
	}
	
	</style>
</head>



<div align="center"> 
  <?php 
  
$Idnum =$_POST["Idnum"];
							
$login=$_POST ["login"];
$loginpass=$_POST ["password"];
							
							
$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "users" ;

$show_all = "SELECT * FROM $table
WHERE Username = '$login'
ORDER BY User_ID";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$User_ID = $row[ "User_ID" ]."";
$username = $row[ "Username" ]."";
$password = $row[ "Password" ]."";
$email = $row[ "Email" ]."";
$account_type=$row["Account_Type"]."";

}
if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?error=true";</script>';
}

$sub_message='Logged in as: '.$login.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Type: '.$account_type.'';						
							


				  
$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;


$show_all = "SELECT * FROM $table WHERE Idnum='$Idnum'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$product_id = $row[ "Product_id" ]."";
$product_name = $row[ "Product_name" ]."";
$product_group = $row[ "Product_group" ]."";
$manufacturer = $row[ "Manufacturer" ]."";
$category = $row[ "Category" ]."";
$color = $row[ "Color" ]."";
$width = $row[ "Width" ]."";
$size = $row[ "Size" ]."";
$style = $row[ "Style" ]."";
$price = $row[ "Price" ]."";
$clearance = $row[ "Clearance" ]."";
$description = $row[ "Description" ]."";

}

print ("<br><span class=title>Editing Item Number ".$Idnum." - ".$product_id." - ".$product_name.".</span><br>");

?>
  <FORM ENCTYPE="multipart/form-data" ACTION="alter_products.php" METHOD=POST>
    <table width="935" border="0" cellspacing="0" cellpadding="5">
      <tr> 
        <td width="230"><div align="right">Change Product Id: </div></td>
        <td width="230"> <input name="product_id" type="text" id="product_id" value="<?php echo $product_id ?>"></td>
        <td><div align="right">Change Product Name: </div></td>
        <td><input name="product_name" type="text" id="product_name" value="<?php echo $product_name ?>"></td>
      </tr>
      <tr> 
        <td> <div align="right"> Change Product Group: </div></td>
        <td> <input name="product_group" type="text" id="product_group" value="<?php echo $product_group ?>"></td>
        <td><div align="right">Change Manufacturer: </div></td>
        <td><input name="manufacturer" type="text" id="manufacturer" value="<?php echo $manufacturer ?>"></td>
      </tr>
      <tr> 
        <td> <div align="right">Change Category: </div></td>
        <td> <input name="category" type="text" id="category"  value="<?php echo $category ?>"></td>
        <td><div align="right">Change Color: </div></td>
        <td><input name="color" type="text" id="color" value="<?php echo $color ?>"></td>
      </tr>
      <tr>
        <td><div align="right">Change Width:</div></td>
        <td><input name="width" type="text" id="width" value="<?php echo $width ?>"></td>
        <td><div align="right">Change Size: </div></td>
        <td><input name="size" type="text" id="size" value="<?php echo $size ?>"></td>
      </tr>
      <tr> 
        <td><div align="right">Change Style: </div></td>
        <td><input name="style" type="text" id="style" value="<?php echo $style ?>"></td>
        <td><div align="right">Change Price: </div></td>
        <td><input name="price" type="text" id="price" value="<?php echo $price ?>"></td>
      </tr>
	    <tr> 
        <td colspan="4" align="center">Description: <BR><textarea name="description" cols="50" rows="10"><?php echo $description;?></textarea></td>
       </tr>
	  
	    
	  
      <tr> 
        <td> <div align="right">Upload Picture: </div></td>
        <td colspan="2"> <input type="file" name="file"> 
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$Idnum.'" name="Idnum">');
		  ?>
          <div align="right"></div></td>
        <td width="230"> <div align="right"> 
            <input type="submit" name="Submit" value="Submit Changes">
          </div></td>
      </tr>
    </table>
  </form>
  <p> </p>
  <table width="935" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="465"><div align="center"> 
          <form name="form2" method="post" action="admin_products.php">
            <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
            <input type="submit" name="Submit2" value="Abort Entry - Back to Products Admin">
          </form>
        </div></td>
    </tr>
  </table>
  <p> </p>
</div>
</body>
</html>
