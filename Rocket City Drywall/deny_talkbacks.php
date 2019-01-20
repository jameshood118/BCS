<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Deny Talkback</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<STYLE type="text/css">
      body {
color: #000000; background-color: #ffffff; }
    </STYLE>
	
	<style type="text/css">
	
	a:link { 
	color: #333333;
	}
a:visited { 
	color: #fffccc;
	}
a:hover { 
	color: #CCCCCC;
	background-color: #333333;
	text-decoration: none;
	}
a:active { 
	color: #333333;
	}
	
	</style>
</head>



<div align="center"> 
  <?php 
  
$Idnum=$_POST [ "Idnum" ];
$name=$_POST [ "Name" ];
$email=$_POST [ "Email" ];
$post_pass=$_POST [ "Post_pass" ];
$title=$_POST [ "Title" ];
$message=$_POST [ "Message" ];
$status=$_POST [ "Status" ];
$image=$_POST [ "Image" ];
$weblink=$_POST [ "Weblink" ];
$phone=$_POST [ "Phone" ];
$company_name=$_POST [ "Company_name" ];
$category=$_POST [ "Category" ];
							
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
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "talkbacks" ;

$show_all = "SELECT * FROM $table ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$category = $row[ "Category" ]."";
$address = $row[ "Address" ]."";$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$email = $row[ "Email" ]."";
$post_pass = $row[ "Post_pass" ]."";
$title = $row[ "Title" ]."";
$message = $row[ "Message" ]."";
$status = $row[ "Status" ]."";
$image = $row[ "Image" ]."";
$weblink = $row[ "Weblink" ]."";
$phone = $row[ "Phone" ]."";
$company_name = $row[ "Company_name" ]."";
$category = $row[ "Category" ]."";

}






print ('<br><span class=title>Enter a Reason for Denial of Talkback</span><br>');

?>
<FORM name="denial" ENCTYPE="multipart/form-data" ACTION="denied.php" METHOD=POST>
  
<select name="Reasons">
<option value="Offensive">Offensive</option>
<option value="Unintelligent">Unintelligent</option>
<option value="Errors">Errors</option>

</select>
   <?php 
print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$Idnum.'" name="Idnum">');
		  ?>
<input type="submit" name="Submit" value="Send Denial of Talkback">
</form>

  <form name="form2" method="post" action="admin_talkbacks.php">
            <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
            <input type="submit" name="Submit2" value="Abort Entry - Back to Products Admin">
          </form>
   
</body>
</html>
