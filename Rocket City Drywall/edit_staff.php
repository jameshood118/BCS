<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Edit Staff Member</title>
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
						
$login=$_POST ["login"];
$loginpass=$_POST ["password"];

$Idnum=$_POST['Idnum'];
$name=$_POST [ "name" ];
$title=$_POST [ "title" ];
$bio=$_POST [ "bio" ];
							
							
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


<div align="center">You are editing Record Number <?php echo $Idnum ?></div>
  <FORM ENCTYPE="multipart/form-data" ACTION="alter_staff.php" METHOD="post">
    <table width="935" border="0" cellspacing="0" cellpadding="5">
      <tr> 
        <td width="199"><div align="right">Change Name: </div></td>
        <td width="275"><input name="Idnum" type="hidden" id="Idnum"> <input name="name" type="text" id="name"></td>
        <td width="115"><div align="right">Change Job Title: </div></td>
        <td> <input name="title" type="text" id="title"></td>
      </tr>
      <tr> 
        <td> <div align="right"> Change Bio: </div></td>
        <td> <textarea name="bio" cols="30" rows="2" wrap="VIRTUAL"></textarea></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td> <div align="right">Upload Picture: </div></td>
        <td colspan="2"> <input type="file" name="file"> <div align="right"></div></td>
        <td width="306"> <div align="right"> 
            <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
            <input type="submit" name="Submit" value="Submit Changes">
          </div></td>
      </tr>
    </table>
  </form>
  <p> </p>
  <table width="935" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="465"><div align="center">        <form name="form2" method="post" action="admin_staff.php">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          <input type="submit" name="Submit2" value="Abort Changes - Back to Admin Staff">
        </form> 
          
        </div></td>
    </tr>
  </table>
  <p> </p>
</div>
</body>
</html>
