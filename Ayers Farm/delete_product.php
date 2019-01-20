<?php 
$stock=$_POST['stock'];

if ($details=="Call or Email For Price.") {
$details="";
}

$login=$_POST['login'];
$loginpass=$_POST['loginpass'];

$dimensions=$width.",".$height.",".$depth;

///check password in database
$host = "10.6.166.84" ;
$user = "ayersfarm" ;
$pass = "Farmersmarket1" ;
$db = "ayersfarm" ;
$table = "passwords" ;

$show_all = "SELECT * FROM $table
WHERE Username = '$login'
ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$user_stock = $row[ "Idnum" ]."";
$username = $row[ "Username" ]."";
$password = $row[ "Password" ]."";
$email = $row[ "Email" ]."";

}

if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?var1='.$username.'&var2='.$password.'";</script>';
}

$sub_message='Logged in as: '.$login.'';
	print ("<span class=subheading>".$submessage."</span>");
///end check password in database

///update database
$table="products";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE from $table WHERE Idnum='$stock'") or die(mysql_error());

///end update database
print ("Item # ".$stock." Being Deleted.");


///upload image
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="ayersfarm";
$ftp_user_pass="Farmersmarket1";
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// check connection
if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user <i>$ftp_user_name</i>";
        exit;
    } else {
        echo "<BR><strong>Connected:</strong> $ftp_server, for user <i>$ftp_user_name</i><BR>";
    }

// upload the file



$destination_file="images/itempics/".$stock.".jpg";


	

print("<strong>Destination File:</strong> ".$destination_file."<BR>");

///upload script
$upload = ftp_delete($conn_id, $destination_file);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "<BR><BR><strong>Deleted:</strong> <i>$destination_file</i> on $ftp_server<BR><BR>";
    ///end upload script

}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);

?>

<form name="form1" method="post" action="admin_products.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="loginpass" value="<?php echo $loginpass?>">
  <input type="submit" name="Submit" value="Item Altered. Return to Admin Menu.">
</form>

<script language="javascript" type="text/javascript">
document.form1.submit();
</script> 

