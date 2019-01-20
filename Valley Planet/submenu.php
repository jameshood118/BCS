<p class="sublinks"><a href="businesslistings.php">Business Listings</a></p>
		<p class="sublinks"><a href="classifieds.php">Classifieds</a></p>
		<p class="sublinks"><a href="eventcalendar.php">Event Calendar</a></p>
		<p class="sublinks"><a href="musiccalendar.php">Music Calendar</a></p>
		<p class="sublinks"><a href="gasprices.php">Gas Prices</a></p>
		<p class="sublinks"><a href="horoscopes.php">Horoscopes</a></p>
		<p class="sublinks"><a href="lottery.php">Lottery</a></p>
		<p class="sublinks"><a href="movietimes.php">Movie Times</a></p>
		<p class="sublinks"><a href="weather.php">Weather</a></p>
		<p class="sublinks" style="background:transparent url('images/linkbg2.jpg') no-repeat;padding-left:7px; color: black">
<select name="menu1" onChange="MM_jumpMenu('parent',this,0)">
<option value="#" selected>Featured Articles</option>

<?php 
///select latest issue if issue number is not sent.
$myissue=$_GET['myissue'];
if ($myissue=="") {
$myissue=$_POST['myissue'];
}

if ($myissue=="") {
///$myissue void - get latest issue number
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_issues" ;

$show_all = "SELECT * FROM $table
WHERE live = '1'
ORDER BY issueid";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$issueid  = $row["issueid" ];
$date = $row["date"];
}

$myissue=$issueid;

///end get latest issue number
}

///end select latest issue if issue number is not sent.
?>

<?php 
///now that myissue is set, get all article information for selected issue.

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_articles" ;

$show_all = "SELECT * FROM $table
WHERE issueid = $myissue
ORDER BY headline";

$newsconnect = mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<option value="view_article.php?var2=1&var3=&pageno=1">Cover Page</option>');

while ($row = mysql_fetch_array ($result))
{
$id  = $row["id" ];
$catid = $row['catid'];
$headline  = $row["headline" ];
$date = $row["date"];
$authid = $row['authid'];
$pageno = $row['pageno'];

$displayname=substr($headline,0,26);

$displayname=stripslashes($displayname);


print ('<option value="view_article.php?var1='.$id.'&var2='.$catid.'&myissue='.$myissue.'&pageno='.$pageno.'" >'.$displayname.'</option>');

}

///end get all article information for selected issue.
		  mysql_close($newsconnect);
?>
                                </select>
		</p>
		<p>
		<BR><BR><BR>
		<?php 

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "banner_ads" ;

$show_all = "SELECT * FROM $table
WHERE Slot='left'
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

print ('<a href="'.$url.'" target="_blank"><img src="images/banners/'.$banner.'" width="125" height="125"></a>');

}
$num_rows=mysql_num_rows($result);

if ($num_rows<1){
print ('<br><br>');
print ('<img src="images/smallads.jpg"/>');
print ('<br><br>');
print ('<img src="images/smallads.jpg"/>');
print ('<br><br>');
print ('<img src="images/smallads.jpg"/>');
}

if ($num_rows==1) {
print ('<br><br>');
print ('<img src="images/smallads.jpg"/>');
print ('<br><br>');
print ('<img src="images/smallads.jpg"/>');
}

?>
		</p>		
