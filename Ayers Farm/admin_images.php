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
    <p class="title">	
	</p>
   

    <p class="title"><br><br></p>
  </div>
 
  <div class="middle"> 
	<center>ADMIN IMAGES
	<form name="form1" id="form1" method="post" action="add_images.php">
	<input type="hidden" value=<?php echo $login?> name="login">
	<input type="hidden" value=<?php echo $loginpass?> name="loginpass">
      <input type="submit" name="Submit" value="Add Images" />
    </form>
	
	<form name="form2" id="form2" method="post" action="admin_menu.php">
	<input type="hidden" value=<?php echo $login?> name="login">
	<input type="hidden" value=<?php echo $loginpass?> name="loginpass">
      <input type="submit" name="Submit" value="Back to Admin" />
    </form>
	<?php

$winterdir = "images/winter";
$winterhandle=opendir($winterdir);
  
$winterfile = readdir($winterhandle);
$winterarray = array();
  
$count = 0;
     while (($winterfile = readdir($winterhandle))!==false) {
      if ($winterfile != "." && $winterfile != ".." && ereg(".jpg",$winterfile)) {
     $winterarray[] = $winterfile;
      $count++;
      }
    }
    echo "There are $count image(s) within the <i>$winterdir</i> Directory<BR>";
		echo "<HR width=65%>";
	
	closedir($winterhandle); 

foreach($winterarray as $winterimages)
 {
  print ('<BR><img src="images/winter/'.$winterimages.'" width="400">');
  print ('<form action="delete_images.php" method="post" name="delete">');
  print ('<input name="winterimages" type="hidden" value="'.$winterimages.'" />');
  print ('<input name="winterdirectory" type="hidden" value="'.$winterdir.'" />');
  print ('<input type="hidden" value='.$login.' name="login">');
  print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
  print ('<input type="hidden" value="winter" name="location">');
  print ('<input name="delete" type="submit" value="Delete" />');
  print ('</form><BR>');
 }
?>

	<?php

$springdir = "images/spring";
$springhandle=opendir($springdir);
  
$springfile = readdir($springhandle);
$springarray = array();
  
$count = 0;
     while (($springfile = readdir($springhandle))!==false) {
      if ($springfile != "." && $springfile != ".." && ereg(".jpg",$springfile)) {
     $springarray[] = $springfile;
      $count++;
      }
    }
    echo "There are $count image(s) within the <i>$springdir</i> Directory<BR>";
		echo "<HR width=65%>";
	
	closedir($springhandle); 

foreach($springarray as $springimages)
 {
  print ('<BR><img src="images/spring/'.$springimages.'" width="400">');
  print ('<form action="delete_images.php" method="post" name="delete">');
  print ('<input name="springimages" type="hidden" value="'.$springimages.'" />');
  print ('<input name="springdirectory" type="hidden" value="'.$springdir.'" />');
  print ('<input type="hidden" value='.$login.' name="login">');
  print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
  print ('<input type="hidden" value="spring" name="location">');
  print ('<input name="delete" type="submit" value="Delete" />');
  print ('</form><BR>');
 }
?>

	<?php

$summerdir = "images/summer";
$summerhandle=opendir($summerdir);
  
$summerfile = readdir($summerhandle);
$summerarray = array();
  
$count = 0;
     while (($summerfile = readdir($summerhandle))!==false) {
      if ($summerfile != "." && $summerfile != ".." && ereg(".jpg",$summerfile)) {
     $summerarray[] = $summerfile;
      $count++;
      }
    }
    echo "There are $count image(s) within the <i>$summerdir</i> Directory<BR>";
	echo "<HR width=65%>";
	
	closedir($summerhandle); 

foreach($summerarray as $summerimages)
 {
  print ('<BR><img src="images/summer/'.$summerimages.'" width="400">');
  print ('<form action="delete_images.php" method="post" name="delete">');
  print ('<input name="summerimages" type="hidden" value="'.$summerimages.'" />');
  print ('<input name="summerdirectory" type="hidden" value="'.$summerdir.'" />');
  print ('<input type="hidden" value='.$login.' name="login">');
  print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
  print ('<input type="hidden" value="summer" name="location">');
  print ('<input name="delete" type="submit" value="Delete" />');
  print ('</form><BR>');
 }
?>

<?php

$falldir = "images/fall";
$fallhandle=opendir($falldir);
  
$fallfile = readdir($fallhandle);
$fallarray = array();
  
$count = 0;
     while (($fallfile = readdir($fallhandle))!==false) {
      if ($fallfile != "." && $fallfile != ".." && ereg(".jpg",$fallfile)) {
     $fallarray[] = $fallfile;
      $count++;
      }
    }
    echo "There are $count image(s) within the <i>$falldir</i> Directory<BR>";
		echo "<HR width=65%>";
	
	closedir($fallhandle); 

foreach($fallarray as $fallimages)
 {
  print ('<BR><img src="images/fall/'.$fallimages.'" width="400">');
  print ('<form action="delete_images.php" method="post" name="delete">');
  print ('<input name="fallimages" type="hidden" value="'.$fallimages.'" />');
  print ('<input name="falldirectory" type="hidden" value="'.$falldir.'" />');
  print ('<input type="hidden" value='.$login.' name="login">');
  print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
  print ('<input type="hidden" value="fall" name="location">');
  print ('<input name="delete" type="submit" value="Delete" />');
  print ('</form><BR>');
 }
?>
<HR width="65%">

<?php

$productsdir = "images/itempics";
$productshandle=opendir($productsdir);
  
$productsfile = readdir($productshandle);
$productsarray = array();
  
$count = 0;
     while (($productsfile = readdir($productshandle))!==false) {
      if ($productsfile != "." && $productsfile != ".." && ereg(".jpg",$productsfile)) {
     $productsarray[] = $productsfile;
      $count++;
      }
    }
    echo "There are $count image(s) within the <i>$productsdir</i> Directory<BR>";
		echo "<HR width=65%>";
	
	closedir($productshandle); 

foreach($productsarray as $productsimages)
 {
  print ('<BR><img src="images/itempics/'.$productsimages.'" width="400">');
  print ('<form action="delete_images.php" method="post" name="delete">');
  print ('<input name="productsimages" type="hidden" value="'.$productsimages.'" />');
  print ('<input name="productsdirectory" type="hidden" value="'.$productsdir.'" />');
  print ('<input type="hidden" value='.$login.' name="login">');
  print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
  print ('<input type="hidden" value="products" name="location">');
  print ('<input name="delete" type="submit" value="Delete" />');
  print ('</form><BR>');
 }
?>

<?php

$imagesdir = "images/slides";
$imageshandle=opendir($imagesdir);
  
$imagesfile = readdir($imageshandle);
$imagesarray = array();
  
$count = 0;
     while (($imagesfile = readdir($imageshandle))!==false) {
      if ($imagesfile != "." && $imagesfile != ".." && ereg(".jpg",$imagesfile)) {
     $imagesarray[] = $imagesfile;
      $count++;
      }
    }
    echo "There are $count image(s) within the <i>$imagesdir</i> Directory<BR>";
		echo "<HR width=65%>";
	
	closedir($imageshandle); 

foreach($imagesarray as $imagesimages)
 {
  print ('<BR><img src="images/slides/'.$imagesimages.'" width="400">');
  print ('<form action="delete_images.php" method="post" name="delete">');
  print ('<input name="imagesimages" type="hidden" value="'.$imagesimages.'" />');
  print ('<input name="imagesdirectory" type="hidden" value="'.$imagesdir.'" />');
  print ('<input type="hidden" value='.$login.' name="login">');
  print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
  print ('<input type="hidden" value="images" name="location">');
  print ('<input name="delete" type="submit" value="Delete" />');
  print ('</form><BR>');
 }
?>

</center>
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