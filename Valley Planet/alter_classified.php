<HTML><BODY><?php include('checkpass.php');?>

<?php
/// passed variables through hidden fields
$selected_classified=$_POST['selected_classified'];
$oldcatid=$_POST['catid']; 

// passed through form
$category =$_POST ['classified_categories'];
$new_category =$_POST ['new_category'];
$poster =$_POST ['poster'];
$headline =$_POST ['headline'];
$adtext =$_POST ['adtext'];
$email =$_POST ['email'];
$show_email =$_POST ['show_email'];
$phone =$_POST ['phone'];
$address =$_POST ['address'];
$city =$_POST ['city'];
$state =$_POST ['state'];
$zip =$_POST ['zip'];
$state =$_POST ['state'];



if ($new_category<>"") {


///insert new cataegory into categories table

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "classified_categories" ;

$show_all = "SELECT * FROM $table ORDER BY id";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$id = $row[ "id" ]."";
}
$new_id=$id+1;

mysql_query("INSERT into $table (catid, category  ) 
VALUES ('$new_id', '$new_category')") or die(mysql_error());

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "classified" ;

$show_all = "SELECT * FROM $table
ORDER BY id";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

mysql_query("UPDATE $table SET id='$selected_classified', 
catid='$new_id',
poster='$poster',
headline='$headline',
adtext='$adtext',
email='$email',
show_email='$show_email',
phone='$phone',
address='$address',
city='$city',
state='$state',
zip='$zip'
WHERE id='$selected_classified'") or die(mysql_error());



///end insert new category into categories table
} else {


$table="classified";

mysql_query("UPDATE $table SET id='$selected_classified', 
catid='$category',
poster='$poster',
headline='$headline',
adtext='$adtext',
email='$email',
show_email='$show_email',
phone='$phone',
address='$address',
city='$city',
state='$state',
zip='$zip'
WHERE id='$selected_classified'") or die(mysql_error());
}

echo $category;
?>

<form name="return" method="post" action="admin_menu.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $password?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
</BODY></HTML>