<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>River Valley Comfort Shoes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
    <script type="text/javascript" src="swfobject.js"></script>

<script type="text/javascript">
	function showonlyone(thechosenone) {
      var newboxes = document.getElementsByTagName("div");
            for(var x=0; x<newboxes.length; x++) {
                  name = newboxes[x].getAttribute("name");
                  if (name == 'newboxes') {
                        if (newboxes[x].id == thechosenone) {
                        newboxes[x].style.display = 'block';
                  }
                  else {
                        newboxes[x].style.display = 'none';
                  }
            }
      }
}
	</script>
</head>

<body>
<div id="invis"> 
  <div id="header" style="background:transparent url('images/header2.png') no-repeat top center;"> 
    <div class="account-info"> 
      <?php 
							
$login= $_POST["login"];
$loginpass= $_POST["password"];
							
							
$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "users" ;

$show_all = "SELECT * FROM $table
WHERE Username = '$login'
ORDER BY User_ID";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$User_ID = $row[ "User_ID" ]."";
$username = $row[ "Username" ]."";
$password = $row[ "Password" ]."";
$email = $row[ "Email" ]."";
$account_type=$row["Account_Type"]."";

}

if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?error=true";</script>';
}
	  
	$sub_message='<strong>Logged in as</strong>: '.$login.' &bull; <strong>Account Type</strong>: '.$account_type.'';						
	?>
      <?php 
	print ('<div align=right>'.$sub_message.'</div>');
	?>
    </div>
    <div class="account-info" style="padding-top:25px;"> 
      <form name="form3" method="post" action="add_products1.php">
        <input type="submit" name="Submit2" value="Add New Product">
        <input type="hidden" value="<?php echo $login?>" name="login">
        <input type="hidden" value="<?php echo $loginpass?>" name="password">
      </form>
      <form name="form3" method="post" action="add_description.php">
        <input type="submit" name="Submit2" value="Add Product Descriptions">
        <input type="hidden" value="<?php echo $login?>" name="login">
        <input type="hidden" value="<?php echo $loginpass?>" name="password">
      </form>
      <form name="form4" method="post" action="admin_menu.php">
        <input type="submit" name="Submit3" value="Back to Admin Menu">
        <input type="hidden" value="<?php echo $login?>" name="login">
        <input type="hidden" value="<?php echo $loginpass?>" name="password">
      </form>
      <?php 
				  
$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;

$prodgroup = "select Product_group, count(*) as Count from products group by Product_group LIMIT 0, 30";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($prodgroup) or die ( mysql_error ());

print ('Sort By: ');
print ('<form action="" method="post" enctye="multipart/form-data">');
print ('<SELECT NAME="sort">');
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
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
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


$mainview = "SELECT * FROM $table ORDER BY Idnum";

$sort=$_POST['sort'];


if ($sort<>"All" and $sort<>""){
$mainview="Select * from $table WHERE Product_group= '$sort' ORDER by Manufacturer, Product_name";
} else {
$mainview="Select * from $table ORDER by Product_group, Manufacturer, Product_name";
}


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($mainview) or die ( mysql_error ());

print ('<div align=center><table width=900 cellpadding=10 align=center><tr>');

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


print ('<td width="300"><strong>'.$product_id.'</strong><BR>');
print ('<a href="images/products/'.$Idnum.'.jpg" target="_blank"><img src="images/products/thumbs/'.$Idnum.'.jpg" border="0"></a><BR>');
print ('<strong>Product Name: </strong>'.$product_name.'<BR>');
print ('<strong>Product Group: </strong>'.$product_group.'<BR>');
print ('<strong>Manufacturer: </strong>'.$manufacturer.'<BR>');
print ('<strong>Category: </strong>'.$category.'<BR>');
print ('<strong>Color: </strong>'.$color.'<BR><strong>Width: </strong>'.$width.'<BR>');
print ('<strong>Size: </strong>'.$size.'<BR><strong>Style: </strong>'.$style.'<BR>');
print ('<strong>Price: </strong>'.$price.'<BR>');
print ('<strong>On Clearance? </strong>'.$clearance.'<BR>');
print ('Put on Clearance: <form name="form1" id="form1" method="post" action="add_clearance.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Y" />');
print ('</form>');
print ('<form name="form1" id="form1" method="post" action="remove_clearance.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="N" />');
print ('</form>');
print ('<form name="form1" id="form1" method="post" action="edit_products.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Edit" />');
print ('</form>');
print ('<form name="form1" id="form1" method="post" action="delete_products.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Delete" />');
print ('</form><BR>');
print ('</td>');

$number=$number+1;

if ($number>3){
print ('</tr>');
$number=0;
}


}
print ('</table></div>');
///end show menu items
?>
    </div>
    <!--end body-->
  </div>
  <!--end content-->
</div>
<!--end invis-->


</div> 
	


</body>
</html>
