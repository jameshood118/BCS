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

$rosterid=$_POST['rosterid'];

							
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
$account_type=$row["Account_Type"]."";

}

if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?error=true";</script>';
}

$sub_message='Logged in as: '.$login.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Type: '.$account_type.'';						
							?><?php 
							print ('<div align=right><strong>'.$sub_message.'</strong></div>');


$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "roster" ;

$show_all = "SELECT * FROM $table 
WHERE Rosterid = '$rosterid'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$name = $row[ "Name" ]."";
$height = $row[ "Height" ]."";
$weight = $row[ "Weight" ]."";
$style = $row[ "Style" ]."";
$record = $row[ "Record" ]."";
$measurements = $row[ "Measurements" ]."";
$girl = $row[ "Girl" ]."";


}

?>
You are Editing: <?php echo $name; ?> <BR>
The Rosterid is: <?php echo $rosterid; ?> 
 <FORM ENCTYPE="multipart/form-data" ACTION="alter_roster.php" METHOD=POST>
    
  <table width="600" border="0" cellspacing="0" cellpadding="5">
    <tr> <td>
      Change Name:
      <input name="rosterid" type="hidden" value="<?php echo $rosterid?>"> 
      <input name="name" type="text" id="name" value="<?php echo $name?>"><BR>
     Change Weight:
	 <input name="weight" type="text" value="<?php echo $weight?>"><BR>
	 Change Height: 
	 <input name="height" type="text" value="<?php echo $height?>"> <BR>
	
	 Change Style:
     <input name="style" type="text" value="<?php echo $style?>"><BR>
	 Change Record:
     <input name="record" type="text" value="<?php echo $record?>"><BR>
	 Change Measurement:
     <input name="measurements" type="text" value="<?php echo $measurements?>"><BR>
	 Change Roster Type (Girl Yes or No):
     <input name="girl" type="text" value="<?php echo $girl?>"><BR>
	  Change Picture:
     <input name="file" type="file"><BR>
 <div align="center"> 
          <input type="submit" name="Submit" value="Submit Changes">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        </div><div align="center"> 
        <form name="form2" method="post" action="admin_roster.php">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          <input type="submit" name="Submit2" value="Abort Changes">
        </form>
      </div></td>
    </tr>
  </table>
  </form>
  <p> </p>
 
</table>

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
