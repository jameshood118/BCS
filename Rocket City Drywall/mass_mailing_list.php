<HTML><BODY>
<?php
$picname=$_FILES["file"]["name"];
$login=$_POST ["login"];
$loginpass=$_POST ["password"];


///upload image
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="rcdrywall";
$ftp_user_pass="Drywall1";
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



$destination_file="images/massmail/".$picname."";
$source_file=$_FILES['file']['tmp_name'];
print("<br>Source File: ".$source_file."<br>");
print("Destination File: ".$destination_file."<BR>");
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['file']['size'];

if ($source_size>0) {
///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $source_file to $ftp_server as $destination_file";
    }
///end upload script
}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
///end upload image
/// make thumb portion

$filename="images/massmail/".$picname."";
$destination="images/massmail/thumbs/".$picname."";

$size=getimagesize($filename);
$newheight="120";
$delta=(120/$size[1]);
$newwidth=($size[0]*$delta);


print ("<br>Source File: ".$filename);
print ("<br>Destination: ".$destination);
print ("<br>Login: ".$login);
print ("<br>Password: ".$loginpass);

////////////// starting of JPG thumb nail creation//////////
if(file_exists($filename)){
$im=ImageCreateFromJPEG($filename);
$width=ImageSx($im); // Original picture width is stored
$height=ImageSy($im); // Original picture height is stored
$newimage=imagecreatetruecolor($newwidth,$newheight);
imageCopyResized($newimage,$im,0,0,0,0,$newwidth,$newheight,$width,$height);
ImageJpeg($newimage,$destination);
} else {
print ("File ".$filename."does not exist.");
}
//////////////// End of JPG thumb nail creation //////////




//////// emailing portion ////

$category=$_POST['category'];
$subject=$_POST['subject'];
$message=$_POST['message'];		
					
$mail_message = "
Category: $category \n
Subject: $subject \n
Message: $message \n
";
					
/// connect to db select category and email ///
		  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "mailinglist" ;

/// this should send to everyone if all is selected, if not, it'll will send to the category ///

if ($category=="All"){
	$show_all = "SELECT * FROM $table ORDER BY Idnum";
}elseif ($category<>"All"){
	$show_all = "SELECT * FROM $table WHERE Category='$category' ORDER BY Idnum";
}


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());					

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$email = $row[ "Email" ]."";
$category= $row["Category"]."";

mail($email, $subject, $mail_message, "From: jlbjork@gmail.com" );

print $email;
}


?>
<!--
<form name="return" method="post" action="admin_mailing.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.return.submit();
</script> -->
</BODY></HTML>