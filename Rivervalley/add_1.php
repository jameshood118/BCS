<div align="center"> 
  <?php 
							
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
							





print ("<br><span class=title>Enter New Item Information.</span><br>");

?>

    <table style="padding-top:30px;" width="900" border="0" cellspacing="5" cellpadding="0" align="center">
        <FORM ENCTYPE="multipart/form-data" ACTION="add_products2.php" METHOD=POST>
	  <tr> 
        
        <td><div align="right">How Many Records to Enter: </div></td>
        <td><select name="count">
		<option value="Select Amount">Select Amount</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option>
		<option value="11">11</option>
		<option value="12">12</option>
		<option value="13">13</option>
		<option value="14">14</option>
		<option value="15">15</option>
		<option value="16">16</option>
		<option value="17">17</option>
		<option value="18">18</option>
		<option value="19">19</option>
		<option value="20">20</option>
		</select></td>
      </tr>
		<tr> 
        <td width="200"><div align="right">Product Id: </div></td>
        <td width="200"> 
        <?php 
				  
$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;


$show_all = "SELECT * FROM $table ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<select name="product_id">');
print ('<option value="new">Add New Product ID</option>');

while ($row = mysql_fetch_array ($result))

{


$product_id = $row[ "Product_id" ]."";

if ($old_product_id<>$product_id) {
print ('<option value="'.$product_id.'">'.$product_id.'</option>');
}

$old_product_id=$product_id;

}?>
</select>
        </td></tr>
		<tr>
        <td width="200"><div align="right">New Product Id: </div></td>
        <td width="200"> <input name="new_product_id" type="text"></td>
        </tr><tr>
		<td width="200"><div align="right">Product Name: </div></td>
        <td width="200"><input name="product_name" type="text"></td>
      </tr>
      <tr> 
        <td> <div align="right"> Product Group: </div></td>
        <td> <input name="product_group" type="text"></td>
		</tr>
		<tr>
        <td><div align="right">Manufacturer: </div></td>
        <td><input name="manufacturer" type="text"></td>
        </tr>
		<tr>
			<td> <div align="right"> Category: </div></td>
        	<td> <input name="category" type="text"></td>
		</tr>     
		
       <tr><td colspan="2" align="right"><center>Basic Description: <BR><textarea name="description" cols="50" rows="10"></textarea></center></td>
       
	   </tr>
      <tr> 
         <td colspan="2">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          </td>
        <td width="230"></td>
		</tr>
		<tr>
		<td style="padding-top:30px;" colspan=6>
		<div align="center"> 
            <input type="submit" name="Submit" value="Submit Changes">
          </div></td>
      </tr>
		<tr>
		<td colspan=6>
		<div align="center"> 
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

</div>