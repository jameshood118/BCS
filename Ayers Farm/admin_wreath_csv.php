<?php

phpinfo();

$login=$_POST['login'];
$pass=$_POST['pass'];

if ($login!="bjorkcs" || $pass!="toshiba") {
die(); 
}
else
{

$dbserver="10.6.166.84";
$dbuser="ayersfarm";
$dbpass="Farmersmarket1";
$db="ayersfarm";
$dbtable="wreaths";

$con=mysql_connect($dbserver, $dbuser, $dbpass);
if (!con) {
die( mysql_error());
}

mysql_select_db($db) or die( mysql_error());

$show_all = "SELECT * from $dbtable";
$result = mysql_query($show_all);
if (!$result) die( mysql_error());

while ($row = mysql_fetch_array ($result))
{
$dbidnum = $row[ "Idnum" ]."";
$dbfirstname = $row[ "FirstName" ]."";
$dblastname = $row[ "LastName" ]."";
$dbaddress = $row[ "Address" ]."";
$dbphone = $row[ "Phone_No" ]."";
$dbemail = $row[ "Email" ]."";
$dbside = $row[ "Side" ]."";
$dbbow = $row[ "Bow" ]."";
$dbinches = $row[ "Inches" ]."";
$dbdetails = $row[ "Details" ]."";

$data = array ( array (
	$dbidnum, $dbfirstname, $dblastname, $dbaddress, $dbphone, $dbemail, $dbside, $dbbow, $dbinches, $dbdetails
	)
);

if ($fp = @fopen('wreath.csv', 'w')) {
    foreach ($data as $line) {
      fputcsv($fp, $line);
}
    fclose($fp);
    echo 'CSV written.';
  } else {
    echo 'Cannot open file.';
  }

//$data = array ( array (
//	"Idnum" => "\"".$dbidnum."\"", "First Name" => "\"".$dbfirstname."\"",
//	"Last Name" => "\"".$dblastname."\"", "Address" => "\"".$dbaddress."\"", "Phone" => "\"".$dbphone."\"", "Email" => "\"".$dbemail."\"", 
//	"Side" => "\"".$dbside."\"", "Bow" => "\"".$dbbow."\"", "Inches" => "\"".$dbinches."\"", 
//	"Details" => "\"".$dbdetails."\""
//	)
//);

 // print('<form action="admin_cp_wreath.php" method="post" name="csvoutput" enctype="multipart/form-data">');
 // print('<input type="hidden" name="login" value="'.$login.'">');
 // print('<input type="hidden" name="pass" value="'.$pass.'">');
 //   print('<input type="submit" value="CSV File Created. Return to Wreath CP.">');
 //  print('</form>');
 //  print('<script language="JavaScript" type="text/javascript">document.csvoutput.submit();</script>'); 

echo $data;

}

}

?>