<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Hard Knock Promotions</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
<script src="swfobject.js" type="text/javascript"></script>
</head>

<body style="background:#666;">
<div id="invis"> 
  <div style="text-align:left;"> 
  <table style="width:100%;">
  <tr>
  <td width="225" valign="bottom">
  <img src="images/admin-logo.jpg" alt="Logo"/>
  </td>
  <td valign="bottom" align="left">
  <!-- Admin Menu Buttons Go Here! -->
		
<?php 
							
$login= $_POST["login"];
$loginpass= $_POST["password"];
							
							
$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
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
							?><?php 
							print ('<div align=right><strong>'.$sub_message.'</strong></div>');
							?>         <table>
            <tr> 
              <form name="form4" method="post" action="admin_menu.php">
                <input type="submit" name="Submit3" value="Back to Admin Menu">
                <input type="hidden" value="<?php echo $login?>" name="login">
                <input type="hidden" value="<?php echo $loginpass?>" name="password">
              </form>
              <form name="form4" method="post" action="admin_add_mailing.php">
                <input type="submit" name="Submit3" value="Add to List">
                <input type="hidden" value="<?php echo $login?>" name="login">
                <input type="hidden" value="<?php echo $loginpass?>" name="password">
              </form>
              <form name="form4" method="post" action="mass_mail.php">
                <input type="submit" name="Submit3" value="Mass Mailing">
                <input type="hidden" value="<?php echo $login?>" name="login">
                <input type="hidden" value="<?php echo $loginpass?>" name="password">
              </form>
            </tr>
          </table>
        </div>
        <BR>
        <?php 
	$exists=$_GET['exists'];
	if ($exists=="true") {
	print ('<font color=red size="2">Email Exists in Database.</font><br>');
	}
	?>
        <BR>
        <?php 
				  
$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "mailinglist" ;

$show_all = "SELECT * FROM $table ORDER by Idnum ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div align="center"><table width=600 border="1">');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$email = $row[ "Email" ]."";


print ('<td><TR><th>Id #</th><TH>Name</TH><TH>Email</TH></tr>');
print ('<tr><TD width="150"><strong>'.$Idnum.'</strong></TD>');
print ('<TD width="150">'.$name.'</TD><TD>'.$email.'</TD>');
print ('<TD><BR><form name="form1" id="form1" method="post" action="remove_mailing.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Remove" />');
print ('</form></td>');
print ('<td><BR><form name="form1" id="form1" method="post" action="edit_mailing.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit3" value="Edit" />');
print ('</form></td></tr>');
print ('</td>');

$number=$number+1;

if ($number>1){
print ('</tr>');
$number=0;
}


}
print ('</table></div>');
///end show menu items
?>
  <!-- END Admin -->
  </td>
  </tr>
  </table>
  </div>
  
  <div id="content" style="background:transparent;">
    <div id="body">
<!-- Content here -->




<!-- END Content -->
<!--end body--></div>
	
<!--end content--></div>
      <div class="push"></div>
<!--end invis--></div>
</body>
</html>
