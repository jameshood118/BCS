<div align="center"> 
  <?php 
$count=$_POST['count'];  
$product_id=$_POST ["product_id"];
$new_product_id=$_POST["new_product_id"];
$product_name=$_POST ["product_name"];
$product_group=$_POST ["product_group"];
$manufacturer=$_POST ["manufacturer"];
$category=$_POST ["category"];
$description=$_POST ["description"];
$price=$_POST ["price"];  
							
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
							

if ($product_id=="new"){
$product2insert=$new_product_id;
} else {
$product2insert=$product_id;
}

print ('<br><span class=title>Enter New Item Information For <em>'.$product2insert.'</em></span><br>');

?>

    <table style="padding-top:30px;" width="800" border="0" cellspacing="5" cellpadding="0" align="center">
        <FORM ENCTYPE="multipart/form-data" ACTION="insert_products.php" METHOD=POST>
  
<?php  
$USsizes = array
('5N','5W','5EW','5',
'5.5N','5.5W','5.5EW','5.5',
'6N','6W','6EW','6',
'6.5N','6.5W','6.5EW','6.5',
'7N','7W','7EW','7',
'7.5N','7.5W','7.5EW','7.5',
'8N','8W','8EW','8',
'8.5N','8.5W','8.5EW','8.5',
'9N','9W','9EW','9',
'9.5N','9.5W','9.5EW','9.5',
'10N','10W','10EW','10',
'10.5N','10.5W','10.5EW','10.5',
'11N','11W','11EW','11',
'11.5N','11.5W','11.5EW','11.5',
'12N','12W','12EW','12');
?>

<?php  
$UKsizes = array
('35','36','37','38','39','40','41','42');
?>
      
<?php $i=0;
while($i<$count)
  {
 ?>


<tr>
        <td><div align="right">Style/Color: </div></td>
        <td>
		 <?php 
				  
$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;


$show_all = "SELECT * FROM $table ORDER BY Color";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<select name="Colors">');
print ('<option value="new">Add New Color</option>');

while ($row = mysql_fetch_array ($result))

{


$color = $row[ "Color" ]."";

if ($old_color<>$color) {
print ('<option value="'.$color.'">'.$color.'</option>');
}

$old_color=$color;

}?>	
		</select></td></tr>
		<tr>
		<td><div align="right">Add New Color: </div></td>
		<td><input name="new_color" type="text"></td>
		</tr>
		<tr>
        <td><div align="right">US Sizes Available: </div></td>
        <td>
    <?php foreach ($USsizes as $sizes) {
 print ('<input name="sizes'.$i.'[]" type="checkbox" value="'.$sizes.'">'.$sizes.' | ');
 $limit=$limit+1;
 if ($limit>3) {
 print ('<BR>');
 $limit=0;
 }
}?>
        </td>
      </tr>
 <tr>

         <td><div align="right">UK Sizes Available: </div></td>
        <td>
    <?php foreach ($UKsizes as $sizes) {
 print ('<input name="sizes'.$i.'[]" type="checkbox" value="'.$sizes.'">'.$sizes.' | ');
}?>
        </td>
      </tr>
      <tr> 
        <td> <div align="right">Picture: </div></td>
        <td> 
 <input type="file" name="file<?php echo $i?>"><BR />

 <?php 
  $i++;
  }?>
		

</td>
		</tr>
		<tr>
		<td>&nbsp;</td>
		<td>
		<div align="center">
		          <?php 
print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$product_id.'" name="product_id">');
print ('<input type="hidden" value="'.$new_product_id.'" name="new_product_id">');
print ('<input type="hidden" value="'.$product_name.'" name="product_name">');
print ('<input type="hidden" value="'.$product_group.'" name="product_group">');
print ('<input type="hidden" value="'.$manufacturer.'" name="manufacturer">');
print ('<input type="hidden" value="'.$category.'" name="category">');
print ('<input type="hidden" value="'.$description.'" name="description">');
print ('<input type="hidden" value="'.$price.'" name="price">');
		  ?> 
            <input type="submit" name="Submit" value="Submit Changes"></form>
          </div></td></tr>
		  <tr>
		  <td>&nbsp;</td>
      		<td>
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