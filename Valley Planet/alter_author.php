<HTML><BODY><?php include('checkpass.php');?>

<?php
$authid=$_POST['selected_author'];
$first_name=$_POST['first_name'];	
$last_name=$_POST['last_name']; 	
$description=$_POST['description']; 	
$email=$_POST['email']; 	
$url=$_POST['url'];


$newurl = substr ($url, 0, 4);
if ($newurl == "http"){
$postaddress= $url;
}
else{$postaddress = "http://".$url;
}	



///upload image
// set up basic connection
$ftp_server="97.74.144.175";
$ftp_user_name="valleypl";
$ftp_user_pass="Toshiba1";
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

$source_file=$_FILES['file']['tmp_name'];
$file_type=$_FILES['file']['type'];
$destination_file="images/authors/".$authid.".jpg";
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


if ($source_size>0){
$filename="images/authors/".$authid.".jpg";
$destination="images/authors/thumbs/".$authid.".jpg";

$size=getimagesize($filename);
$newwidth="120";
$delta=(120/$size[0]);
$newheight=($size[1]*$delta);

print ("<BR>Begin Thumbnail");
print ("<BR>Idnum: ".$authid);
print ("<br>Source File: ".$filename);
print ("<br>Destination: ".$destination);

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
}
//////////////// End of JPG thumb nail creation //////////




///insert new cataegory into categories table
$photo="".$authid.".jpg";
$table = "news_authors" ;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table SET 
authid='$authid',
first_name='$first_name',
last_name='$last_name', 
description='$description',
email='$email',
url='$postaddress',
photo='$photo'
WHERE authid='$authid'") or die(mysql_error());

?>


<form name="return" method="post" action="admin_menu.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $password?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
</BODY></HTML>