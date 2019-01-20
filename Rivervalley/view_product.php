<?php 
$product_name=$_GET['var1'];
$Idnum=$_GET['var2'];
$manufacturer=$_GET['var3'];  


$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;

$mainview = "SELECT * FROM products WHERE Product_name='$product_name'";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($mainview) or die ( mysql_error ());

//* Product Details *//
print ('<table width="450" cellpadding="10" cellspacing="5" align="center" style="background:#fff;border:1px solid #000;"><tr>');
print ('<td align="left" valign="top">');
print ('<span style="font-size:125%;"><strong>'.$product_name.'</strong> by '.$manufacturer.'</span></td></tr>');
print ('<tr><td style="text-align:left;font-size:90%;" align="left" valign="top">');
print ('<strong>Please choose your color:</strong>');
print ('<br/></td></tr>');
print ('<tr><td><div align="center">');
print ('<table align="center"><tr>');

$old_product_name="";
while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$product_id = $row[ "Product_id" ]."";
$product_name = $row[ "Product_name" ]."";
$product_group = $row[ "Product_group" ]."";
$manufacturer = $row[ "Manufacturer" ]."";
$category = $row[ "Category" ]."";
$color = $row[ "Color" ]."";
$width = $row[ "Width" ]."";
$size = $row[ "Size" ]."";
$style = $row[ "Style" ]."";
$price = $row[ "Price" ]."";
$clearance = $row[ "Clearance" ]."";

$image="images/products/thumbs/".$Idnum.".jpg";

if (!file_exists($image)) {
$image="images/products/thumbs/default.jpg";
}

if ($old_color<>$color) {
print ('<td width="150" align="center" valign="top" style="text-align:center;font-size:75%;padding:10px;" align="center" valign="top">');
print ('<a href="color_details.php?var1='.$product_name.'&var2='.$Idnum.'&var3='.$manufacturer.'&var4='.$color.'">');
print ('<img src="'.$image.'" width="120" border="0" style=""/></a>');
print ('<br/>');
print (''.$color.'<BR>');

$total=$total+1;
print ('</td>');

$number=$number+1;

if ($number>1){
print ('</tr>');
$number=0;
}

}

$old_color=$color;

}

print ('</tr></table>');
print ('</div></td></tr>');
print ('</table>');
///end show menu items 
?>