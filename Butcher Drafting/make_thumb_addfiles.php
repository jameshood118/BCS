<html><body>
<?php 
$addfiles=$_POST['addfiles'];
$newname=$_POST['newname'];
$new_Idnum_num=$_POST['new_Idnum_num'];
$Idnum=$_POST['Idnum'];
$login= $_POST['login'];
$loginpass= $_POST["password"];
$filename="images/projects/".$newname."/".$addfiles."";
$destination="images/projects/".$newname."/thumbs/".$addfiles."";

$size=getimagesize($filename);
$newheight="120";
$delta=(120/$size[1]);
$newwidth=($size[0]*$delta);

print ("Add Files: ".$addfiles);
print ("<br>Source File: ".$filename);
print ("<br>Destination File: ".$destination);
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

<form name="return" method="post" action="admin_project.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>

</body></html>