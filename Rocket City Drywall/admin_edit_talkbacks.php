<html><body>
<?php 
$Idnum=$_POST['Idnum'];

					
$login= $_POST["login"];
$loginpass= $_POST["password"];
							
							
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
							?><?php 
							print ('<div align=right><strong>'.$sub_message.'</strong></div>');
							?>

<?php
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table="talkbacks";

$show_all = "SELECT * FROM $table 
WHERE Idnum = '$Idnum' and Post_pass = '$post_pass'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
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


///end update database


?>
<div align="center">You are editing Entry Number <?php echo $Idnum ?></div>
<FORM ENCTYPE="multipart/form-data" ACTION="admin_alter_talkbacks.php" METHOD=POST>
    <table width="935" border="0" cellspacing="0" cellpadding="5">
      <tr> 
        <td width="199"><div align="right">Title: </div></td>
        <td width="275"><input name="Idnum" type="hidden" id="Idnum" value="<?php echo $Idnum?>"> 
          <input name="title" type="text" id="title"></td>
        <td width="115"><div align="right">Posting Password: </div></td>
        <td> <input name="post_pass" type="text" id="post_pass"></td>
      </tr>
      <tr> 
        <td> <div align="right"> Company Name: </div></td>
        <td> <input name="company_name" type="text" id="company_name"></td>
        <td><div align="right">Web Link:</div></td>
        <td> <input name="weblink" type="text" id="weblink"></td>
      </tr>
      <tr> 
        <td><div align="right">Phone Number:</div></td>
        <td> <input name="phone" type="text" id="phone"></td>
        <td><div align="right">Email: </div></td>
        <td> <input name="email" type="text" id="email"> </td>
      </tr>
      <tr> 
        <td><div align="right">Message:</div></td>
        <td colspan="2"><textarea name="message" cols="45" rows="7" wrap="VIRTUAL"></textarea></td>
        <td></td>
      </tr>
      <tr> 
        <td> <div align="right"> Category: </div></td>
        <td> <select name="category">
            <option></option>
            <option>Contractor Advertisement</option>
            <option>Labor Available</option>
            <option>Hiring Labor</option>
            <option>Customer Comments/Reviews</option>
            <option>Service Needed</option>
          </select></td>
        <td><div align="right">Name:</div></td>
        <td><input name="name" type="text" id="name"></td>
      </tr>
      <tr> 
        <td> <div align="right">Upload Picture: </div></td>
        <td colspan="2"> <input type="file" name="file"> <div align="right"></div></td>
        <td width="306"> <div align="right"> 
            <input type="submit" name="Submit" value="Submit Talkback">
			<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
          </div></td>
      </tr>
    </table>
  </form>

</body></html>
