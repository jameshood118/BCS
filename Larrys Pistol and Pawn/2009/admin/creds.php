		<?php 
							
$login= $_POST["login"];
$loginpass= $_POST["password"];
							
							
$host = "localhost" ;
$user = "pistol00_bjork" ;
$pass = "toshiba" ;
$db = "pistol00_zen_357" ;
$table = "Users" ;

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
echo '<script language="JavaScript">window.location="../index.php?error=true";</script>';
}
?>
