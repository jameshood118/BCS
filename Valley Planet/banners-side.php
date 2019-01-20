<?php 

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "banner_ads" ;

$show_all = "SELECT * FROM $table
WHERE Slot='right' or Slot = 'side'
ORDER BY RAND() LIMIT 3";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$idnum  = $row["Idnum" ];
$advertiser = $row["Advertiser"];
$contact = $row['Contact'];
$phone = $row['Phone'];
$address = $row['Address'];
$banner = $row['Banner'];
$ppc = $row['PPC'];
$cpm = $row['CPM'];
$clicks = $row['Clicks'];
$impressions = $row['Impressions'];
$url = $row['Url'];
$slot = $row['Slot'];
$page = $row['Page'];

$use_url=substr($url,0,7);

if ($use_url<>"http://") {
$url="http://".$url;
}

print ('<a href="'.$url.'" target="_blank"><img src="images/banners/'.$banner.'" width="120" height="240"></a><br><br>');

}
$num_rows=mysql_num_rows($result);

if ($num_rows<1){
print ('<img src="images/adimage2.php.gif"/>');
print ('<br><br>');
print ('<a href="store.php"><img src="images/adimage3.gif"/></a>');
print ('<br><br>');
print ('<img src="images/adimage2.php.gif"/>');
}

if ($num_rows==1) {
print ('<a href="store.php"><img src="images/adimage3.gif"/></a>');
print ('<br><br>');
print ('<img src="images/adimage2.php.gif"/>');
}

if ($num_rows==2) {
print ('<a href="store.php"><img src="images/adimage3.gif"/></a>');
}

?>

            