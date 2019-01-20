<HTML><BODY>
<?php include('checkpass.php');?>

<?php 

$category =$_POST ['listing_categories'];
$new_category =$_POST ['new_category'];
$poster =$_POST ['poster'];
$headline =$_POST ['headline'];
$adtext =$_POST ['adtext'];
$email =$_POST ['email'];
$show_email =$_POST ['show_email'];
$phone =$_POST ['phone'];
$address =$_POST ['address'];
$email =$_POST ['email'];
$state =$_POST ['states'];
$email =$_POST ['email'];

if ($new_category<>"") {
///insert new cataegory into categories table

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "classified_categories" ;

$show_all = "SELECT * FROM $table ORDER BY id ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$class_id = $row[ "id" ]."";
}
$new_class_id=$class_id+1;

mysql_query("INSERT into $table (id, category  ) 
VALUES ('$new_class_id', '$new_category')") or die(mysql_error());

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


while ($row = mysql_fetch_array ($result))
{
$id = $row[ "id" ]."";
}
$new_id=$id+1;



mysql_query("INSERT into $table (id, catid, poster, adtext, email, show_email, phone, address, city, state, zip, datemodified) 
VALUES ('$new_id', '$new_class_id', '$poster', '$adtext', '$email', '$show_email', '$phone', '$address', '$city', '$state', '$zip', '')") or die(mysql_error());

/* end insert new category into categories table */
} else {

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "classified" ;
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("INSERT into $table (id, catid, poster, adtext, email, show_email, phone, address, city, state, zip, datemodified) 
VALUES ('$new_id', '$category', '$poster', '$adtext', '$email', '$show_email', '$phone', '$address', '$city', '$state', '$zip', '')") or die(mysql_error());
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