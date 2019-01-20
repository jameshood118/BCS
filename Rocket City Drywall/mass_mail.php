<html>
<head>
<title>Admin Mailing List</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>



<body>
 <?php 
							

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
<form action="mass_mailing_list.php" method="post" ENCTYPE="multipart/form-data" >
Category: 
<select name="Category" id="select">
<option>All</option>
<option>Contractor Advertisement</option>
<option>Labor Available</option>
<option>Hiring Labor</option>
<option>Customer Comments/Reviews</option>
<option>Service Needed</option>
</select>
            <br/>
           Subject:  
            
  <input name="Subject" type="text" id="Subject" size="40" maxlength="45">
            <BR/>
  Message: <BR/>
            
  <textarea name="Message" cols="75" rows="35" id="Message"></textarea>
            <BR/>
			Upload Picture: <input type="file" name="file">
                <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
            <INPUT TYPE="submit" NAME="send" VALUE="Submit">
            <BR/>
            <BR/>
</form>



</body>
</html>