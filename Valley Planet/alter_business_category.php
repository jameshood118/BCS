<HTML><BODY><?php include('checkpass.php');?>

<?php
/// passed variables through hidden fields
$selected_business_category=$_POST['selected_business_category'];

// passed through form
$new_category =$_POST ['new_category'];
$category=$_POST ['category'];


if ($new_category<>"") {


///insert new cataegory into categories table

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listing_categories" ;

$show_all = "SELECT * FROM $table ORDER BY catid";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$catid = $row[ "catid" ]."";
}
$new_catid=$catid+1;

mysql_query("INSERT into $table (catid, category  ) 
VALUES ('$new_catid', '$new_category')") or die(mysql_error());

///end insert new category into categories table
} else {


$table = "listing_categories" ;

mysql_query("UPDATE $table SET catid='$selected_business_category', 
category='$category'
WHERE catid='$seletected_business_category'") or die(mysql_error());

}
echo $selected_business_category;
echo $category;
?>
<!--
<form name="return" method="post" action="admin_menu.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $password?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script> -->
</BODY></HTML>