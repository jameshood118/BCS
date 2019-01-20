<html>
<head>
<title>Rocket City Drywall | Huntsville, Alabama</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
</head>

<body>

<div id="wrapper">
  
<div id="container"> 
  <!-- Header -->
  <div id="header"> 
    <div id="header-img"> <img src="images/collage1.jpg"/> </div>
    <!--menu-->
    <div id="menu"> 
      <?php include('menu.php'); ?>
    </div>
    <!--end menu-->
    <div id="feature"> 
      <p class="feature-title">Admin Page</p>
      <?php include('account_info.php'); ?>
    </div>
  </div>
  <!-- End Header -->
  <!-- START CONTENT -->
  <div id="content"> 
    <div id="body-admin"> 
      <p class="text-admin"> 
      <div align="center"> 
        <table>
          <tr> 
            <form name="form4" method="post" action="admin_menu.php">
              <input type="submit" name="Submit3" value="Back to Admin Menu">
              <input type="hidden" value="<?php echo $login?>" name="login">
              <input type="hidden" value="<?php echo $loginpass?>" name="password">
            </form>
            <form name="form4" method="post" action="add_products.php">
              <input type="submit" name="Submit3" value="Add Products">
              <input type="hidden" value="<?php echo $login?>" name="login">
              <input type="hidden" value="<?php echo $loginpass?>" name="password">
            </form>
          </tr>
        </table>
        <?php 
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "products" ;

$show_all = "SELECT * FROM $table ORDER by Idnum DESC";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());
	

print ('<table width=600>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$product_id = $row[ "Product_id" ]."";
$product_name = $row[ "Product_name" ]."";
$manufactorer = $row[ "Manufactorer" ]."";
$category = $row[ "Category" ]."";
$description = $row[ "Description" ]."";
$price = $row[ "Price" ]."";
$warranty = $row[ "Warranty" ]."";
$variations = $row[ "variations" ]."";


print ('<td width="300"><strong>Product Name: '.$product_name.'</strong><BR>');
print ('Manufacturer: '.$manufacturer.'<BR>'); 
print ('Product ID:  '.$product_id.'<BR>');
print ('Description: '.$description.'<strong><BR>');
print ('<a href="images/products/'.$Idnum.'.jpg" border="0" target="_blank"><img src="images/products/thumbs/'.$Idnum.'.jpg"></a><BR>');
print ('Category: '.$category.'</strong><BR><BR>');
print ('<form name="form1" id="form1" method="post" action="delete_products.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit1" value="Delete" />');
print ('</form>');
print ('<form name="form2" id="form2" method="post" action="edit_products.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Edit" />');
print ('</form>');
print ('</td>');

$number=$number+1;

if ($number>2){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?></p>
        </div>
      <!--end body-->
    </div>
    <!-- END CONTENT -->
  </div>
  <!-- END CONTAINER -->
  <!-- START WRAPPERfooter -->
  <div id="wrapperfooter"> 
    <!-- Footer -->
    <div id="footer"> </div>
    <!-- END footer -->
  </div>
  <!-- END WRAPPERfooter -->
</div> 
<!-- END WRAPPER -->

</body>
</html>
