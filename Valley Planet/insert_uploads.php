<?php include('checkpass.php');?>

<?php 


$issue_number=$_POST['issue_number'];
$pages=$_POST['pages'];

$page_image_counter=1;

while ($page_image_counter<=$pages) {
$page_file=$_FILES['file'.$page_image_counter];
$pdf_file=$_FILES['pdf_file'];



				 
				  
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
        echo "Connected to $ftp_server, for user $ftp_user_name <br> ";
    }

// upload the file
$currentdir=getcwd();
$target_path = $currentdir ."\\". basename($_FILES['file'.$page_image_counter]['name']);

$destination_file='images/issue_pages/'.$issue_number.'/'.$page_image_counter.'.jpg';
$source_file=$_FILES['file'.$page_image_counter]['tmp_name'];
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['file'.$page_image_counter]['size'];

if ($source_size>0) {
///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $source_file to $ftp_server as $destination_file <br";
    }
///end upload script
}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
				  
				  
			


$page_image_counter=$page_image_counter+1;
}

?>

<?php 
///upload pdf file

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
        echo "Connected to $ftp_server, for user $ftp_user_name <br> ";
    }

// upload the file
$currentdir=getcwd();
$target_path = $currentdir ."\\". basename($_FILES['pdf_file']['name']);

$destination_file='images/issue_pdfs/'.$issue_number.'.pdf';
$source_file=$_FILES['pdf_file']['tmp_name'];
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['pdf_file']['size'];

if ($source_size>0) {
///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

//////alter database to show that pdf is uploaded

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_issues" ;
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table set issueid='$issue_number',
PDF='yes'
WHERE issueid = '$issue_number'") or die(mysql_error());

//////end alter database to show that pdf is updated


// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $source_file to $ftp_server as $destination_file <br>";
    }
///end upload script
}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
///end upload pdf file
?>

<?php 
print ('<form name="redirect" method="post" action="admin_menu.php">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('</form>');

print ('<script language="javascript" type="text/javascript">');
print ("document.forms['redirect'].submit();");
print ('</script> ');

?>