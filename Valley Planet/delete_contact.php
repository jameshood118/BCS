<?php include('checkpass.php');?>

<?php 

$selected_contact=$_POST['selected_contact'];

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "contacts" ;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$show_all = "SELECT * FROM $table
WHERE Idnum='$selected_contact' ORDER BY Idnum";

$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$idnum  = $row["Idnum" ];
$banner = $row["Banner"];
}

mysql_query("DELETE from $table WHERE Idnum = '$selected_contact'") or die(mysql_error());

print ('Contact Deleted.');

?>

<?php 
print ('<form name="redirect" method="post" action="admin_menu.php">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('</form>');

print ('<script language="javascript" type="text/javascript">');
print ("document.forms['redirect'].submit();");
print ('</script> ');

?>