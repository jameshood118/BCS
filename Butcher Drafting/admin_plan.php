<html>
<head>
<title>Admin Plans</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>



<body>
  <?php 
							

$login=$_POST ["login"];
$loginpass=$_POST ["password"];
							
							
$host = "10.6.186.64" ;
$user = "butcherdraft" ;
$pass = "Drafting1" ;
$db = "butcherdraft" ;
$table = "users" ;

$show_all = "SELECT * FROM $table
WHERE Username = '$login'
ORDER BY User_ID";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$User_ID = $row[ "User_ID" ]."";
$username = $row[ "Username" ]."";
$password = $row[ "Password" ]."";
$email = $row[ "Email" ]."";
$account_type=$row["Account_Type"]."";

}

if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?error=true";</script>';
}

$sub_message='Logged in as: '.$login.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Type: '.$account_type.'';						
							?>

							   <?php 
							print ('<div align=right><strong>'.$sub_message.'</strong></div>');
							?>
						<BR><BR> <form name="form3" method="post" action="add_plan.php">
                            <input type="submit" name="Submit2" value="Add New Plan">
                            <input type="hidden" value="<?php echo $login?>" name="login">
                            <input type="hidden" value="<?php echo $loginpass?>" name="password">
							</form>

				       	 <form name="form4" method="post" action="admin_menu.php">
                          <input type="submit" name="Submit3" value="Back to Admin Menu">
                          <input type="hidden" value="<?php echo $login?>" name="login">
                          <input type="hidden" value="<?php echo $loginpass?>" name="password">
                        </form>
						
						<?php 
				  
$host = "10.6.186.64" ;
$user = "butcherdraft" ;
$pass = "Drafting1" ;
$db = "butcherdraft" ;
$table = "plans" ;

$show_all = "SELECT * FROM $table ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<table width=600>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$product_name = $row[ "Product_name" ]."";
$manufacturer = $row[ "Manufacturer" ]."";
$category = $row[ "Category" ]."";
$description = $row[ "Description" ]."";
$price = $row[ "Price" ]."";
$keywords = $row[ "Keywords" ]."";



print ('<td width="300"><strong>'.$product_name.'</strong><BR>');
print ('<a href="images/plans/'.$Idnum.'.jpg" target="_blank"><img src="images/plans/thumbs/'.$Idnum.'.jpg" border="0"></a><BR>');
print ('<strong>Manufacturer: </strong>'.$manufacturer.'<BR>');
print ('<strong>Category: </strong>'.$category.'<BR>');
print ('<strong>Description: </strong>'.$description.'<BR>');
print ('<strong>Price: </strong>'.$price.'<BR>');
print ('<strong>Keywords: </strong>'.$keywords.'<BR>');
print ('<form name="form1" id="form1" method="post" action="edit_plan.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Edit" />');
print ('</form>');
print ('<form name="form1" id="form1" method="post" action="delete_plan.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Delete" />');
print ('</form>');
print ('</td>');

$number=$number+1;

if ($number>3){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>



</body>
</html>