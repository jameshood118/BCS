 <html><body>
   		   <?php include ("creds.php"); ?>
<?php 

$link=$_POST['link'];
$picturename=$_FILES['file']['name']; 

$newaddress = substr ($link, 0, 4);
if ($newaddress == "http"){
$postlink= $link;
}
else{$postlink = "http://".$link;
}


$table = "banner_ads" ;

$show_all = "SELECT * FROM $table Order by Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_num=$Idnum+1;

$postpicname="$new_Idnum_num$picturename";


mysql_query("INSERT into $table (Idnum, Link, Filename) Values ('$new_Idnum_num', '$postlink','$postpicname')") or die(mysql_error());


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


$image_file="../images/banners/".$postpicname."";
$image_source=$_FILES['file']['tmp_name'];
print("<br>Source File: ".$image_source."<br>");
print("Destination File: ".$image_file."<BR>");
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['file']['size'];

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

// close the FTP stream
ftp_close($conn_id);
///end upload image



$filename="../images/banners/".$postpicname."";
$destination="../images/banners/thumbs/".$postpicname."";

$size=getimagesize($filename);
$newwidth="350";
$delta=(350/$size[0]);
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


<form name="return" method="post" action="admin_banners.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
  <!-- END Admin -->
  </td>
  </tr>
  </table>
  </div>
</body></html