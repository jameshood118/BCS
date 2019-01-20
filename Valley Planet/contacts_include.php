<?php 

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "contacts" ;

$show_all = "SELECT * FROM $table ORDER by Rank, Name";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$title = $row[ "Title" ]."";
$phone = $row[ "Phone" ]."";
$fax = $row[ "Fax" ]."";
$email = $row[ "Email" ]."";
$rank = $row[ "Rank" ]."";

if ($rank>1 and $printed<>"yes") {
print ('<p class="text"><strong>Our Current Sales Staff:</strong><br>');
$printed="yes";
}

print ('<p class="text">');
if ($title<>"") {
print ('<font style="color:#996699;">'.$title.'</font>: ');
}

if ($name<>"") {
print ($name."<br>");
}

if ($email<>"") {
print ('<a href="mailto:'.$email.'">'.$email.'</a>');
}

print ('</p>');





}

?>