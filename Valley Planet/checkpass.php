<?php 

$login=$_POST['login'];
$password=$_POST['password'];

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "users" ;

$show_all = "SELECT * FROM $table
WHERE Username = '$login' and Password = '$password' and Admin = 'yes'
ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$username  = $row["Username" ];
$pw = $row["Password"];
$firstname = $row['Full_Name'];
}

$num_rows = mysql_num_rows($result);

if ($num_rows<1) {
///redirect with bad login or pass code
print ('<form name="redirect" method="post" action="admin.php">');
print ('<input type="hidden" name="message" value="Invalid username or password. Please try again.">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('</form>');

print ('<script language="javascript" type="text/javascript">');
print ("document.forms['redirect'].submit();");
print ('</script> ');
exit;
///end redirect script
}
?>









