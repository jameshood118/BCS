<?
///check password in database
$host = "10.6.166.84" ;
$user = "ayersfarm" ;
$pass = "Farmersmarket1" ;
$db = "ayersfarm" ;
$table="products";

$show_all = "SELECT * FROM $table ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<SELECT NAME="products'.$x.'" id="products">');
print('<OPTION VALUE="No Product Selected" selected> Products </option>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$product = $row[ "Product" ]."";
$category = $row[ "Category" ]."";
$description = $row[ "Description" ]."";

print('<OPTION VALUE="'.$Idnum.'"> '.$product.' </option>');


$number=$number+1;

if ($number>1){
print ('</tr>');
$number=0;
}


}
print ('</select>');
///end show menu items

?>