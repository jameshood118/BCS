<html><body>
<?php 
$product_id=$_POST['product_id'];

$login= $_POST['login'];
$loginpass= $_POST["password"];
$filename="images/products/".$product_id.".jpg";
$destination="images/products/thumbs/".$product_id.".jpg";
$tinydestination="images/products/thumbs/tiny/".$product_id.".jpg";

$size=getimagesize($filename);
if ($size[0]>$size[1]) { 
$newheight="120";
$delta=(120/$size[0]);
$newwidth=($size[1]*$delta);

} else {
$newheight="120";
$delta=(120/$size[1]);
$newwidth=($size[0]*$delta); 
}

print ("Idnum: ".$product_id);
print ("<br>Source File: ".$filename);
print ("<br>Destination: ".$destination);
print ("<br>Login: ".$login);
print ("<br>Password: ".$loginpass."<BR>");

////////////// starting of JPG thumb nail creation//////////
if(file_exists($filename)){
$im=ImageCreateFromJPEG($filename);
$width=ImageSx($im); // Original picture width is stored
$height=ImageSy($im); // Original picture height is stored
$newimage=imagecreatetruecolor($newwidth,$newheight);
imageCopyResized($newimage,$im,0,0,0,0,$newwidth,$newheight,$width,$height);
ImageJpeg($newimage,$destination);
} else {
print ("File ".$filename."does not exist.");
}
//////////////// End of JPG thumb nail creation //////////

$size=getimagesize($filename);
if ($size[0]>$size[1]) { 
$newheight="85";
$delta=(85/$size[0]);
$newwidth=($size[1]*$delta);

} else {
$newheight="85";
$delta=(85/$size[1]);
$newwidth=($size[0]*$delta); 
}

print ("Idnum: ".$product_id);
print ("<br>Source File: ".$filename);
print ("<br>Destination: ".$tinydestination);
print ("<br>Login: ".$login);
print ("<br>Password: ".$loginpass."<BR>");

////////////// starting of JPG thumb nail creation//////////
if(file_exists($filename)){
$tinyim=ImageCreateFromJPEG($filename);
$tinywidth=ImageSx($tinyim); // Original picture width is stored
$tinyheight=ImageSy($tinyim); // Original picture height is stored
$newtinyimage=imagecreatetruecolor($newtinywidth,$newtinyheight);
imageCopyResized($newtinyimage,$tinyim,0,0,0,0,$newtinywidth,$newtinyheight,$tinywidth,$tinyheight);
ImageJpeg($newtinyimage,$tinydestination);
} else {
print ("File ".$filename."does not exist.");
}
//////////////// End of JPG thumb nail creation //////////

?>

<form name="return" method="post" action="admin_products.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
</body></html>