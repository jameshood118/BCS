 <?php include ("creds.php"); ?>
  
<?php

$source_file=$_FILES['file']['tmp_name'];
$imagename=$_FILES['file']['name'];

$search = array(' ',"'",'&');
$replace = array('','','and');

//Outputs: zsdeffg
$imagename2 = str_replace($search, $replace, $imagename);

$imagename3 = stripslashes ($imagename2);


///upload image
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="thriftdec";
$ftp_user_pass="Charity1";
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// check connection
if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user <i>$ftp_user_name</i>";
        exit;
    } else {
        echo "<BR><strong>Connected:</strong> $ftp_server, for user <i>$ftp_user_name</i><BR>";
    }

// upload the file


$destination_file="images/justin/".$imagename3."";
	

print("<br><strong>Source File:</strong> ".$source_file."<br>");
print("<strong>Destination File:</strong> ".$destination_file."<BR>");

///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "<BR><BR><strong>Uploaded:</strong> $source_file to $ftp_server as <i>$destination_file</i><BR><BR>";
    ///end upload script

}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
///end upload image
/// make thumb portion

$filename="../images/justin/".$imagename3."";
$destination="../images/justin/thumbs/".$imagename3."";

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
	
?>


<form name="return" method="post" action="admin_justin.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>['return'].submit();
</script>
</body>
</html>