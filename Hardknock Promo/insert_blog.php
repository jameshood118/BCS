<?php 
$author=$_POST [ "author" ];
$post_pass=$_POST [ "post_pass" ];
$email=$_POST [ "email" ];
$title=$_POST [ "title" ];
$message=$_POST [ "message" ];


$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "smackblog" ;

$show_all = "SELECT * FROM $table Order by Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_num=$Idnum+1;

mysql_query("INSERT into $table (Idnum, Author, Email, Post_pass, Title, Message) 
Values ('$new_Idnum_num', '$author','$email','$post_pass','$title','$message')") or die(mysql_error());

///end update database

$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "mailinglist" ;

$show_all = "SELECT * FROM $table";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_email_num=$Idnum+1;

$sql = mysql_query("SELECT email FROM $table WHERE email = '$email'") or die ("query 1: " . mysql_error());
$mysql_num = mysql_num_rows($sql);

if ($mysql_num >= 1)
{
echo 'Email already exists, Skipping';
}
else
{

mysql_query("INSERT into $table (Idnum, Name, Email) Values ('$new_email_num', '$author','$email')") or die(mysql_error());} 




///upload image
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="hardknockpromo";
$ftp_user_pass="Cagefight1";
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

$destination_file="images/smackblog/".$new_Idnum_num.".jpg";
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


$filename="images/smackblog/".$new_Idnum_num.".jpg";
$destination="images/smackblog/thumbs/".$new_Idnum_num.".jpg";

$size=getimagesize($filename);
$newwidth="100";
$delta=(100/$size[0]);
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

<form name="return" method="post" action="blog.php">
</form>
<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script> 

