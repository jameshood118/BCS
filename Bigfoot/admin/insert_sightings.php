 <html><body>
   		   <?php include ("creds.php"); ?>
<?php 

$title=$_POST['title'];
$name=$_POST['name'];
$date=$_POST['date'];
$time=$_POST['time'];
$location=$_POST['location'];
$details=$_POST['details'];


$table = "sightings" ;

$show_all = "SELECT * FROM $table Order by Sight_ID";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$sight_id = $row[ "Sight_ID" ]."";

}
$new_sight_id=$sight_id+1;


mysql_query("INSERT into $table (Sight_ID, Title, Name, Date, Time, Location, Details, Status) 
Values ('$new_sight_id', '$title','$name','$date','$time','$location','$details','approved')") or die(mysql_error());


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


$image_file="../images/sightings/".$new_sight_id.".jpg";
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



$filename="../images/sightings/".$new_sight_id.".jpg";
$destination="../images/sightings/thumbs/".$new_sight_id.".jpg";

$size=getimagesize($filename);
$newwidth="120";
$delta=(120/$size[0]);
$newheight=($size[1]*$delta);


print ("<BR>Idnum: ".$new_sight_id);
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


<form name="return" method="post" action="admin_sightings.php">
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