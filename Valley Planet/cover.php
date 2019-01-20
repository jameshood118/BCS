<?php 
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


  
  $coverpage="images/issue_pages/".$issueid."/1.jpg";
  
  print ('<a href="images/issue_pdfs/'.$issueid.'.pdf" target="_blank"><img src="'.$coverpage.'" width="270" height="350" border="1"/></a><br>');
  
  print ('<a href="images/issue_pdfs/'.$issueid.'.pdf" target="_blank">Download A PDF of This Issue!</a>');
  
  
  ?>