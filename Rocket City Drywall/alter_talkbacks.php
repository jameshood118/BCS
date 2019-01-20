<HTML><BODY>
<?php 
$Idnum =$_POST[ "Idnum" ];
$name =$_POST[ "name" ];
$email = $_POST[ "email" ];
$post_pass = $_POST[ "post_pass" ];
$title = $_POST[ "title" ];
$message = $_POST[ "message" ];
$weblink = $_POST[ "weblink" ];
$phone = $_POST[ "phone" ];
$company_name =$_POST[ "company_name" ];
$category = $_POST[ "category" ];

///update database
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table="talkbacks";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table SET Idnum='$Idnum',
Name='$name',
Email='$email',
Post_pass='$post_pass',
Title='$title',
Message='$message',
Weblink='$weblink',
Phone='$phone',
Company_name='$company_name',
Category='$category'
WHERE Idnum = '$Idnum'") or die(mysql_error());

///end update database

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

$destination_file="images/talkback/".$Idnum.".jpg";
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

<form name="return" method="post" action="talkback.php">
</form>

<script language="javascript" type="text/javascript">
document.return.submit();
</script>
</BODY></HTML>

