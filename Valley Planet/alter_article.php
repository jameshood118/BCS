<?php include('checkpass.php');?>

<?php 


$month=$_POST['month'];
$day=$_POST['day'];
$year=$_POST['year'];

$category=$_POST['category'];
$new_category=$_POST['new_category'];

$author=$_POST['author'];
$new_author_first=$_POST['new_author_first'];
$new_author_last=$_POST['new_author_last'];

$headline=$_POST['headline'];
$story=$_POST['story'];

$issueid=$_POST['issueid'];
$pageno=$_POST['pageno'];

$date=$year."-".$month."-".$day;

if ($new_category<>"") {
///insert new cataegory into categories table

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_categories" ;

$show_all = "SELECT * FROM $table
ORDER BY catid";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$c_catid  = $row["catid" ];
$c_category  = $row["category" ];
$c_description  = $row["description" ];
$c_catorder  = $row["catorder" ];
}
$category_id=$c_catid+1;
$category_order=$c_catorder+1;

mysql_query("ALTER $table (catid, category, catorder) VALUES ('$category_id', '$new_category', '$category_order')") or die(mysql_error());

///end insert new category into categories table
} else {
$category_id=$category;
}

if ($new_author_first<>"" or $new_author_last<>"") {
///insert new author into authors table
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_authors" ;

$show_all = "SELECT * FROM $table
ORDER BY authid";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$a_authid  = $row["authid" ];

}
$author_id=$a_authid+1;

mysql_query("ALTER $table (authid, first_name, last_name) VALUES ('$author_id', '$new_author_first', '$new_author_last')") or die(mysql_error());
///end insert new author into authors table
} else {
$author_id=$author;
}

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_articles" ;
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());


mysql_query("UPDATE $table SET id='$id', 
catid='$category_id',
authid='$author_id',
date='$date',
headline='$headline',
story='$story',
issueid='$issueid',
pageno='$pageno'
WHERE id = '$id'") or die(mysql_error());


print ('Article Altered.');
?>

<?php 
print ('<form name="redirect" method="post" action="admin_menu.php">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('</form>');

print ('<script language="javascript" type="text/javascript">');
print ("document.forms['redirect'].submit();");
print ('</script> ');

?>