<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<STYLE TYPE="text/css" MEDIA=screen>
<!--
form {
	font-size:60%;
	}
select {
	font-size:90%;
	}
-->
</STYLE>
</head>

<body>



 
     
<center>
<form name="fileup" method="post" enctype="multipart/form-data" action="snippets3.php">
  <?php
  // start of dynamic form
  $uploadNeed = $_POST['uploadNeed'];
  for($x=0;$x<$uploadNeed;$x++){
  ?>
<input name="userfiles<?php echo $x;?>" type="file" id="uploadFile<?php echo $x;?>">
<input name="radio<?php echo $x?>" type="radio" value="seasons" />Seasons
<input name="radio<?php echo $x?>" type="radio" value="products" />Products
<input name="radio<?php echo $x?>" type="radio" value="Images" />Images<BR />
<?php include('includes/seasons.php'); ?>
<?php include('includes/products.php'); ?><BR /><BR /></font>
  <?php
  // end of for loop
  }  ?>





<!-- change below to your max -->
<input type="hidden" name="MAX_FILE_SIZE" value="1000000000">
<input type="submit" value="submit" name="submit">
</form>  </center>
</p>

</body>
</html>


