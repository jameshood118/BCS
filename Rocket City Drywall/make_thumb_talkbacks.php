<html><body>
<?php 
$Idnum=$_POST['Idnum'];
$filename="images/talkback/".$Idnum.".jpg";
$destination="images/talkback/thumbs/".$Idnum.".jpg";

$size=getimagesize($filename);
$newheight="120";
$delta=(120/$size[1]);
$newwidth=($size[0]*$delta);

echo $filename;
echo $Idnum;
print ("<BR>Idnum: ".$Idnum);
print ("<br>Source File: ".$filename);
print ("<br>Destination: ".$destination);

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

<form name="return" method="post" action="talkback.php">
</form>
<script language="javascript" type="text/javascript">
document.return.submit();
</script>

</body></html>