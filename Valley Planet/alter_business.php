<HTML><BODY><?php include('checkpass.php');?>

<?php
/// passed variables through hidden fields
$selected_business=$_POST['selected_business'];
$oldcatid=$_POST['catid']; 

// passed through form
$category =$_POST ['listing_categories'];
$new_category =$_POST ['new_category'];
$name =$_POST ['name'];
$address =$_POST ['address'];
$city =$_POST ['city'];
$state =$_POST ['state'];
$phone =$_POST ['phone'];
$email =$_POST ['email'];
$weblink =$_POST ['url'];
$description =$_POST ['description'];


$newlink = substr ($weblink, 0, 4);
if ($newlink == "http"){
$postaddress= $weblink;
}
else{$postaddress = "http://".$weblink;
}

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

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listings" ;

$show_all = "SELECT * FROM $table
ORDER BY id";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

mysql_query("UPDATE $table SET id='$selected_business', 
catid='$new_catid',
name='$name',
address='$address',
state='$state',
description='$description',
phone='$phone',
email='$email',
url='$postaddress'
WHERE id='$selected_business'") or die(mysql_error());


///end insert new category into categories table
} else {


echo $new_catid;

$table="listings";

mysql_query("UPDATE $table SET id='$selected_business', 
catid='$category',
name='$name',
address='$address',
state='$state',
description='$description',
phone='$phone',
email='$email',
url='$postaddress'
WHERE id='$selected_business'") or die(mysql_error());
}

?>

<form name="return" method="post" action="admin_menu.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $password?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
</BODY></HTML>