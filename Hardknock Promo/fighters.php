<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Hard Knock Promotions</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
<script src="swfobject.js" type="text/javascript"></script>
</head>

<body>
<div id="invis"> 
  <div id="header"> 
    <div id="admin"> 
      <?php include('admin.php'); ?>
    </div>
  </div>
  
    
<div id="content">
    <div id="menu"> 
      <?php include('menu.php'); ?>
    </div>
    
    <div id="flash-div">
	
	  <?php 
				  
$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "roster" ;

$show_all = "SELECT * FROM $table WHERE Girl='No'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

$old_item="";
while ($row = mysql_fetch_array ($result))

{


$rosterid = $row[ "Rosterid" ]."";
$name = $row[ "Name" ]."";
$height = $row[ "Height" ]."";
$weight = $row[ "Weight" ]."";
$style = $row[ "Style" ]."";
$record = $row[ "Record" ]."";
$measurement = $row[ "Measurement" ]."";
$girl = $row[ "Girl" ]."";

if ($product_name<>$old_item and $item_count<5){
$item_count=$item_count+1;
$data=$data.$Idnum."|";
$old_item=$product_name;
}



} ?>
      <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="800" height="400">
        <param name="movie" value="flash/fighters.swf">
        <param name="quality" value="high">
        <embed src="flash/fighters.swf" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="800" height="400"></embed></object>
      <!--end div2-->
    </div>
<!--end content--></div>
    
  	<div class="footer"> 
	<?php include('footer.php'); ?>
 	<!--end footer--></div>

<!--end invis--></div>


</body>
</html>
