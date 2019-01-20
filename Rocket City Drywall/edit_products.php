<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Add New Product</title>
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
						
$login=$_POST ['login'];
$loginpass=$_POST ['password'];
$Idnum=$_POST['Idnum'];
							
							
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
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
$account_type=$row["Account_Type"]."";

}

if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?error=true";</script>';
}

$sub_message='Logged in as: '.$login.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Type: '.$account_type.'';						
							?>

							   <?php 
							print ('<div align=right><strong>'.$sub_message.'</strong></div>');
							?>


	
	<?php


print ("<br><span class=title>You are Editing ".$Idnum.".</span><br>");

?>
  <FORM ENCTYPE="multipart/form-data" ACTION="alter_products.php" METHOD=POST>
    <table width="935" border="0" cellspacing="0" cellpadding="5">
      <tr> 
        <td width="199"><div align="right">Change Product ID: </div></td>
        <td width="275"><input name="product_id" type="text" id="product_id"></td>
        <td width="115"><div align="right">Change Product Name: </div></td>
        <td> <input name="product_name" type="text" id="product_name"></td>
      </tr>
      <tr> 
        <td> <div align="right">Change Manufacturer: </div></td>
        <td> <input name="manufacturer" type="text" id="manufacturer"></td>
        <td><div align="right">Change Category:</div></td>
        <td> <input name="category" type="text" id="category"></td>
      </tr>
      <tr> 
        <td height="37"> 
          <div align="right">Change Sub-Category:</div></td>
        <td> <input name="sub_category" type="text" id="sub_category"></td>
        <td><div align="right">Change Brand: </div></td>
        <td> <input name="brand" type="text" id="brand"> </td>
      </tr>
      <tr> 
        <td><div align="right">Change Description:</div></td>
        <td><input type="text" name="descriptions"></td>
        <td><div align="right">Change Price:</div></td>
        <td><input type="text" name="price"></td>
      </tr>
      <tr> 
        <td><div align="right">Change Warranty:</div></td>
        <td><input type="text" name="warranty"></td>
        <td><div align="right">Change Variations:</div></td>
        <td><input type="text" name="variations"></td>
      </tr>
      <tr> 
        <td> <div align="right">Upload Picture: </div></td>
        <td colspan="2"> <input type="file" name="file"> <div align="right"></div></td>
        <td width="306"> <div align="right"> 
		       <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$Idnum.'" name="Idnum">');
		  ?>
            <input type="submit" name="Submit" value="Submit Changes">
          </div></td>
      </tr>
    </table>
  </form>
  <p> </p>
  <table width="935" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="465"><div align="center"><form name="form2" method="post" action="admin_products.php">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          <input type="submit" name="Submit2" value="Abort Changes - Back to Admin Products">
        </form> 
          
        </div></td>
    </tr>
  </table>
  <p> </p>
</div>
</body>
</html>
