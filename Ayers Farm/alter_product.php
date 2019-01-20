 

<?php 
$stock=$_POST['stock'];
$product=$_POST['product'];
$category=$_POST['category'];
$nc_name=$_POST['nc_name'];
$description=$_POST['description'];
$price=$_POST['price'];

if ($price=="Call") {
$price="";
}

$jan=$_POST['jan'];
$feb=$_POST['feb'];
$mar=$_POST['mar'];
$apr=$_POST['apr'];
$may=$_POST['may'];
$jun=$_POST['jun'];
$jul=$_POST['jul'];
$aug=$_POST['aug'];
$sep=$_POST['sep'];
$oct=$_POST['oct'];
$nov=$_POST['nov'];
$december=$_POST['december'];

if ($nc_name<>"") {
$category=$nc_name;
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

///end check password in database

///update database
$table="products";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table set Idnum='$stock',
Category='$category',
Product='$product',
Description='$description',
Price='$price',
Jan='$jan',
Feb='$feb',
Mar='$mar',
Apr='$apr',
May='$may',
Jun='$jun',
Jul='$jul',
Aug='$aug',
Sep='$sep',
Oct='$oct',
Nov='$nov',
December='$december'
WHERE Idnum='$stock'") or die(mysql_error());

///end update database

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

$source_file=$_FILES['file']['tmp_name'];
$destination_file="images/itempics/".$stock.".jpg";


	

print("<br><strong>Source File:</strong> ".$source_file."<br>");
print("<strong>Destination File:</strong> ".$destination_file."<BR>");

///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "<BR><BR><strong>Uploaded:</strong> $source_file to $ftp_server as <i>$destination_file</i><BR><BR>";
    ///end upload script

}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);

?>	

<form name="form1" method="post" action="admin_products.php">
<input type="hidden" value="<?php echo $login?>" name="login">
<input type="hidden" value="<?php echo $loginpass?>" name="loginpass">
  <input type="submit" name="Submit" value="Item Altered. Return to Admin Menu.">
</form>

<script language="javascript" type="text/javascript">
document.form1.submit();
</script> 
