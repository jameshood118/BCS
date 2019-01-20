<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="styles.php" rel="stylesheet" type="text/css">
<title>Ayers Farm | Products</title>


    <script type="text/javascript" src="swfobject.js"></script>
<STYLE TYPE="text/css" MEDIA=screen>
<!--
form {
	font-size:70%;
	}
select {
	font-size:90%;
	}
-->
</STYLE>	
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
	
	$var1=$_GET['var1'];
	$var2=$_GET['var2'];

	
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
    <p class="title"><strong>Admin Images</strong> </p> 


  </div>
  <div class="middle" align="center">
 	<center>
	
<form name="fileup" method="post" enctype="multipart/form-data" action="processFiles.php">
  <?php
  // start of dynamic form
  $uploadNeed = $_POST['uploadNeed'];
  for($x=0;$x<$uploadNeed;$x++){
  ?>
<input name="userfiles<?php echo $x;?>" type="file" id="userfiles">
<input name="radio<?php echo $x?>" type="radio" value="seasons" />Seasons
<input name="radio<?php echo $x?>" type="radio" value="products" />Products
<input name="radio<?php echo $x?>" type="radio" value="images" />Images<BR />
<?php include('includes/seasons.php'); ?>
<?php include('includes/products.php'); ?><BR /><BR /></font>
  <?php
  // end of for loop
  }  ?>




  <input name="uploadNeed" type="hidden" value="<?php echo $x?>">
  	 <input type="hidden" value=<?php echo $login?> name="login">
	<input type="hidden" value=<?php echo $loginpass?> name="loginpass">
<input type="submit" name="Submit" value="Submit">

<BR><BR>
	
</form>

 	 <form name="form4" method="post" action="admin_menu.php">
      <input type="submit" name="Submit3" value="Back to Admin Menu">
      <input type="hidden" value=<?php echo $login?> name="login">
	<input type="hidden" value=<?php echo $loginpass?> name="loginpass">
	</form>

<p>You need to select a file, a category, and a selection from the dropdown for each file</p>	
<?php
$uploadNeed = $_POST['uploadNeed'];
// start for loop
for($x=0;$x<$uploadNeed;$x++){
$file_name = $_FILES['uploadFile'. $x]['name'];
// strip file_name of slashes
$file_name = stripslashes($file_name);
$file_name = str_replace("'","",$file_name);
$copy = copy($_FILES['uploadFile'. $x]['tmp_name'],$file_name);
 // check if successfully copied
 } // end of loop
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