<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//see if we have submited and that the files array has been set
if(($_POST["submit"]=="submit")&&(is_array($_FILES['userfiles']))){

$ftp_user_name="******"; //change to ftp username
$ftp_user_pass="******"; //change to ftp password
$ftp_server="******"; //change to ftp url
$ftp_dump_dir="******"; //change to destination directory

//go through all the files
for($x=0;$x<count($_FILES['userfiles']['name']);$x++){

//now we do some file checking

//check to see if file is there
if($_FILES['userfiles']['name'][$x]!="none"){
//file has a name
//check filesize
if($_FILES['userfiles']['size'][$x]!=0){
//file is larger than 0 bytes
//Check to see if it is uploaded
if(is_uploaded_file($_FILES['userfiles']['tmp_name'][$x])){
//file has been uploaded!
//let the user know their file has be uploaded
echo "file ".$_FILES['userfiles']['name'][$x]." uploaded!<br>";
//conect to ftp server
$conn_id = ftp_connect($ftp_server);
// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);
// check connection
if ((!$conn_id) || (!$login_result)) {
echo "FTP connection has failed!<br>";
echo "Attempted to connect to $ftp_server for user $ftp_user_name";
exit;
} else {
echo "Connected to $ftp_server! <br>";
//set PASV mode
if(!ftp_pasv($conn_id,TRUE)){
echo "Could not enter PASV mode!";
}
//rename to file#_date.ext
$filename = $_FILES['userfiles']['name'][$x];
//$filename.= ".".get_extension($_FILES['userfiles']['name'][$x],3);

//change directory
if (@ftp_chdir($conn_id, $ftp_dump_dir)) {
//maybe you want to make sure we are in the correct directory
echo "Current directory is now : ", ftp_pwd($conn_id), "\n";
} else {
//you want to know if it didn't work
echo "Couldn't change directory\n";
}

//upload the file and let the user know what happened
if(ftp_put($conn_id,$filename,$_FILES['userfiles']['tmp_name'][$x],FTP_BINARY)){
echo "File ".$_FILES['userfiles']['name'][$x]." was sent successfully<br>";
echo "File was named ".$filename."<br>";
}else{
echo "There was a problem sending file ".$_FILES['userfiles']['name'][$x]."<br>";;
}
}
// close the FTP stream
ftp_close($conn_id);
}
else echo"File was not uploaded!<br>";
}
}
echo "<br>";

}//end for loop

}
//That's all folks!
?>
</body>
</html>