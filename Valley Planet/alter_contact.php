<?php include('checkpass.php');?>

<?php 

$selected_contact=$_POST['selected_contact'];

$name=$_POST['name'];
$rank=$_POST['rank'];

$email=$_POST['email'];
$phone=$_POST['phone'];
$fax=$_POST['fax'];
$title=$_POST['title'];

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "contacts" ;
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table set Idnum='$selected_contact',
Name='$name',
Rank='$rank',
Email='$email',
Phone='$phone',
Fax='$fax',
Title='$title'
WHERE Idnum = '$selected_contact'") or die(mysql_error());

print ('Contact Updated.');

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