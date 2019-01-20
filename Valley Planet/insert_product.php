<?php 
$name=$_POST['name'];
$category=$_POST['category'];
$new_category=$_POST['new_category'];
$description=$_POST['description'];
$price=$_POST['price'];
$status=$_POST['status'];
$count=$_POST['count'];


///check password in database
 						
$login=$_POST ["login"];
$loginpass=$_POST ["password"];
							
							
include('checkpass.php');

///update database
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "store" ;

$show_all = "SELECT * FROM $table Order by Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_num=$Idnum+1;

if ($new_category<>"") {
///insert new cataegory into categories table
mysql_query("INSERT into $table (Idnum, Name, Category, Description, Price, Status, Count) 
Values 
('$new_Idnum_num', '$name','$new_category','$description','$price','$status','$count')") or die(mysql_error());

} else {

mysql_query("INSERT into $table (Idnum, Name, Category, Description, Price, Status, Count) 
Values 
('$new_Idnum_num', '$name','$category','$description','$price','$status','$count')") or die(mysql_error());

}

///end update database



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

$destination_file="images/store/".$new_Idnum_num.".jpg";
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

$destination_file2="images/store/".$new_Idnum_num."b.jpg";
$source_file2=$_FILES['fileb']['tmp_name'];
print("<br>Source File2: ".$source_file2."<br>");
print("Destination File2: ".$destination_file2."<BR>");
///check to see if file size is >0 and upload file if so.
$source_size2=$_FILES['fileb']['size'];

if ($source_size2>0) {
///upload script
$upload2 = ftp_put($conn_id, $destination_file2, $source_file2, FTP_BINARY);

// check upload status
if (!$upload2) {
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $source_file2 to $ftp_server as $destination_file2";
    }
///end upload script
}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
///end upload image



$filename="images/store/".$Idnum.".jpg";
$destination="images/store/thumbs/".$Idnum.".jpg";

$size=getimagesize($filename);
$newwidth="120";
$delta=(120/$size[0]);
$newheight=($size[1]*$delta);

print ("<BR>Begin Thumbnail 1");
print ("<BR>Idnum: ".$Idnum);
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

$filename2="images/store/".$Idnum."b.jpg";
$destination2="images/store/thumbs/".$Idnum."b.jpg";

$size=getimagesize($filename2);
$newwidth="120";
$delta=(120/$size[0]);
$newheight=($size[1]*$delta);

print ("<BR>Begin Thumbnail 2");
print ("<BR>Idnum: ".$Idnum);
print ("<br>Source File: ".$filename2);
print ("<br>Destination: ".$destination2);

////////////// starting of JPG thumb nail creation//////////
if(file_exists($filename2)){
$im=ImageCreateFromJPEG($filename2);
$width=ImageSx($im); // Original picture width is stored
$height=ImageSy($im); // Original picture height is stored
$newimage=imagecreatetruecolor($newwidth,$newheight);
imageCopyResized($newimage,$im,0,0,0,0,$newwidth,$newheight,$width,$height);
ImageJpeg($newimage,$destination2);
} else {
print ("File ".$filename2."does not exist.");
}
//////////////// End of JPG thumb nail creation //////////

?>

<form name="return" method="post" action="admin_menu.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script> 