<html><body>
<?php 
$Idnum=$_POST['Idnum'];
$login= $_POST['login'];
$loginpass= $_POST["password"];
$filename="images/products/".$Idnum.".jpg";
$destination="images/products/thumbs/".$Idnum.".jpg";

$size=getimagesize($filename);
$newheight="120";
$delta=(120/$size[1]);
$newwidth=($size[0]*$delta);

print ("Idnum: ".$Idnum);
print ("<br>Source File: ".$filename);
print ("<br>Destination: ".$destination);
print ("<br>Login: ".$login);
print ("<br>Password: ".$loginpass);

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

?>

<form name="return" method="post" action="admin_products.php">
<input type="hidden" name="Idnum" value="<?php echo $Idnum?>">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.return.submit();
</script>

</body></html>