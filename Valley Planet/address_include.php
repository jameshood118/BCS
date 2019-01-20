<?php 

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "addresses" ;

$show_all = "SELECT * FROM $table ORDER by Idnum";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$caption = $row[ "Caption" ]."";
$name = $row[ "Name" ]."";
$street_address = $row[ "Street_Address" ]."";
$city = $row[ "City" ]."";
$state = $row[ "State" ]."";
$phone = $row[ "Phone" ]."";
$fax = $row[ "Fax" ]."";
$zip = $row[ "Zip" ]."";

print ('<p class="text">');
print ('<strong>'.$caption.':</strong><br><br>');
print ($name.'<br>');
print ($street_address.'<br>');
print ($city.', '.$state.'<br>');
print ($zip."<br><br>");
print ($phone.' <font style="color:#996699;">office</font><br>');
print ($fax.' <font style="color:#996699;">fax</font>');

print ('</p>');





}

?>