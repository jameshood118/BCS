<?php include('checkpass.php');?>

<?php 

$banner_id=$_POST['banner_id'];

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "banner_ads" ;

$show_all = "SELECT * FROM $table
ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$show_all = "SELECT * FROM $table
WHERE Idnum='$banner_id' ORDER BY Idnum";

$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$idnum  = $row["Idnum" ];
$banner = $row["Banner"];
}

mysql_query("DELETE from $table WHERE Idnum = '$banner_id'") or die(mysql_error());

print ('Banner Inserted.');

?>

<?php 
///upload pdf file

// set up basic connection
$ftp_server="97.74.144.175";
$ftp_user_name="valleypl";
$ftp_user_pass="Toshiba1";
$conn_id = ftp_connect($ftp_server);

$target_image="images/banners/".$banner;

if (file_exists($target_image)) {
ftp_delete ($conn_id, $target_image);

}

ftp_close($conn_id);
?>

<?php 
print ('<form name="redirect" method="post" action="edit_banner_select.php">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('</form>');

print ('<script language="javascript" type="text/javascript">');
print ("document.forms['redirect'].submit();");
print ('</script> ');

?>