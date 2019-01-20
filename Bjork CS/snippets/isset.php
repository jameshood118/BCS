<?php echo "<?xml version=\"1.0\" encoding=\"iso-8859-1\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>

<body>
<form action="" method="post" name="staff_reviews">
        <?php 
				  
$host = "10.6.171.192" ;
$user = "bjorkcs" ;
$pass = "Kotorsw1" ;
$db = "bjorkcs" ;
$table = "staff" ;

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

// In the next examples we'll use var_dump to output
// the return value of isset().
?>

<input name="Edit" type="submit" value="Edit" />
</form>

<?php 
// This will evaluate to TRUE so the text will be printed.
if (isset($_POST['Edit'])) {

$staff_select=$_POST['staff_select'];
				  
$host = "10.6.171.192" ;
$user = "bjorkcs" ;
$pass = "Kotorsw1" ;
$db = "bjorkcs" ;
$table = "staff" ;

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
		  ?>
          <input type="submit" name="Submit2" value="Abort Changes - Back to Admin Staff">
        </form>
        <p style="padding-bottom:20px;"></p></p>
        </div>
<?php 
}
?>





</body>
</html>
