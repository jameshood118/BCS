<html>
<head>
<title>Rocket City Drywall | Huntsville, Alabama</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>

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

<div id="wrapper">
  <div id="container"> 
    <!-- Header -->
    <div id="header"> 
      <div id="header-img"> <img src="images/collage3.jpg"/> </div>
      <!--menu-->
      <div id="menu"> 
        <?php include('menu.php'); ?>
      </div>
      <!--end menu-->
      <div id="feature"> 
        <?php include('email_list.php'); ?>
      </div>
    </div>
    <!-- End Header -->
    <!-- START CONTENT -->
    <div id="content"> 
      <div id="titlebar"> 
        <p class="title">Our Products</p>
      </div>
      <div id="sidebar"> 
        <p class="sublink-title">About Us</p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes1');" target="_self">Drywall</a></p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes2');" target="_self">Shingles</a></p>
      </div>
      <div id="body"> 
        <!-- drywall -->
        <div name="newboxes" id="newboxes1" style="display:block;"> 
          <p class="subtitle">Drywall</p>
          <p class="text"> 
            <?php 
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "products" ;

$show_all = "SELECT * FROM $table WHERE Category='Drywall' ORDER BY Idnum DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<table width=550>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$product_id = $row[ "Product_id" ]."";
$product_name = $row[ "Product_name" ]."";
$manufacturer = $row[ "Manufacturer" ]."";
$category = $row[ "Category" ]."";
$sub_category = $row[ "Sub_Category" ]."";
$brand = $row[ "Brand" ]."";
$description = $row[ "Description" ]."";
$price = $row[ "Price" ]."";
$warranty = $row[ "Warranty" ]."";
$variations = $row[ "variations" ]."";


print ('<tr><td colspan=2 class="staff-header" valign="center" align="left" style="padding:4px;color:#000;"><strong>Product Name: '.$product_name.'</strong></td></tr><tr><td width="350" valign="top" align="left">');
print ('Product ID:  '.$product_id.'<BR>');
print ('Manufacturer: '.$manufacturer.'<BR>');
print ('Category: '.$category.'</strong><BR>'); 
print ('Sub-category: '.$sub_category.'<BR>'); 
print ('Brand: '.$brand.'<BR/>'); 
print ('Description: '.$description.'<strong><BR>');
print ('</td><td valign="top" align="right"><a href="images/products/'.$Idnum.'.jpg" border="0" target="_blank"><img src="images/products/thumbs/'.$Idnum.'.jpg" border="0"></a>');
print ('</td>');

$number=$number+1;

if ($number>0){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>
          </p>
        </div>
        <!--end -->
        <!-- shingles -->
        <div name="newboxes" id="newboxes2" style="display:none;"> 
          <p class="subtitle">Shingles</p>
          <p class="text"> 
            <?php 
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "products" ;

$show_all = "SELECT * FROM $table WHERE Category='Shingles' ORDER BY Idnum DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<table width=550>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$product_id = $row[ "Product_id" ]."";
$product_name = $row[ "Product_name" ]."";
$manufacturer = $row[ "Manufacturer" ]."";
$category = $row[ "Category" ]."";
$sub_category = $row[ "Sub_Category" ]."";
$brand = $row[ "Brand" ]."";
$description = $row[ "Description" ]."";
$price = $row[ "Price" ]."";
$warranty = $row[ "Warranty" ]."";
$variations = $row[ "variations" ]."";


print ('<tr><td colspan=2 class="staff-header" valign="center" align="left" style="padding:4px;color:#000;"><strong>Product Name: '.$product_name.'</strong></td></tr><tr><td width="350" valign="top" align="left">');
print ('Product ID:  '.$product_id.'<BR>');
print ('Manufacturer: '.$manufacturer.'<BR>');
print ('Category: '.$category.'</strong><BR>'); 
print ('Sub-category: '.$sub_category.'<BR>'); 
print ('Brand: '.$brand.'<BR/>'); 
print ('Description: '.$description.'<strong><BR>');
print ('</td><td valign="top" align="right"><a href="images/products/'.$Idnum.'.jpg" border="0" target="_blank"><img src="images/products/thumbs/'.$Idnum.'.jpg" border="0"></a>');
print ('</td>');

$number=$number+1;

if ($number>0){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>
          </p>
        </div>
        <!--end shingles-->
      </div>
      <!--end body-->
    </div>
    <!-- END CONTENT -->
  </div>
<!-- END CONTAINER -->

<!-- START WRAPPERfooter -->

  <div id="wrapperfooter"> 
    <!-- Footer -->
    <div id="footer"> 
      <div class="admin"> 
        <?php include('admin.php'); ?>
      </div>
    </div>
    <!-- END footer -->
  </div>
<!-- END WRAPPERfooter -->

</div> 
<!-- END WRAPPER -->

</body>
</html>
