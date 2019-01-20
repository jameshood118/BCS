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
			  
			        <form name="form4" method="post" action="add_roster.php">
                <input type="submit" name="Submit3" value="Add To Roster">
                <input type="hidden" value="<?php echo $login?>" name="login">
                <input type="hidden" value="<?php echo $loginpass?>" name="password">
              </form>
                      </tr>
          </table>
        </div>
        <BR>

        <BR>
        <?php 
				  
$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "roster" ;

$show_all = "SELECT * FROM $table WHERE Girl='No'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div align="center"><table width=600 border="1">Guys');

while ($row = mysql_fetch_array ($result))

{

$rosterid = $row[ "Rosterid" ]."";
$name = $row[ "Name" ]."";
$height = $row[ "Height" ]."";
$weight = $row[ "Weight" ]."";
$style = $row[ "Style" ]."";
$record = $row[ "Record" ]."";
$measurement = $row[ "Measurement" ]."";
$girl = $row[ "Girl" ]."";


print ('<td><TR><th>Roster ID #</th><TH>Name</TH><TH>Height</TH><TH>Weight</TH><TH>Style</TH><TH>Record</TH><TH>Measurement</TH></tr>');
print ('<tr><TD width="150"><strong>'.$rosterid.'</strong></TD>');
print ('<TD width="150">');
if(file_exists('images/roster/thumbs/'.$rosterid.'.jpg' )){
print ('<img src="images/roster/thumbs/'.$rosterid.'.jpg" width=150/>');
}else{
echo "";}
print ('<BR>'.$name.'</TD><TD>'.$height.'</TD><TD>'.$weight.'</TD><TD>'.$style.'</TD><TD>'.$record.'</TD><TD>'.$measurement.'</TD>');
print ('<TD><BR><form name="form1" id="form1" method="post" action="delete_roster.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$rosterid.' name="rosterid">');
print ('<div class="submit"><input type="submit" name="Submit2" value="Remove" /></div>');
print ('</form></td>');
print ('<td><BR><form name="form1" id="form1" method="post" action="edit_roster.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$rosterid.' name="rosterid">');
print ('<div class="submit"><input type="submit" name="Submit3" value="Edit" /></div>');
print ('</form></td></tr>');
print ('</td>');
}
print ('</table></div>');
///end show menu items
?>


        <?php 
				  
$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "roster" ;

$show_all = "SELECT * FROM $table WHERE Girl='yes'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div align="center"><table width=600 border="1">Girls');

while ($row = mysql_fetch_array ($result))

{

$rosterid = $row[ "Rosterid" ]."";
$name = $row[ "Name" ]."";
$height = $row[ "Height" ]."";
$weight = $row[ "Weight" ]."";
$style = $row[ "Style" ]."";
$record = $row[ "Record" ]."";
$measurement = $row[ "Measurement" ]."";
$girl = $row[ "Girl" ]."";


print ('<td><TR><th>Roster ID #</th><TH>Name</TH><TH>Height</TH><TH>Weight</TH><TH>Style</TH><TH>Record</TH><TH>Measurement</TH></tr>');
print ('<tr><TD width="150"><strong>'.$rosterid.'</strong></TD>');
print ('<TD width="150">');
if(file_exists('images/roster/thumbs/'.$rosterid.'.jpg' )){
print ('<img src="images/roster/thumbs/'.$rosterid.'.jpg" width=150/>');
}else{
echo "";}
print ('<BR>'.$name.'</TD><TD>'.$height.'</TD><TD>'.$weight.'</TD><TD>'.$style.'</TD><TD>'.$record.'</TD><TD>'.$measurement.'</TD>');
print ('<TD><BR><form name="form1" id="form1" method="post" action="delete_roster.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$rosterid.' name="rosterid">');
print ('<div class="submit"><input type="submit" name="Submit2" value="Remove" /></div>');
print ('</form></td>');
print ('<td><BR><form name="form1" id="form1" method="post" action="edit_roster.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$rosterid.' name="rosterid">');
print ('<div class="submit"><input type="submit" name="Submit3" value="Edit" /></div>');
print ('</form></td></tr>');
print ('</td>');
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
