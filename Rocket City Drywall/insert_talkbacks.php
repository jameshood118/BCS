<?php 
$name=$_POST [ "name" ];
$email=$_POST [ "email" ];
$post_pass=$_POST [ "post_pass" ];
$title=$_POST [ "title" ];
$message=$_POST [ "message" ];
$weblink=$_POST [ "weblink" ];
$phone=$_POST [ "phone" ];
$company_name=$_POST [ "company_name" ];
$category=$_POST [ "category" ];

$newlink = substr ($weblink, 0, 4);
if ($newlink == "http"){
$postaddress= $weblink;
}
else{$postaddress = "http://".$weblink;
}


$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "talkbacks" ;

$show_all = "SELECT * FROM $table Order by Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_num=$Idnum+1;

echo $Idnum;
echo $new_Idnum_num;

mysql_query("INSERT into $table (Idnum, Name, Email, Post_pass, Title, Message, Weblink, Phone, Category) 
Values ('$new_Idnum_num', '$name','$email','$post_pass','$title','$message','$postaddress','$phone', '$category')") or die(mysql_error());

///end update database

$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "mailinglist" ;

$show_all = "SELECT * FROM $table";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_num=$Idnum+1;

$sql = mysql_query("SELECT email FROM $table WHERE email = '$email'") or die ("query 1: " . mysql_error());
$mysql_num = mysql_num_rows($sql);

if ($mysql_num >= 1)
{
echo 'Email already exists, Skipping';
}
else
{

mysql_query("INSERT into $table (Idnum, Name, Email) Values ('$new_Idnum_num', '$name','$email')") or die(mysql_error());} 




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

$destination_file="images/talkback/".$new_Idnum_num.".jpg";
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




?>

<form name="return" method="post" action="make_thumb_talkbacks.php">
<input type="hidden" name="Idnum" value="<?php echo $new_Idnum_num?>">
</form>

<script language="javascript" type="text/javascript">
document.return.submit();
</script>

