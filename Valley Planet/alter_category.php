<HTML><BODY><?php include('checkpass.php');?>

<?php 
$selected_category=$_POST['selected_category'];
$category=$_POST['category'];
$description=$_POST['description'];


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

mysql_query("UPDATE $table SET 
catid='$selected_category',
category='$category', 
description='$description'
WHERE catid='$selected_category'") or die(mysql_error());
?>

<form name="return" method="post" action="admin_menu.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $password?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
</BODY></HTML>