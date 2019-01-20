      <div class="body-index"> <?php include ("creds.php"); ?>
        <form name="form4" method="post" action="admin_menu.php">
          <input type="submit" name="Submit3" value="Back to Admin Menu">
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
        </form>
        <form name="form4" method="post" action="add_staff.php">
          <input type="submit" name="Submit3" value="Add Staff">
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
        </form> 
         
        <?php 
				  
$table = "Users" ;

$show_all = "SELECT * FROM $table ORDER by Idnum";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());
	

print ('<center><table width=600>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$title = $row[ "Title" ]."";
$email = $row[ "Email" ]."";
$bio = $row[ "Bio" ]."";
$quote = $row[ "Quote" ]."";


print ('<HR>');
print ('<strong>Name: </strong>'.$name.'<BR>');
print ('<strong>Job Title: </strong>'.$title.'<BR>'); 
print ('<strong>Email: </strong>'.$email.'<BR>');
print ('<strong>Bio: </strong>'.$bio.'<BR>');
print ('<strong>Quote: </strong><I>"'.$quote.'"</i><BR>');
print ('</td>');

$number=$number+1;

if ($number>2){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>
        <form action="" method="post" name="staff_reviews">
          <?php 
				  

$table = "Users" ;

$show_all = "SELECT * FROM $table ORDER by Idnum";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());
	

print ('Select a Staff To Edit: <BR><select name="staff_select">');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";


print ('<option value="'.$Idnum.'">'.$name.'</option>');
}
print ('</select>');

?>
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
          <input name="Edit" type="submit" value="Edit" />
        </form>
        <?php 
// This will evaluate to TRUE so the text will be printed.
if (isset($_POST['Edit'])) {

$staff_select=$_POST['staff_select'];
				  

$table = "Users" ;

$show_all = "SELECT * FROM $table WHERE Idnum='$staff_select'";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());
	

while ($row = mysql_fetch_array ($result))

{


$name = $row[ "Name" ]."";
$title = $row[ "Title" ]."";
$email = $row[ "Email" ]."";
$bio = $row[ "Bio" ]."";
$quote = $row[ "Quote" ]."";
}
print ("<br><span class=title>You are Editing ".$staff_select."<BR>Which is the Staff Information for <i>".$name."</i>.</span><br>");
?>
        <FORM ENCTYPE="multipart/form-data" ACTION="alter_staff.php" METHOD="post">
          Change Name: 
          <input name="name" type="text" value="<?php echo $name ?>">
          <BR>
          Change Job Title: 
          <input name="title" type="text"  value="<?php echo $title ?>">
          <BR>
          Change Email: 
          <input name="email" type="text"  value="<?php echo $email ?>">
          <BR>
          Change Quote: 
          <input name="quote" type="text"  value="<?php echo $quote ?>">
          <br>
          Change Bio: 
          <textarea name="bio" cols="30" rows="5" wrap="VIRTUAL"><?php echo $bio ?></textarea>
          <br>
          Upload Picture: 
          <input type="file" name="file">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$staff_select.'" name="staff_select">');
		  ?>
          <input type="submit" name="Submit2" value="Submit Changes">
        </form>
        <form name="form2" method="post" action="admin_staff.php">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?><BR>
          <input type="submit" name="Abort" value="Abort Chnges">
        </form>
        <?php 
}
?>
        <?php 
if (isset($_POST['Abort'])) {
unset ($_POST['Edit']);
}
?>

