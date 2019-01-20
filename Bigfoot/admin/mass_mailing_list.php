<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?>


  
    		   <?php include ("creds.php"); ?>
 
		
<?php
$picname=$_FILES["file"]["name"];


///upload image
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="bigfootstk";
$ftp_user_pass="Bigfoot1";
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// check connection
if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user $ftp_user_name";
        exit;
    } else {
        echo "<BR><strong>Connected</strong> to $ftp_server, for user <i>$ftp_user_name</i><BR>";
    }

// upload the file


$destination_file="images/massmail/".$picname."";
$source_file=$_FILES['file']['tmp_name'];
print("<br><strong>Source File: </strong>".$source_file."<br>");
print("<strong>Destination File: </strong>".$destination_file."<BR>");
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['file']['size'];

if ($source_size>0) {
///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "<BR><strong>Uploaded</strong> $source_file to $ftp_server as $destination_file<BR>";
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


print ("<br><strong>Source File: </strong>".$filename);
print ("<br><strong>Destination: </strong>".$destination);
print ("<br><strong>Login: </strong>".$login);
print ("<br><strong>Password: </strong>".$loginpass);

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
					
				
/// connect to db select category and email ///
		  

$table = "mailinglist" ;

$show_all = "SELECT * FROM $table ORDER BY Idnum";
		

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());					

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$email = $row[ "Email" ]."";
$category= $row["Category"]."";

	
					
$mail_message = "
Attached Image: http://efmoutfitters.com/bigfootstk/images/massmail/".$picname."
Category: $category \n
Subject: $subject \n
Message: $message \n
\n
\n
\n
To remove yourself from this mailing list, 
please click the following: http://efmoutfitters.com/bigfootstk/removing_email.php?var1=$email

";

mail($email, $subject, $mail_message, "From: Bigfoot Shoot To Kill" );

}


?>

<form name="return" method="post" action="admin_mailing.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script> 

