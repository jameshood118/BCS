<?php 
$Idnum=$_POST['Idnum'];

$login=$_POST['login'];
$loginpass=$_POST['password'];


///check password in database
						
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
///end check password in databasee

///update database
$table="plans";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE from $table WHERE Idnum='$Idnum'") or die(mysql_error());

///end update database

///upload image
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="butcherdraft";
$ftp_user_pass="Drafting1";
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

$destination_file="images/plans/".$Idnum.".jpg";
$thumbs="images/plans/thumbs/".$Idnum.".jpg";
$source_file=$_FILES['file']['tmp_name'];
print("<br>Source File: ".$source_file."<br>");
print("Destination File: ".$destination_file."<BR>");
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['file']['size'];

if ($source_size>0) {
///upload script


// check upload status
if (ftp_delete($conn_id, $destination_file)) {
 echo "<BR>$file deleted successful\n";
} else {
 echo "could not delete $file\n";
}

if (ftp_delete($conn_id, $thumbnail)) {
 echo "$file deleted successful\n";
} else {
 echo "could not delete $file\n";
}
///end upload script
}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
///end upload image




?>

<form name="return" method="post" action="admin_plan.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script> 

