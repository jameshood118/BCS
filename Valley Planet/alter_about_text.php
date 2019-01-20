<?php include('checkpass.php');?>

<?php 

$sent_id=$_POST['idnum'];
$new_contents=$_POST['textarea'];
$new_style=$_POST['style'];

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "about_text" ;
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table set Idnum='$sent_id',
Rank='$sent_id',
Style='$new_style',
Contents='$new_contents'
WHERE Idnum = '$sent_id'") or die(mysql_error());

print ('Text Updated.');

?>

<?php 
print ('<form name="redirect" method="post" action="edit_about_us.php">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('</form>');

print ('<script language="javascript" type="text/javascript">');
print ("document.forms['redirect'].submit();");
print ('</script> ');

?>