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

$Idnum=$_POST['Idnum'];
$name=$_POST['name'];
$email=$_POST['email'];

							
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
?>
<form action="mass_mailing_list.php" method="post" ENCTYPE="multipart/form-data" >
Category: 
<select name="category" id="select">
<option>All</option>
<option>Fight Schedule</option>
<option>Fighter Information</option>
<option>Event Information</option>
<option>Web Site Information</option>
<option>Promotions</option>
</select>
            <br/>
           Subject:  
            
  <input name="subject" type="text" id="subject" size="40" maxlength="45">
            <BR/>
  Message: <BR/>
            
  <textarea name="message" cols="75" rows="35" id="message"></textarea>
            <BR/>
			Upload Picture: <input type="file" name="file"><BR>
                <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
            <div align="center"><INPUT TYPE="submit" NAME="send" VALUE="Submit"></form></div>
			<div align="center"> 
        <form name="form2" method="post" action="admin_mailing.php">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          <input type="submit" name="Submit2" value="Abort Changes">
        </form>
      </div>
            <BR/>
            <BR/>


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
