 <html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php

$login=$_POST['login'];
$pass=$_POST['pass'];

if ($login!="bjorkcs" || $pass!="toshiba") {
die(); 
}
else
{

$dbserver="10.6.166.84";
$dbuser="ayersfarm";
$dbpass="Farmersmarket1";
$db="ayersfarm";
$dbtable="wreaths";

$sort=$_POST['sort'];

if ($sort=="Idnum")
{
$show_all = "SELECT * FROM $dbtable
ORDER BY Idnum";
}
elseif ($sort=="FirstName")
{
$show_all = "SELECT * FROM $dbtable
ORDER BY FirstName";
}
elseif ($sort=="LastName")
{
$show_all = "SELECT * FROM $dbtable
ORDER BY LastName";
}
else
{
$show_all = "SELECT * FROM $dbtable
ORDER BY Idnum";
}

?>

<table width="600" border="0" cellspacing="2" cellpadding="2">
  <tr>
    <td><form action="admin_cp_wreath.php" method="post" enctye="multipart/form-data">Sort By:</td>
    <td><select name="sort"><option value="Idnum">ID</option><option value="FirstName">First Name</option><option value="LastName">Last Name</option></select></td>
    <td><input type="submit" value="Sort"><input type="hidden" name="login" value="<?php echo $login?>"><input type="hidden" name="pass" value="<?php echo $pass?>"></form></td>
	<td><form action="admin_wreath_csv.php" method="post" enctye="multipart/form-data"><input type="hidden" name="login" value="<?php echo $login?>"><input type="hidden" name="pass" value="<?php echo $pass?>"><input type="submit" value="Output to CSV"></form></td>
    <td><form action="admin_wreath_mail.php" method="post" enctye="multipart/form-data"><input type="hidden" name="login" value="<?php echo $login?>"><input type="hidden" name="pass" value="<?php echo $pass?>"><input type="submit" value="Send Bulk Mail"></form></td>
  </tr>
</table>
<br>

<?php

$con=mysql_connect($dbserver, $dbuser, $dbpass);
if (!con) {
die( mysql_error());
}

mysql_select_db($db) or die( mysql_error());

$result = mysql_query ($show_all) or die ( mysql_error ());

print('<table width="600" border="2" cellspacing="2" cellpadding="2">');
  print('<tr>');
    print('<td>Idnum</td>');
    print('<td>First Name</td>');
    print('<td>Last Name</td>');	
    print('<td>Address</td>');
    print('<td>Phone</td>');
    print('<td>Email</td>');
    print('<td>Side</td>');
    print('<td>Bow</td>');
    print('<td>Inches</td>');
    print('<td>Details</td>');
	print('<td>Edit/Delete</td>');
  print('</tr>');

while ($row = mysql_fetch_array ($result))
{
$dbidnum = $row[ "Idnum" ]."";
$dbfirstname = $row[ "FirstName" ]."";
$dblastname = $row[ "LastName" ]."";
$dbaddress = $row[ "Address" ]."";
$dbphone = $row[ "Phone_No" ]."";
$dbemail = $row[ "Email" ]."";
$dbside = $row[ "Side" ]."";
$dbbow = $row[ "Bow" ]."";
$dbinches = $row[ "Inches" ]."";
$dbdetails = $row[ "Details" ]."";


  print('<tr>');
  print('<form action="edit_wreath_order.php" method="post" enctype="multipart/form-data">');
  print('<input type="hidden" name="login" value="'.$login.'">');
  print('<input type="hidden" name="pass" value="'.$pass.'">');
    print('<td>'.$dbidnum.'<input type="hidden" name="dbidnum" value="'.$dbidnum.'"></td>');
    print('<td>'.$dbfirstname.'<input type="hidden" name="dbfirstname" value="'.$dbfirstname.'"></td>');
    print('<td>'.$dblastname.'<input type="hidden" name="dblastname" value="'.$dblastname.'"></td>');
    print('<td>'.$dbaddress.'<input type="hidden" name="dbaddress" value="'.$dbaddress.'"></td>');
    print('<td>'.$dbphone.'<input type="hidden" name="dbphone" value="'.$dbphone.'"></td>');
    print('<td>'.$dbemail.'<input type="hidden" name="dbemail" value="'.$dbemail.'"></td>');
    print('<td>'.$dbside.'<input type="hidden" name="dbside" value="'.$dbside.'"></td>');
    print('<td>'.$dbbow.'<input type="hidden" name="dbbow" value="'.$dbbow.'"></td>');
    print('<td>'.$dbinches.'<input type="hidden" name="dbinches" value="'.$dbinches.'"></td>');
    print('<td>'.$dbdetails.'<input type="hidden" name="dbdetails" value="'.$dbdetails.'"></td>');
    print('<td><input type="submit" value="Edit/Delete Order"></td>');
	print('</form>');
  print('</tr>');
 
 } 
  
print("</table>");

}

?>

</body>
</html>
