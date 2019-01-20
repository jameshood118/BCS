<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="styles.php" rel="stylesheet" type="text/css">
<title>Ayers Farm | Edit Product</title>


    <script type="text/javascript" src="swfobject.js"></script>

</head>

<body>

<div id="menu"> 
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="225" height="241">
        <param name="movie" value="flash/menu.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" />
		<embed src="flash/menu.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="225" height="241" name="menu"></embed>
        <!--[if IE ]>
        <object type="application/x-shockwave-flash" data="flash/menu.swf" width="225" height="241">
		<param name="movie" value="flash/menu.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" />
				<embed src="flash/menu.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="225" height="241" name="menu"></embed>
        <!--<![endif]-->
          <p>Alternative content</p>
        <!--[if IE ]>
        </object>
        <!--<![endif]-->
      </object>
</div>

<div id="content"> 
  <div class="top" align=center> 
    <p style="height:10px;">&nbsp;</p>
    <p class="title"> </p>
    
    <p class="title"><br><br></p>
  </div>
  <div class="middle" align=center> 
    
	
	
	
	<?php 
$stock=$_POST['stock'];

$login=$_POST['login'];
$loginpass=$_POST['loginpass'];

///check password in database
$host = "10.6.166.84" ;
$user = "ayersfarm" ;
$pass = "Farmersmarket1" ;
$db = "ayersfarm" ;
$table = "passwords" ;

$show_all = "SELECT * FROM $table
WHERE Username = '$login'
ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$user_stock = $row[ "Idnum" ]."";
$username = $row[ "Username" ]."";
$password = $row[ "Password" ]."";
$email = $row[ "Email" ]."";

}

if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?var1='.$username.'&var2='.$password.'";</script>';
}

$sub_message='Logged in as: '.$login.'';
	print ("<span class=subheading>".$submessage."</span>");
///end check password in database


$table="products";

$show_all = "SELECT * FROM $table
WHERE Idnum='$stock'
ORDER BY Category, Product";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ()); 
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$stock = $row[ "Idnum" ]."";
$category = $row[ "Category" ]."";
$product = $row[ "Product" ]."";
$description = $row[ "Description" ]."";
$price = $row[ "Price" ]."";

$jan = $row[ "Jan" ]."";
$feb = $row[ "Feb" ]."";
$mar = $row[ "Mar" ]."";
$apr = $row[ "Apr" ]."";
$may = $row[ "May" ]."";
$jun = $row[ "Jun" ]."";
$jul = $row[ "Jul" ]."";
$aug = $row[ "Aug" ]."";
$sep = $row[ "Sep" ]."";
$oct = $row[ "Oct" ]."";
$nov = $row[ "Nov" ]."";
$december = $row[ "December" ]."";

if ($jan=="yes") {
$check1="checked";
}

if ($feb=="yes") {
$check2="checked";
}

if ($mar=="yes") {
$check3="checked";
}

if ($apr=="yes") {
$check4="checked";
}

if ($may=="yes") {
$check5="checked";
}

if ($jun=="yes") {
$check6="checked";
}

if ($jul=="yes") {
$check7="checked";
}

if ($aug=="yes") {
$check8="checked";
}

if ($sep=="yes") {
$check9="checked";
}

if ($oct=="yes") {
$check10="checked";
}

if ($nov=="yes") {
$check11="checked";
}

if ($december=="yes") {
$check12="checked";
}



if ($price=="") {
$price="Call";
} else {
$price="$".$price;
}

}
		
	?>
	
	
	
	
	
	
	<form name="editproduct" id="editproduct" method="post" action="alter_product.php" enctype="multipart/form-data">
	  <p>Editing Item #:<?php echo $stock?> - 
        <input type=text name="product" value="<?php echo $product?>">
        <br>
        <br>
        Select Category<br>
        <select name="category">
          <?php
	  $show_all = "SELECT * FROM $table ORDER BY Category";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ()); 
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$list_category=$row['Category'];

if ($list_category == $category){
$matched="selected";
} else {
$matched="";
}

if ($old_category <> $list_category) {
print ('<option value="'.$list_category.'" '.$matched.'>'.$list_category.'</option>');
$old_category=$list_category;
} 

}
	  ?>
          <option value="New Category">Enter New Category Below</option>
        </select>
        <br>
        <br>
        <input type=text name="nc_name" >
        <br>
        <br>
        Description:<br>
        <textarea name="description" cols="50" id="description"><?php echo $description?></textarea>
        <br>
        <br>
        Price: 
        <input type=text name="price" value="<?php echo $price?>" >
      </p>Add New Image:
	  <input name="file" type="file" />
      <p>Availability<br>
        <input name="jan" type="checkbox" id="jan" value="yes" <?php echo $check1?>/>
        Jan | 
        <input name="feb" type="checkbox" id="feb" value="yes" <?php echo $check2?>/>
        Feb | 
        <input name="mar" type="checkbox" id="mar" value="yes" <?php echo $check3?>/>
        Mar | 
        <input name="apr" type="checkbox" id="apr" value="yes" <?php echo $check4?>/>
        Apr | 
        <input name="may" type="checkbox" id="may" value="yes" <?php echo $check5?>/>
        May | 
        <input name="jun" type="checkbox" id="jun" value="yes" <?php echo $check6?>/>
        Jun <br>
        <input name="jul" type="checkbox" id="jul" value="yes" <?php echo $check7?>/>
        Jul | 
        <input name="aug" type="checkbox" id="aug" value="yes" <?php echo $check8?>/>
        Aug | 
        <input name="sep" type="checkbox" id="sep" value="yes" <?php echo $check9?>/>
        Sep | 
        <input name="oct" type="checkbox" id="oct" value="yes" <?php echo $check10?>/>
        Oct | 
        <input name="nov" type="checkbox" id="nov" value="yes" <?php echo $check11?>/>
        Nov | 
        <input name="december" type="checkbox" id="dec" value="yes" <?php echo $check12?>/>
        Dec<br>
        <br>
        <input type="hidden" value=<?php echo $stock?> name="stock">
		<input type="hidden" value=<?php echo $login?> name="login">
	<input type="hidden" value=<?php echo $loginpass?> name="loginpass">
		<input type="submit" name="Submit3" value="Submit Changes" />
        <br>
        <br>
        <br>
      </p>
    </form>
	
	
	<form name="form1" id="form1" method="post" action="admin_products.php">
	<input type="hidden" value=<?php echo $login?> name="login">
	<input type="hidden" value=<?php echo $loginpass?> name="loginpass">
      <input type="submit" name="Submit" value="Back to Admin Products" />
    </form><br><br>
    <form name="form2" id="form2" method="" action="index.html">
      <input type="submit" name="Submit2" value="Logout" />
    </form>
    <div class="text" id="mytext">&nbsp;</div>
	<script type="text/javascript" language="javascript">
	
	var divh=document.getElementById( 'mytable' ).offsetHeight;

	document.getElementById("mytext").style.height = divh+"px";</script>
  </div>
  <div class="bottom"></div>
  <div id="submenu"> <a href="index.html" target="_self">Home</a> | <a href="about.htm" target="_self">About 
    Us</a> | <a href="products.php" target="_self">Products</a> | <a href="contact.html" target="_self">Contact 
    Us</a> | <a href="admin.php" target="_self">Admin</a> </div>
</div>

</body>
</html>