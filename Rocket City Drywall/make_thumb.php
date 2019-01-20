<?php 
$Idnum=$_POST['Idnum'];
$login= $_POST["login"];
$loginpass= $_POST["password"];
$filename="images/samples/".$Idnum.".jpg";
$destination="images/thumbs/".$Idnum.".jpg";

$n_width="120";
$n_height="90";

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
$newimage=imagecreatetruecolor($n_width,$n_height);
imageCopyResized($newimage,$im,0,0,0,0,$n_width,$n_height,$width,$height);
ImageJpeg($newimage,$destination);
} else {
print ("File ".$filename."does not exist.");
}
//////////////// End of JPG thumb nail creation //////////

?>

<form name="return" method="post" action="admin_talkbacks.php">
<input type="hidden" name="Idnum" value="<?php echo $Idnum?>">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.return.submit();
</script> 