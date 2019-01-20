<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Edit Project Details</title>
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
  
$Idnum=$_POST['Idnum'];
$newname=$_POST['newname'];
							
$login=$_POST ["login"];
$loginpass=$_POST ["password"];
							
							
$host = "10.6.186.64" ;
$user = "butcherdraft" ;
$pass = "Drafting1" ;
$db = "butcherdraft" ;
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
							

				  
$host = "10.6.186.64" ;
$user = "butcherdraft" ;
$pass = "Drafting1" ;
$db = "butcherdraft" ;
$table = "projects" ;

$show_all = "SELECT * FROM $table WHERE Idnum='$Idnum'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))

{


$name = $row[ "Name" ]."";
$category = $row[ "Category" ]."";
$date = $row[ "Date" ]."";
$description = $row[ "Description" ]."";

}
print ("<br><span class=title>Editing Item Number ".$Idnum.".</span><br>")
?>
  <FORM ENCTYPE="multipart/form-data" ACTION="alter_project.php" METHOD=POST>
    <table width="935" border="0" cellspacing="0" cellpadding="5">
      <tr> 
        <td width="230"><div align="right">Name: </div></td>
        <td width="256"><input name="name" type="text" id="name" value="<?php echo $name?>"></td>
        <td colspan="2" rowspan="4">&nbsp;</td>
      </tr>
      <tr> 
        <td> <div align="right"> Category: </div></td>
        <td> <input name="category" type="text" id="category" value="<?php echo $category?>"></td>
      </tr>
      <tr> 
        <td><div align="right">Date: </div></td>
        <td><input name="date" type="text" id="date" value="<?php echo $date?>"></td>
      </tr>
      <tr> 
        <td><div align="right">Description: </div></td>
        <td><textarea name="description" cols="30" rows="5" wrap="virtual" value="<?php echo $description?>"></textarea></td>
      </tr>
      <tr> 
        <td> <div align="right">Upload Picture: </div></td>
        <td colspan="2"> <input type="file" name="file"> 
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$newname.'" name="newname">');
print ('<input type="hidden" value="'.$Idnum.'" name="Idnum">');
		  ?>
          <div align="right"></div></td>
        <td width="291"> <div align="left"> 
            <input type="submit" name="Submit" value="Submit Project">
          </div></td>
      </tr>
    </table>
  </form>
  <p> </p>
  <table width="935" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="465"><div align="center"> 
          <form name="form2" method="post" action="admin_project.php">
            <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
            <input type="submit" name="Submit2" value="Abort Entry - Back to Projects Admin">
          </form>
        </div></td>
    </tr>
  </table>
  <p> </p>
</div>
</body>
</html>
