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

$dbidnum=$_POST['dbidnum'];
$dbfirstname=$_POST['dbfirstname'];
$dblastname=$_POST['dblastname'];
$dbaddress=$_POST['dbaddress'];
$dbphone=$_POST['dbphone'];
$dbemail=$_POST['dbemail'];
$dbside=$_POST['dbside'];
$dbbow=$_POST['dbbow'];
$dbinches=$_POST['dbinches'];
$dbdetails=$_POST['dbdetails'];

print($dbidnum);
print('<br>');


?>

<form action="edit_wreath_save.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="idnum" value="<?php echo $dbidnum?>">
<table width="600" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="265"><table width="300" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="20%">First Name</td>
          <td width="80%"><input type="text" name="firstname" value="<?php echo $dbfirstname?>"></td>
        </tr>
        <tr>
          <td>Last Name</td>
          <td><input type="text" name="lastaddress" value="<?php echo $dblastname?>"></td>
        </tr>		
        <tr>
          <td>Address</td>
          <td><input type="text" name="address" value="<?php echo $dbaddress?>"></td>
        </tr>
        <tr>
          <td>Phone</td>
          <td><input type="text" name="phone" value="<?php echo $dbphone?>"></td>
        </tr>
        <tr>
          <td>Email</td>
          <td><input type="text" name="email" value="<?php echo $dbemail?>"></td>
        </tr>
      </table></td>
    <td width="335"><table width="300" border="0" cellspacing="2" cellpadding="2">
        <tr>
          <td width="20%">Sides</td>
          <td width="80%">
		  <?php
		  if ($dbside=="single")
		  {
		  print('<table width="100%" border="0" cellspacing="0" cellpadding="0">');
          print('<tr>');
            print('<td width="22%">Single</td>');
            print('<td width="22%"><input type="radio" name="side" value="single" checked></td>');
            print('<td width="26%">Double</td>');
            print('<td width="30%"><input type="radio" name="side" value="double"></td>');
		  print('</tr>');
        print('</table>');
		  }
		  elseif ($dbside=="double")
		  		  {
		  print('<table width="100%" border="0" cellspacing="0" cellpadding="0">');
          print('<tr>');
            print('<td width="22%">Single</td>');
            print('<td width="22%"><input type="radio" name="side" value="single"></td>');
            print('<td width="26%">Double</td>');
            print('<td width="30%"><input type="radio" name="side" value="double" checked></td>');
          print('</tr>');
        print('</table>');
		  }
		  else
		  		  {
		  print('<table width="100%" border="0" cellspacing="0" cellpadding="0">');
          print('<tr>');
            print('<td width="22%">Single</td>');
            print('<td width="22%"><input type="radio" name="side" value="single"></td>');
            print('<td width="26%">Double</td>');
            print('<td width="30%"><input type="radio" name="side" value="double"></td>');
          print('</tr>');
        print('</table>');
		  }
		  ?>
		  </td>
        </tr>
        <tr>
          <td>Bow</td>
          <td>
		  		  <?php
		  if ($dbbow=="with")
		  {
		  print('<table width="100%" border="0" cellspacing="0" cellpadding="0">');
          print('<tr>');
            print('<td width="22%">With</td>');
            print('<td width="22%"><input type="radio" name="bow" value="with" checked></td>');
            print('<td width="26%">Without</td>');
            print('<td width="30%"><input type="radio" name="bow" value="without"></td>');
          print('</tr>');
        print('</table>');
		  }
		  elseif ($dbbow=="without")
		  		  {
		  print('<table width="100%" border="0" cellspacing="0" cellpadding="0">');
          print('<tr>');
            print('<td width="22%">With</td>');
            print('<td width="22%"><input type="radio" name="bow" value="with"></td>');
            print('<td width="26%">Without</td>');
            print('<td width="30%"><input type="radio" name="bow" value="without" checked></td>');
          print('</tr>');
        print('</table>');
		  }
		  else
		  		  {
		  print('<table width="100%" border="0" cellspacing="0" cellpadding="0">');
          print('<tr>');
            print('<td width="22%">With</td>');
            print('<td width="22%"><input type="radio" name="bow" value="single"></td>');
            print('<td width="26%">Without</td>');
            print('<td width="30%"><input type="radio" name="bow" value="double"></td>');
          print('</tr>');
        print('</table>');
		  }
		  ?>
		  </td>
        </tr>
        <tr>
          <td>Inches</td>
          <td><input type="text" name="inches" value="<?php echo $dbinches?>"></td>
        </tr>
        <tr>
          <td>Details</td>
          <td><input type="text" name="details" value="<?php echo $dbdetails?>"></td>
        </tr>
      </table></td>
  </tr>
</table>
  <br>
  <table width="600" border="0" cellspacing="2" cellpadding="2">
    <tr>
      <td width=200> <div align="center"><input type="hidden" name="login" value="<?php echo $login?>"><input type="hidden" name="pass" value="<?php echo $pass?>"><input type="submit" name="edit" value="Save Changes"></form></div></td>
      <td width=200><div align="center"><form action="admin_cp_wreath.php" method="post" enctype="multipart/form-data"><input type="hidden" name="login" value="<?php echo $login?>"><input type="hidden" name="pass" value="<?php echo $pass?>"><input type="submit" name="nochange" value="Exit Without Saving"></form></div></td>
      <td width=200><div align="center"><form action="edit_wreath_delete.php" method="post" enctype="multipart/form-data"><input type="hidden" name="login" value="<?php echo $login?>"><input type="hidden" name="pass" value="<?php echo $pass?>"><input type="hidden" name="deleteidnum" value="<?php echo $dbidnum?>"><input type="submit" name="delete" value="Delete Item"></form></div></td>
    </tr>
  </table>
<?php

}

?>
</body>
</html>