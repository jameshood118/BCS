<?php
$dir = "images/issue_pdfs/";

// Open a known directory, and proceed to read its contents
if (is_dir($dir)) {
    if ($dh = opendir($dir)) {
        while (($file = readdir($dh)) !== false) {
            echo "filename: $file : filetype: " . filetype($dir . $file) . "<BR>";
        }
        closedir($dh);
    }
}
?>

                        <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_issues" ;

$show_all = "SELECT * FROM $table
ORDER BY issueid DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$issueid  = $row["issueid" ];
$date = $row['date'];
$pages  = $row["pages" ];
$live = $row["live"];
$cover = $row['cover'];

$displayname='Issue #: '.$issueid.' - (Published: '.$date.')';

print (''.$issueid.' '.$displayname.'<BR>');

}

?>