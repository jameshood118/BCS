<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$side=$_POST['side'];
$bow=$_POST['bow'];
$inches=$_POST['inches'];
$details=$_POST['details'];

$dbserver="10.6.166.84";
$dbuser="ayersfarm";
$dbpass="Farmersmarket1";
$db="ayersfarm";
$dbtable="wreaths";

$show_all = "SELECT * FROM $dbtable
ORDER BY Idnum";

echo "$name $address $phone $email $side $bow $inches $details";

$con=mysql_connect($dbserver, $dbuser, $dbpass);
if (!con) {
die( mysql_error());
}

mysql_select_db($db) or die( mysql_error());

$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$idnum=$row[ "Idnum" ]."";
}

$new_idnum=$idnum+1;

mysql_query("INSERT INTO $dbtable (Idnum) VALUES ('$new_idnum')") or die( mysql_error());

mysql_query("UPDATE $dbtable set Idnum='$new_idnum',
FirstName='$firstname',
LastName='$lastname',
Address='$address',
Phone_No='$phone',
Email='$email',
Side='$side',
Bow='$bow',
Inches='$inches',
Details='$details'
WHERE Idnum = '$new_idnum'") or die( mysql_error());

?>