<HTML><BODY><?php include('checkpass.php');?>

<?php
/// passed variables through hidden fields
$selected_business_category=$_POST['selected_business_category'];
$category=$_POST['category'];


///insert new cataegory into categories table

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listing_categories" ;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table SET catid='$selected_business_category', 
category='$category'
WHERE catid='$selected_business_category'") or die(mysql_error());

?>

<form name="return" method="post" action="admin_menu.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $password?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
</BODY></HTML>