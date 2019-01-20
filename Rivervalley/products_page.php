   <?php 
				  
$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;

$prodgroup = "select Product_group, count(*) as Count from products group by Product_group";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($prodgroup) or die ( mysql_error ());

print ('Sort By: ');
print ('<form action="" method="post" enctye="multipart/form-data">');
print ('<SELECT NAME="sort">');
print ('<option value="Original">Original View</option>');
print ('<option value="All">All</option>');

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



if ($old_product_group<>$product_group) {
print ('<option value="'.$product_group.'">'.$product_group.'</option>');
}

$old_product_group=$product_group;


}
print ('</SELECT>');
print ('<input type="submit" name="Submit" value="Sort">');
print ('</form>');
///end show menu items
?>


  <?php 				  

$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;

$sort=$_POST['sort'];

$mainview = 'SELECT * FROM $table';


if ($sort<>"All" and $sort<>""){
$mainview="Select * from $table WHERE Product_group= '$sort' ORDER by Manufacturer, Product_name";
} else {
$mainview="Select * from $table ORDER by Product_group, Manufacturer, Product_name";
}




mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($mainview) or die ( mysql_error ());
							

print ('<br/><br/><table cellpadding="5" cellspacing="5" align="center"><tr>');
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



if ($product_name<>$old_product_name) {
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


$old_product_name=$product_name;









}
print ($total);
print ('</table>');
///end show menu items 
?>