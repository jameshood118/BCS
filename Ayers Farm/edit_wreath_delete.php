<?php

$login=$_POST['login'];
$pass=$_POST['pass'];

if ($login!="bjorkcs" || $pass!="toshiba") {
die(); 
}
else
{

$idnum=$_POST['idnum'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$side=$_POST['side'];
$bow=$_POST['bow'];
$inches=$_POST['inches'];
$details=$_POST['details'];

$deleteidnum=$_POST['deleteidnum'];

$dbserver="10.6.166.84";
$dbuser="ayersfarm";
$dbpass="Farmersmarket1";
$db="ayersfarm";
$dbtable="wreaths";

$show_all = "SELECT * FROM $table
ORDER BY Idnum";

$con=mysql_connect($dbserver, $dbuser, $dbpass);
if (!con) {
die( mysql_error());
}

mysql_select_db($db) or die( mysql_error());

mysql_query("DELETE FROM $dbtable WHERE Idnum='$deleteidnum'") or die( mysql_error());

  print('<form action="admin_cp_wreath.php" method="post" name="changedelete" enctype="multipart/form-data">');
  print('<input type="hidden" name="login" value="'.$login.'">');
  print('<input type="hidden" name="pass" value="'.$pass.'">');
  print('<input type="submit" value="Item Deleted. Return to Wreath Order CP.">');
  print('</form>');
  print('<script language="JavaScript" type="text/javascript">document.changedelete.submit();</script>');
  
}

?>