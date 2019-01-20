<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="styles.php" rel="stylesheet" type="text/css">
<title>Ayers Farm | Products</title>


    <script type="text/javascript" src="swfobject.js"></script>

</head>

<body>

<div id="menu"> 
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="225" height="241">
    <param name="movie" value="flash/menu.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="transparent" />
    <param name="bgcolor" value="#ffffff" />
    <embed src="flash/menu.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="225" height="241" name="menu"></embed> 
    <!--[if IE ]>
        <object type="application/x-shockwave-flash" data="flash/menu.swf" width="225" height="241">
		<param name="movie" value="flash/menu.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" />
				<embed src="flash/menu.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="225" height="241" name="menu"></embed>
        <!--<![endif]-->
    <p>Alternative content</p>
    <!--[if IE ]>
        </object>
        <!--<![endif]-->
  </object>
</div>

<div id="content"> 
  <div class="top" align=center> 

	<?php 
	///check login
	$login=$_POST['login'];
	$loginpass=$_POST['loginpass'];
	$idnum=$_POST['Idnum'];


	
	$var1=$_GET['$var1'];
	$var2=$_GET['$var2'];
	
	if ($login=="" and $var1<>"") {
	$login=$var1;
	$loginpass=$var2;
	}
	
	$host = "10.6.166.84" ;
$user = "ayersfarm" ;
$pass = "Farmersmarket1" ;
$db = "ayersfarm" ;
$table = "passwords" ;

$show_all = "SELECT * FROM $table
WHERE Username = '$login'
ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$stock = $row[ "Idnum" ]."";
$username = $row[ "Username" ]."";
$password = $row[ "Password" ]."";
$email = $row[ "Email" ]."";


}

if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?var1='.$username.'&var2='.$password.'";</script>';
}

$sub_message='Logged in as: '.$login.'';
	print ("<span class=subheading>".$submessage."</span>");
	///end check login
	?>
    <p style="height:10px;">&nbsp;</p>
    <p class="title">Admin Images<BR> </p>
    <p class="title"><br>
      <br>
    </p>
  </div>
  <div class="middle" align="center">
    <BR>
<?php


///checks the database
$host = "10.6.166.84" ;
$user = "ayersfarm" ;
$pass = "Farmersmarket1" ;
$db = "ayersfarm" ;
$table="products";

$show_all = "SELECT * FROM $table ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


$x=$_POST['uploadNeed'];
$counter=0;
$num=0;

while ($counter <$x){
$category=$_POST['radio'.$num];
$seasons=$_POST['seasons'.$num];
$products=$_POST['products'.$num];
$source_file=$_FILES['userfiles'.$num]['tmp_name'];
$imagename=$_FILES['userfiles'.$num]['name'];

$newname = str_replace (" ", "", $imagename);


// this counts the season folders
$fallcnt=0;
$falldirname="images/fall";
$falldn=opendir($falldirname);
while ($dircount=readdir($falldn))
{
$fallcnt=$fallcnt+1;
}
closedir ($falldn);

$fallcount=$fallcnt-1;

$wintercnt=0;
$winterdirname="images/winter";
$winterdn=opendir($winterdirname);
while ($dircount=readdir($winterdn))
{
$wintercnt=$wintercnt+1;
}
closedir ($winterdn);

$wintercount=$wintercnt-1;

$summercnt=0;
$summerdirname="images/summer";
$summerdn=opendir($summerdirname);
while ($dircount=readdir($summerdn))
{
$summercnt=$summercnt+1;
}
closedir ($summerdn);

$summercount=$summercnt-1;

$springcnt=0;
$springdirname="images/spring";
$springdn=opendir($springdirname);
while ($dircount=readdir($springdn))
{
$springcnt=$springcnt+1;
}
closedir ($springdn);

$springcount=$springcnt-1;
// end folder count
// Slides Count
$slidescnt=0;
$slidesdirname="images/slides";
$slidesdn=opendir($slidesdirname);
while ($dircount=readdir($slidesdn))
{
$slidescnt=$slidescnt+1;
}
closedir ($slidesdn);

$slidescount=$slidescnt-1;



///upload image
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="ayersfarm";
$ftp_user_pass="Farmersmarket1";
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// check connection
if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user <i>$ftp_user_name</i>";
        exit;
    } else {
        echo "<BR><strong>Connected:</strong> $ftp_server, for user <i>$ftp_user_name</i><BR>";
    }

// upload the file


switch ($category){
	case 'seasons':
		switch ($seasons){
			case 'winter':
				$destination_file="images/".$seasons."/".$seasons."".$wintercount.".jpg";
				break;
			case 'spring':
				$destination_file="images/".$seasons."/".$seasons."".$springcount.".jpg";
				break;
			case 'summer':
				$destination_file="images/".$seasons."/".$seasons."".$summercount.".jpg";
				break;
			case 'fall':
				$destination_file="images/".$seasons."/".$seasons."".$fallcount.".jpg";
				break;
				}
		break;

	case 'products':
		$destination_file="images/itempics/".$products.".jpg";
		break;
	case 'images':
		$destination_file="images/slides/".$slidescount.".jpg";
		break;
}

	

print("<br><strong>Source File:</strong> ".$source_file."<br>");
print("<strong>Destination File:</strong> ".$destination_file."<BR>");

///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "<BR><BR><strong>Uploaded:</strong> $source_file to $ftp_server as <i>$destination_file</i><BR><BR>";
    ///end upload script

}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
///end upload image
$counter=$counter+1;
$num=$num+1;
}

$size=getimagesize($destination_file);
$newwidth="440";
$delta=(440/$size[0]);
$newheight=($size[1]*$delta);

print ("<br>Source File: ".$destination_file);
print ("<br>Destination: ".$destination_file);

////////////// starting of JPG thumb nail creation//////////
if(file_exists($destination_file)){
$im=ImageCreateFromJPEG($destination_file);
$width=ImageSx($im); // Original picture width is stored
$height=ImageSy($im); // Original picture height is stored
$newimage=imagecreatetruecolor($newwidth,$newheight);
imageCopyResized($newimage,$im,0,0,0,0,400,300,$width,$height);
ImageJpeg($newimage,$destination_file);
} else {
print ("File ".$destination_file."does not exist.");
}
//////////////// End of JPG thumb nail creation //////////

?>	
<form name="return" method="post" action="admin_images.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="loginpass" value="<?php echo $loginpass?>">
<input type="submit" name="Submit" value="Return" />
</form>

<script language="javascript" type="text/javascript">
document.form['return'].submit();
</script> 
    <div class="text" id="mytext">&nbsp;</div>
    <script type="text/javascript" language="javascript">
	
	var divh=document.getElementById( 'mytable' ).offsetHeight;

	document.getElementById("mytext").style.height = divh+"px";</script>
  </div>
  <div class="bottom"></div>
  <div id="submenu"> <a href="index.html" target="_self">Home</a> | <a href="about.htm" target="_self">About 
    Us</a> | <a href="products.php" target="_self">Products</a> | <a href="contact.html" target="_self">Contact 
    Us</a> | <a href="admin.php" target="_self">Admin</a> </div>
</div>

</body>
</html>