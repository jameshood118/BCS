<?php include ("creds.php"); ?>

<?php
$commander=$_POST['commander'];
$reasons=$_POST['reasons'];
$cost=$_POST['cost'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];

$date=''.$month.'-'.$day.'-'.$year.'';


// documents variables
$description=$_POST['description'];
$documents=$_FILES['documents']['name'];



$table = "expeditions" ;

$show_all = "SELECT * FROM $table Order by Exped_ID";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$exped_id = $row[ "Exped_ID" ]."";

}
$new_exped_id=$exped_id+1;

if ($commander=="select"){
$postcommand=="none";
} else {
$postcommand=$commander;
}

mysql_query("INSERT into $table (Exped_ID, Commander, Reasons, Cost, Location, Date) 
Values ('$new_exped_id', '$postcommand', '$reasons', '$cost', '$location', '$date')") or die(mysql_error());


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

ftp_mkdir($conn_id, "/images/expeditions/$new_exped_id/");


$image_file="../images/expeditions/".$new_exped_id."/".$documents."";
$image_source=$_FILES['documents']['tmp_name'];
print("<br>Source File: ".$image_source."<br>");
print("Destination File: ".$image_file."<BR>");
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['documents']['size'];

if ($source_size>0) {
///upload script
$upload = ftp_put($conn_id, $image_file, $image_source, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "Uploaded $image_source to $ftp_server as $image_file";

$table = "documents" ;

$show_all = "SELECT * FROM $table Order by Doc_ID";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$doc_id = $row[ "Doc_ID" ]."";

}
$new_doc_id=$doc_id+1;

mysql_query("INSERT into $table (Doc_ID, File, Description, Exped_ID) 
Values ('$new_doc_id', '$documents', '$description', '$new_exped_id')") or die(mysql_error());
    }
///end upload script
// close the FTP stream
ftp_close($conn_id);
///end upload image
?>


<form name="return" method="post" action="admin_expedition.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>

<?php
}



?>


