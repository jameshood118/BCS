<HTML><BODY>
<?php 

$login=$_POST ["login"];
$password=$_POST ["password"];

$Idnum=$_POST['Idnum'];
$product_id=$_POST['product_id'];
$product_name=$_POST['product_name'];
$manufacturer=$_POST['manufacturer'];
$category=$_POST['category'];
$sub_category=$_POST['sub_category'];
$brand=$_POST['brand'];
$description=$_POST['description'];
$price=$_POST['price'];
$warranty=$_POST['warranty'];
$variations=$_POST['variations'];


$dbhost = "10.6.166.53" ;
$dbuser = "rcdrywal" ;
$dbpass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "products" ;

mysql_connect ($dbhost,$dbuser,$dbpass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table SET Idnum='$Idnum', 
Product_id='$product_id', 
Product_name='$product_name', 
Manufacturer='$manufacturer', 
Category='$category', 
Sub_Category='$sub_category', 
Brand='$brand', 
Description='$description', 
Price='$price', 
Warranty='$warranty', 
Variations='$variations' 
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

$destination_file="images/products/".$Idnum.".jpg";
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


<form name="return" method="post" action="make_thumb_prod.php">
<input type="hidden" name="Idnum" value="<?php echo $Idnum?>">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $password?>">
</form>

<script language="javascript" type="text/javascript">
document.return.submit();
</script>
</BODY></HTML>
