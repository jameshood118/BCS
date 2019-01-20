<?php include('checkpass.php');?>

<?php 

$address_id=$_POST['address_id'];

$caption=$_POST['caption'];
$name=$_POST['name'];

$street_address=$_POST['street_address'];
$city=$_POST['city'];
$state=$_POST['state'];
$phone=$_POST['phone'];
$fax=$_POST['fax'];
$zip=$_POST['zip'];

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "addresses" ;
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table set Idnum='$address_id',
Caption='$caption',
Name='$name',
Street_Address='$street_address',
City='$city',
State='$state',
Phone='$phone',
Fax='$fax',
Zip='$zip'
WHERE Idnum = '$address_id'") or die(mysql_error());

print ('Address Updated.');

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