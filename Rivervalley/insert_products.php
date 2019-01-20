<?php 

$product_id=$_POST ["product_id"];
$new_product_id=$_POST["new_product_id"];
$product_name=$_POST ["product_name"];
$product_group=$_POST ["product_group"];
$manufacturer=$_POST ["manufacturer"];
$category=$_POST ["category"];
$description=$_POST ["description"];
$price=$_POST ["price"];

// Colors
$camel=$_POST ["camel"];
$black=$_POST ["black"];
$white=$_POST ["white"];

// Widths
$width=$_POST ["width"];
// Sizes
$sizes=$_POST["sizes"];


?>
<PRE>
<?php 
var_dump($_POST)?>
</PRE>

<?php


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

?>



