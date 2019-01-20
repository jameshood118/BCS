<?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "banner_ads" ;

$show_all = "SELECT * FROM $table
WHERE Slot='top'
ORDER BY RAND() LIMIT 1";

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

}

$num_rows=mysql_num_rows($result);

if ($num_rows>0) {
print ('<a href="'.$url.'" target="_blank"><img src="images/banners/'.$banner.'" width="392" height="100"></a>');
} else {
print ('<img src="images/adimage.php.gif" width="392" height="100"/>');
}

?>
