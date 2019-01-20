<HTML><BODY>
<?php 

$login=$_POST ["login"];
$password=$_POST ["password"];

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

$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "products" ;

$show_all = "SELECT * FROM $table Order by Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_num=$Idnum+1;



mysql_query("INSERT INTO $table (Idnum, Product_id, Product_name, Manufacturer, Category, Sub_Category, Brand, Description, Price, Warranty, Variations)
Values ('$new_Idnum_num', '$product_id', '$product_name', '$manufacturer', '$category', '$sub_category', '$brand', '$description', '$price', '$warranty', '$variations')") 

or die( mysql_error());

///end update database


///upload image
			
					// set up basic connection
$ftp_server="208.109.181.209";
$ftp_login="rcdrywall";
$ftp_pass="Drywall1";

			//POST variables for image upload
				$file_name=$_FILES['file']['name'];
				$source_file=$_FILES['file']['tmp_name'];
				$destination_file = "images/products/" . $new_Idnum_num . ".jpg";


//OUTPUT INFORMATION: DELETE THIS LATER
					echo "name: $file_name <br>";
					echo "temp name: $source_file <br>";
					echo "destination: $destination_file <br>";
					echo "basename: ".basename($_FILES["file"]["name"])."<br>";
					echo "filetype: ".$_FILES["file"]["type"]."<br>";
					echo "filesize: ".$_FILES["file"]["size"]."<br>";
					echo "Idnum: $Idnum <br>";

$filetype=$_FILES["file"]["type"];

//Establish connection with FTP server
	$conn_id=ftp_connect($ftp_server);
	if (!$conn_id) {
		echo "<br><strong>ERROR:</strong> Did not connect to FTP server <br>";
		die();
	} else {
	//Login to FTP server	
		$login_result=ftp_login($conn_id, $ftp_login, $ftp_pass);
		if (!$login_result) {
			echo "<br><strong>ERROR:</strong> Login failed for $login on $ftp_serv <br>";
			die();
			} else {
			//home/content/e/f/m/efmoutdoors/html/patricksupholstery/uploads/	

			//Set FTP to passive and upload the file
				ftp_pasv($conn_id, true);
				$upload=ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);
				if (!$upload) {
					echo "<br><strong>ERROR:</strong> Upload for file $file_name failed <br>";
					die();
					} else {
					//Close FTP connection
						ftp_close($conn_id);
						echo "File upload successful. <br>";

// close the FTP stream
ftp_close($conn_id);
						echo "All fuctions sucessful- hopefully. <br>";
					}
					}
					}
					
					
					




?>

<form name="return" method="post" action="make_thumb_prod.php">
<input type="hidden" name="Idnum" value="<?php echo $new_Idnum_num?>">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $password?>">
</form>

<script language="javascript" type="text/javascript">
document.return.submit();
</script>

</BODY></HTML>

