<html><body>
<?php 
$Idnum=$_POST['Idnum'];


///check password in database
 						
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
///end check password in database


///update database
$table="products";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table set Clearance='Yes' WHERE Idnum='$Idnum'") or die(mysql_error());

///end update database


?>

<form name="return" method="post" action="admin_products.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script> 
</body></html>
