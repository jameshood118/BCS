<?php 

$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;

$show_all="SELECT * from $table ORDER by Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$price = $row[ "Price" ]."";
$product_id = $row[ "Product_id" ]."";
$color = $row[ "Color" ]."";
$product_name = $row[ "Product_name" ]."";

if ($product_id=="N/A") {
$new_product_id=$product_name.'-'.$color;
$append=" - changed";
} else {
$new_product_id=$product_id;
$append="";
}

print ($new_product_id.$append."<br>");

mysql_query("UPDATE $table SET Product_id='$new_product_id' WHERE Idnum = '$Idnum'") or die(mysql_error());

}

?>