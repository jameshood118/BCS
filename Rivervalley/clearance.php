<html>
<head>
<title>Clearance Page</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>



<body>

  
  <?php 				  

$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;


$show_all = "SELECT * FROM $table WHERE Clearance='Yes' ORDER by Idnum DESC";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());
							

print ('<br/><br/><table cellpadding="5" cellspacing="5" align="center"><tr>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$product_id = $row[ "Product_id" ]."";
$product_name = $row[ "Product_name" ]."";
$product_group = $row[ "Product_group" ]."";
$manufacturer = $row[ "Manufacturer" ]."";
$category = $row[ "Category" ]."";
$size = $row[ "Size" ]."";
$style = $row[ "Style" ]."";
$clearance = $row[ "Clearance" ]."";


print ('<td style="background:#fff;border:1px solid #000;font-size:75%;padding-top:10px;" align="center" valign="center" width="150">');
print ('<table><tr><td align="center" valign="center" width="150" height="120"><div align="center">');

if(file_exists('images/products/thumbs/'.$Idnum.'.jpg' )){
print ('<a href="product_details.php?var1='.$product_name.'&var2='.$Idnum.'&var3='.$manufacturer.'"><img src="images/products/thumbs/'.$Idnum.'.jpg" border="0" style="border:0px solid #000;" width="120" border="0"></a>');
}else{
print ('<img src="images/products/thumbs/default.jpg" width="120" border="0" style="border:0px solid #000;">');
};

print('</div>');
print ('</td></tr><tr><td align="center" valign="top" style="padding-top:5px;padding-left:5px;">');
print ('<div align="center"><strong>'.$product_name.'</strong><br/>by '.$manufacturer.'<br/>');
print ('<span style="font-size:90%;"><a href="product_details.php?var1='.$product_name.'&var2='.$Idnum.'&var3='.$manufacturer.'">View Product</a></span>');
$total=$total+1;
print ('</div></td></tr></table>');
print ('</td>');

$number=$number+1;

if ($number>4){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>



</body>
</html>