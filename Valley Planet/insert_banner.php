<?php include('checkpass.php');?>

<?php 

$new_banner=$_POST['new_banner'];

$advertiser=$_POST['advertiser'];
$new_advertiser=$_POST['new_advertiser'];

$contact_name=$_POST['contact_name'];
$contact_phone=$_POST['contact_phone'];
$address1=$_POST['address1'];
$address2=$_POST['address2'];

$file_type=$_POST['file_type'];

$ppc=$_POST['ppc'];
$cpm=$_POST['cpm'];

$url=$_POST['url'];

$slot=$_POST['slot'];
$set_page=$_POST['set_page'];

$file_name=$_FILES['file']['name'];

$file_name=$new_banner."_".$file_name;

if ($set_page=="none"){
$set_page="";
}

if ($new_advertiser<>"") {
$advertiser=$new_advertiser;
}

$address=$address1."|".$address2;

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "banner_ads" ;
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("INSERT into $table (Idnum) VALUES ('$new_banner')") or die(mysql_error());

mysql_query("UPDATE $table set Idnum='$new_banner',
Advertiser='$advertiser',
Contact='$contact_name',
Phone='$contact_phone',
Address='$address',
Banner='$file_name',
PPC='$ppc',
CPM='$cpm',
Clicks='$clicks',
Impressions='$impressions',
Url='$url',
Slot='$slot',
Page='$set_page'
WHERE Idnum = '$new_banner'") or die(mysql_error());

print ('Banner Inserted.');

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
$target_path = $currentdir ."\\". basename($_FILES['file']['name']);

$file_name=$_FILES['file']['name'];

$destination_file='images/banners/'.$new_banner.'_'.$file_name;
$source_file=$_FILES['file']['tmp_name'];
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['file']['size'];

if ($source_size>0) {
///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

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