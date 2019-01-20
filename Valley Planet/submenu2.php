		<p class="sublinks2" style="background:#fea200; padding-left:7px; width=1024; height=25px; padding-bottom:10px; color: black; margin-bottom:0px; margin-left:0px">
<select name="menu1" onChange="MM_jumpMenu('parent',this,0)">
<option value="#" selected>Featured Articles</option>

<?php 
///select latest issue if issue number is not sent.
$myissue=$_GET['myissue'];
if ($myissue=="") {
$myissue=$_POST['myissue'];
}


///$myissue - get number of pages of selected issue number or the latest issue if issue is void.
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_issues" ;

if ($myissue==""){
$show_all = "SELECT * FROM $table
WHERE live = '1'
ORDER BY issueid";
} else {
$show_all = "SELECT * FROM $table
WHERE issueid='$myissue' and live = '1'
ORDER BY issueid";
}



mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$issueid  = $row["issueid" ];
$date = $row["date"];
$pages=$row['pages'];
}

$myissue=$issueid;

///end get latest issue number


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

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
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
?>
                                </select>
								
								<?php 
		  $pageno=$_GET['pageno'];
		  
		  if ($pageno<1) {
		  $pageno=1;
		  }
		  
		  
		  
		  ?>
<?php 
$pagecounter=1;
while ($pagecounter<=$pages) {
print ('<a href="view_article.php?myissue='.$myissue.'&pageno='.$pagecounter.'"> '.$pagecounter.' </a>');
$pagecounter=$pagecounter+1;
}
?>
		</p>		
