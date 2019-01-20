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


///update database
$table="roster";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE from $table WHERE Rosterid='$rosterid'") or die(mysql_error());

///end update database


// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="hardknockpromo";
$ftp_user_pass="Cagefight1";
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// check connection
if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user $ftp_user_name";
        exit;
    } else {
        echo "Connected to $ftp_server, for user $ftp_user_name";
    }

// upload the file
$currentdir=getcwd();
$target_path = $currentdir ."\\". basename($_FILES['file']['name']);

$destination_file="images/roster/".$rosterid.".jpg";
$thumb="images/roster/thumbs/".$rosterid.".jpg";
print("Destination File: ".$destination_file."<BR>");


// check upload status
if (ftp_delete($conn_id, $destination_file)) {
 echo "<BR>$destination_file deleted successful\n";
} else {
 echo "could not delete $destination_file\n";
}

if (ftp_delete($conn_id, $thumb)) {
 echo "$thumb deleted successful\n";
} else {
 echo "could not delete $thumb\n";
}


// close the FTP stream
ftp_close($conn_id);
///end upload image



  

  
 ?>		


<form name="return" method="post" action="admin_roster.php">
 <input type="hidden" value="<?php echo $login?>" name="login">
 <input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
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
