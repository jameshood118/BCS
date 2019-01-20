<html><body>
<?php 
						
$Idnum=$_POST ["Idnum"];

$login=$_POST ["login"];
$loginpass=$_POST ["password"];
							
							
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
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


<?php 

$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "mailinglist" ;

$show_all = "SELECT * FROM $table 
WHERE Idnum = '$Idnum'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$email = $row[ "Email" ]."";


}

?>
 <FORM ENCTYPE="multipart/form-data" ACTION="alter_mailing.php" METHOD=POST>
    
  <table width="935" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="230"> <div align="right">Change Name:</div></td>
      <td width="230"> <input name="Idnum" type="hidden" id="Idnum" value="<?php echo $Idnum?>"> 
        <input name="name" type="text" id="name" value="<?php echo $name?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
	  <td><div align="right">Change Email:</div></td>
      <td> <input name="email" type="text" id="email" value="<?php echo $email?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td><div align="right">Category:</div></td>
      <td><select name="category" id="select">
<option>Contractor Advertisement</option>
<option>Labor Available</option>
<option>Hiring Labor</option>
<option>Customer Comments/Reviews</option>
<option>Service Needed</option>
</select></td></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <input type="submit" name="Submit" value="Submit Changes">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        </div></td>
    </tr>
  </table>
  </form>
  <p> </p>
  
<table width="935" border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><div align="center"> 
        <form name="form2" method="post" action="admin_mailing.php">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          <input type="submit" name="Submit2" value="Abort Changes - Back to Admin Mailing List">
        </form>
      </div></td>
  </tr>
</table>

</body></html>
