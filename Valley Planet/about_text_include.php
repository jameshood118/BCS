<?php 

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "about_text" ;

$show_all = "SELECT * FROM $table ORDER by Rank";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$rank = $row[ "Rank" ]."";
$style = $row[ "Style" ]."";
$contents = $row[ "Contents" ]."";

$pattern = "@\b(https?://)?(([0-9a-zA-Z_!~*'().&=+$%-]+:)?[0-9a-zA-Z_!~*'().&=+$%-]+\@)?(([0-9]{1,3}\.){3}[0-9]{1,3}|([0-9a-zA-Z_!~*'()-]+\.)*([0-9a-zA-Z][0-9a-zA-Z-]{0,61})?[0-9a-zA-Z]\.[a-zA-Z]{2,6})(:[0-9]{1,4})?((/[0-9a-zA-Z_!~*'().;?:\@&=+$,%#-]+)*/?)@";

$contents_string = preg_replace($pattern, '<a href="\0">\0</a>', $contents);


print ('<p class="text">');

if ($style<>"") {
print ('<span style="font-style:'.$style.';">');
print ($contents_string);
print ('</span>');
} else {
print ($contents_string);
}

print ('</p>');





}

?>