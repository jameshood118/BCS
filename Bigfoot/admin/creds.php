<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?>
		<?php 
							
$login= $_POST["login"];
$loginpass= $_POST["password"];

$hash = md5($loginpass);
							
							
$host = "10.6.186.72" ;
$user = "bigfootstk" ;
$pass = "Bigfoot1" ;
$db = "bigfootstk" ;
$table = "Users" ;

$show_all = "SELECT * FROM $table
WHERE Username = '$login' and Password= '$hash'
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

$num_rows=mysql_num_rows($result);

if ($num_rows<1 or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?error=true";</script>';
exit;
}
?>

