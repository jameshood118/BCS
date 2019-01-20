<?php

$login=$_POST['login'];
$pass=$_POST['pass'];

if ($login!="bjorkcs" || $pass!="toshiba") {
die(); 
}
else
{

$subject=$_POST['subject'];
$body=$_POST['body'];

$sender="LATA@lata.com";

$dbserver="10.6.166.84";
$dbuser="ayersfarm";
$dbpass="Farmersmarket1";
$db="ayersfarm";
$dbtable="wreaths";

$show_all = "SELECT * FROM $dbtable";

$con=mysql_connect($dbserver, $dbuser, $dbpass);
if (!con) {
die( mysql_error());
}

mysql_select_db($db) or die( mysql_error());

$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$dbemail = $row[ "Email" ]."";
mail( $dbemail, $subject, $body, "From: $sender" );

}

  print('<form action="admin_cp_wreath.php" method="post" name="changedelete" enctype="multipart/form-data">');
  print('<input type="hidden" name="login" value="'.$login.'">');
  print('<input type="hidden" name="pass" value="'.$pass.'">');
  print('<input type="submit" value="Mail Sent. Return to Wreath Order CP.">');
  print('</form>');
  print('<script language="JavaScript" type="text/javascript">document.changedelete.submit();</script>');
  
 }
  

?>