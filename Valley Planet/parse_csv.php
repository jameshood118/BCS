<?php include('checkpass.php');?>

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

$destination_file='csv/events/'.$file_name;
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
///find last row and set up next idnum
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "events_revised" ;

$show_all = "SELECT * FROM $table order by Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$idnum = $row["Idnum"];
$catid = $row["Catid"];
$musical = $row['Musical'];
$listingid = $row['Listingid'];
$eventname = $row['Eventname'];
$description = $row['Description'];
$cost = $row['Cost'];
$link = $row['Link'];
$numpic = $row['Numpic'];
$startdate = $row['Startdate'];
$starttime = $row['Starttime'];
$enddate = $row['Enddate'];
$endtime = $row['Endtime'];
$datemodified = $row['Datemodified'];
}

$new_idnum=$idnum+1;
///end find last row and set up next idnum


///parse file

$file_row = 1;
$handle = fopen($destination_file, "r");
while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
    $num = count($data);
    echo "<p> $num fields in line $row: <br /></p>\n";
    $file_row++;
    for ($c=0; $c < $num; $c++) {
	$col=$col+1;
        echo $new_idnum.": "."Column: ".$col." ".$data[$c] . "<br />\n";
		$databox[$col]=$data[$c];
		if ($col=="7"){
		$col="0";
		$new_idnum=$new_idnum+1;
		///insert row into database
		///////////////parse date
		$datestring=explode("-", $databox[2]);
		
		$day=$datestring[0];
		$month=$datestring[1];
		$year=$datestring[2];
		
		$venue=$databox[3];
		
		$event_name=$databox[4];
		
		///add slashes to name and venue
		
		$venue=addslashes($venue);
		$event_name=addslashes($event_name);
		
		///end add slashes to name and venue
		
		
		
		if ($day<10) {
		$day="0".$day;
		}
		
		if ($month=="Jan") {
		$month="01";
		}
		
		if ($month=="Feb") {
		$month="02";
		}
		
		if ($month=="Mar") {
		$month="03";
		}
		
		if ($month=="Apr") {
		$month="04";
		}
		
		if ($month=="May") {
		$month="05";
		}
		
		if ($month=="Jun") {
		$month="06";
		}
		
		if ($month=="Jul") {
		$month="07";
		}
		
		if ($month=="Aug") {
		$month="08";
		}
		
		if ($month=="Sep") {
		$month="09";
		}
		
		if ($month=="Oct") {
		$month="10";
		}
		
		if ($month=="Nov") {
		$month="11";
		}
		
		if ($month=="Dec") {
		$month="12";
		}
		
		$year="20".$year;
		
		$insertdate=$year."-".$month."-".$day;
		///////////////end parse date
		
		///determine catid and whether or not the item is musical in nature
		$table = "event_categories" ;
		
		$show_all2 = "SELECT * FROM $table
ORDER BY catid";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result2 = mysql_query ($show_all2) or die ( mysql_error ());


while ($row2 = mysql_fetch_array ($result2))
{
$catid2 = $row2["catid"];
$category2 = $row2['category'];
$music_cal2 = $row2['music_cal'];

if ($category2==$databox[7]) {
$category_id=$catid2;
$music_cal=$music_cal2;
}

}	
		$table = "events_revised" ;
		///end determine catid and whether or not the item is musical in nature
		
		
		///determine listing_id of entry
		$table="listings";
		
		$show_all3 = "SELECT * FROM $table
ORDER BY catid";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result3 = mysql_query ($show_all3) or die ( mysql_error ());

$insert_listing_id="1";
while ($row3 = mysql_fetch_array ($result3))
{
$id3 = $row3["id"];
$name3 = $row3['name'];

$compare_name=strtolower($name3);
$compare_venue=strtolower($venue);

if ($compare_name==$compare_venue) {
$insert_listing_id=$id3;
}

}	
		
		$table = "events_revised" ;
		///end determine listing_id of entry
if ($databox[4]<>"" and $databox[4]<>"Event") {
		mysql_query("INSERT into $table (Idnum) VALUES ('$new_idnum')") or die(mysql_error());

mysql_query("UPDATE $table SET Idnum='$new_idnum', 
Startdate='$insertdate',
Listingid='$insert_listing_id',
Listingname='$venue',
Eventname='$event_name',
Catid='$category_id',
Musical='$music_cal',
Enddate='$insertdate'
WHERE Idnum = '$new_idnum'") or die(mysql_error());
}
		
		///end insert row into database
		}
    }
}
fclose($handle);

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
