<?php
//***************************************
// This is downloaded from www.plus2net.com //
/// You can distribute this code with the link to www.plus2net.com ///
//  Please don't  remove the link to www.plus2net.com ///
// This is for your learning only not for commercial use. ///////
//The author is not responsible for any type of loss or problem or damage on using this script.//
/// You can use it at your own risk. /////
//*****************************************

$product_name=$_GET['var1'];
$Idnum=$_GET['var2'];
$manufacturer=$_GET['var3']; 
$color=$_GET['var4'];


$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;

$mainview = "SELECT * FROM products WHERE Product_name='$product_name'";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($mainview) or die ( mysql_error ());

?>

<SCRIPT language=JavaScript>
function reload(form)
{
var val=form.size.options[form.size.options.selectedIndex].value;
self.location='viewcolortest.php?size=' + val ;
}

</script>



<?

//* Product Details *//
print ('<table width="450" cellpadding="10" cellspacing="5" align="center" style="background:#fff;border:1px solid #000;"><tr>');
print ('<td colspan="2" align="left" valign="top">');
print ('<span style="font-size:125%;"><strong>'.$product_name.'</strong> by '.$manufacturer.'</span></td></tr>');
print ('<tr>');
print ('<td width="150" align="center" valign="top" style="text-align:center;font-size:75%;padding:10px;" align="center" valign="top">');
print ('<a href="images/products/'.$Idnum.'.jpg" target="_blank">');
print ('<img src="images/products/'.$Idnum.'.jpg" width="150" border="0" style="margin-bottom:10px;"/></a>');
print ('<br/>');
print ('<a href="images/products/'.$Idnum.'.jpg" target="_blank">View Larger Image</a>');
print ('</td>');

print ('<td style="text-align:left;font-size:90%;" align="left" valign="top">');
print ('<table cellpadding="2" cellspacing="1"');
print ('<tr><td>');

print ('<form action="" method="post" enctye="multipart/form-data">');
print ('<select name="size" onchange=\"reload(this.form)\"><option value="">Please select a size:</option>');

$old_size="";
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



if ($old_size<>$size) {
print ('<option value="'.$size.'">'.$size.'</option>');
}

$old_size=$size;

}

print ('</select>');
print ('</form>');
///end show menu items

print ('</td>');
print ('</tr></table>');
print ('</div></td></tr>');
print ('</table>');

?>