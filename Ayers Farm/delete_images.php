<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="styles.php" rel="stylesheet" type="text/css">
<title>Ayers Farm | Images</title>


    <script type="text/javascript" src="swfobject.js"></script>

</head>

<body>

<div id="menu"> 
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="225" height="241">
        <param name="movie" value="flash/menu.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" />
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
	$winterimages=$_POST['winterimages'];
	$winterdir=$_POST['winterdirectory'];
	
	$springimages=$_POST['springimages'];
	$springdir=$_POST['springdirectory'];
	
	$summerimages=$_POST['summerimages'];
	$summerdir=$_POST['summerdirectory'];
	
	$fallimages=$_POST['fallimages'];
	$falldir=$_POST['falldirectory'];
	
	$productsimages=$_POST['productsimages'];
	$productsdir=$_POST['productsdirectory'];
	
    $imagesimages=$_POST['imagesimages'];
	$imagesdir=$_POST['imagesdirectory'];
	
	$location=$_POST['location'];
	

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
    <p class="title">Admin Images<BR><BR> </p> 

<p class="title"><br><br></p>
  </div>
  <div class="middle" align="center">
<?php
///Delete Image Start
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="ayersfarm";
$ftp_user_pass="Farmersmarket1";
$conn_id = ftp_connect($ftp_server);

$winterdelete ="$winterdir/$winterimages";

$springdelete ="$springdir/$springimages";

$summerdelete ="$summerdir/$summerimages";

$falldelete ="$falldir/$fallimages";

$productsdelete ="$productsdir/$productsimages";

$imagesdelete ="$imagesdir/$imagesimages";


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


///delete switches
switch ($location){
	case 'winter':
		$delete = ftp_delete($conn_id, $winterdelete);
		break;
	case 'spring':
		$delete = ftp_delete($conn_id, $springdelete);
		break;
	case 'summer':
		$delete = ftp_delete($conn_id, $summerdelete);
		break;
	case 'fall':
		$delete = ftp_delete($conn_id, $falldelete);
		break;
	case 'products':
		$delete = ftp_delete($conn_id, $productsdelete);
		break;
	case 'images':
		$delete = ftp_delete($conn_id, $imagesdelete);
		break;
}

// close the FTP stream
ftp_close($conn_id);
///end upload image
 ?>
<BR><BR><BR> 
 
<form name="return" method="post" action="admin_images.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="loginpass" value="<?php echo $loginpass?>">
  <input type="submit" name="Submit" value="Item Deleted Click Here">
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