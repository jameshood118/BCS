<?php include ("creds.php"); ?>

<?php
$name=$_POST['name'];
$age=$_POST['age'];
$bio=$_POST['bio'];
$email=$_POST['email'];
$message=$_POST['message'];
$video=$_FILES['video']['name'];



$table = "ex_commander" ;

$show_all = "SELECT * FROM $table Order by Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_num=$Idnum+1;

mysql_query("INSERT into $table (Idnum, Name, Age, Bio, Email, Message, Video) 
Values ('$new_Idnum_num', '$name', '$age', '$bio', '$email', '$message', '$video')") or die(mysql_error());


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
        echo "Connected to $ftp_server, for user $ftp_user_name";
    }

// upload the file


$image_file="../images/excommander/".$new_Idnum_num.".jpg";
$image_source=$_FILES['picture']['tmp_name'];
print("<br>Source File: ".$image_source."<br>");
print("Destination File: ".$image_file."<BR>");
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['picture']['size'];

if ($source_size>0) {
///upload script
$upload = ftp_put($conn_id, $image_file, $image_source, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $image_source to $ftp_server as $image_file";
    }
///end upload script
}

$video_file="../video/excommander/".$video."";
$video_source=$_FILES['video']['tmp_name'];
print("<br>Source File: ".$video_source."<br>");
print("Destination File: ".$video_file."<BR>");
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['video']['size'];

if ($source_size>0) {
///upload script
$upload = ftp_put($conn_id, $video_file, $video_source, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $video_source to $ftp_server as $video_file";
    }
///end upload script
}

///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
///end upload image



$filename="../images/excommander/".$new_Idnum_num.".jpg";
$destination="../images/excommander/thumbs/".$new_Idnum_num.".jpg";

$size=getimagesize($filename);
$newwidth="120";
$delta=(120/$size[0]);
$newheight=($size[1]*$delta);


print ("<BR>Idnum: ".$new_Idnum_num);
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
//////////////// End of JPG thumb nail creation //////////

?>

<form name="return" method="post" action="admin_excommander.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>

