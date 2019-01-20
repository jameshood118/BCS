<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="styles.php" rel="stylesheet" type="text/css">
<title>Ayers Farm | Products</title>


    <script type="text/javascript" src="swfobject.js"></script>
	<script language="JavaScript" type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+"products-changed.php?month="+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
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
    <?php 
	$selectedmonth=$_POST['selectedmonth'];
	if ($selectedmonth=="Jan") {
	$jan="selected";
	}
	
	if ($selectedmonth=="Feb") {
	$feb="selected";
	}
	
	if ($selectedmonth=="Mar") {
	$mar="selected";
	}
	
	if ($selectedmonth=="Apr") {
	$apr="selected";
	}
	
	if ($selectedmonth=="May") {
	$may="selected";
	}
	
	if ($selectedmonth=="Jun") {
	$jun="selected";
	}
	
	if ($selectedmonth=="Jul") {
	$jul="selected";
	}
	
	if ($selectedmonth=="Aug") {
	$aug="selected";
	}
	
	if ($selectedmonth=="Sep") {
	$sep="selected";
	}
	
	if ($selectedmonth=="Oct") {
	$oct="selected";
	}
	
	if ($selectedmonth=="Nov") {
	$nov="selected";
	}
	
	if ($selectedmonth=="December") {
	$dec="selected";
	}
	
	?>

<form name="form1" id="form1" method="post" action="">
<select name="selectedmonth" onChange="MM_jumpMenu('parent',this,0)"> 
 <option value="" selected>Available Now!</option>
        <option value="Jan" <?php echo $jan?>>Available in January</option>
        <option value="Feb" <?php echo $feb?>>Available in February</option>
        <option value="Mar" <?php echo $mar?>>Available in March</option>
        <option value="Apr" <?php echo $apr?>>Available in April</option>
        <option value="May" <?php echo $may?>>Available in May</option>
        <option value="Jun" <?php echo $jun?>>Available in June</option>
        <option value="Jul" <?php echo $jul?>>Available in July</option>
        <option value="Aug" <?php echo $aug?>>Available in August</option>
        <option value="Sep" <?php echo $sep?>>Available in September</option>
        <option value="Oct" <?php echo $oct?>>Available in October</option>
        <option value="Nov" <?php echo $nov?>>Available in November</option>
        <option value="December" <?php echo $dec?>>Available in December</option>
      </select>
     </form>
    <p class="title"><br><br></p>
  </div>
  <div class="middle"> 
    <?php 
			
			 $host = "10.6.166.84" ;
$user = "ayersfarm" ;
$pass = "Farmersmarket1" ;
$db = "ayersfarm" ;
$table = "products" ;

if ($selectedmonth<>"") {
$thismonth=$selectedmonth;
} else {
$thismonth=date("M");
}

if ($thismonth=="Dec"){
$thismonth=="December";
}




$show_all = "SELECT * FROM $table
where ".$thismonth." = 'yes'
ORDER BY Category, Product";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


print ('<table width="450" id="mytable" align="left">');
print ('<tr height=40></tr>');


while ($row = mysql_fetch_array ($result))
{

$stock = $row[ "Idnum" ]."";
$category = $row[ "Category" ]."";
$product = $row[ "Product" ]."";
$description = $row[ "Description" ]."";
$price = $row[ "Price" ]."";
if ($price=="") {
$price="Call For Pricing.";
} else {
$price="$".$price;
}

///print category row if category is new
if ($old_category<>$category) {
print ('<tr align=left>');
print ('<td width=50 align=left></td>');
print ('<td width=400 colspan=3>');
print ('<span class=subheading><u><strong>'.$category.'</strong></u></span></tr>');
}
///end print category row
$old_category=$category;
///print item specifics here
print ('<tr align=left>');
print ('<td width=50 align=left></td>');
print ('<td width=170>');

if ($old_service<>$product) {
print ('<span class=subheading2>'.$product.'</span>');
}
$old_service=$product;

if ($description<>""){
print ('<td width=100><span class=p4>'.$description.'</span></td>');
} else {
print ('<td width=100 background="images/black_dot.png"></td>');
}

print ('<td width=130 align=right><span class=p4><strong>'.$price.'</strong></span></td>');
print ('</tr>');
///end print item specifics

///bracket below ends while loop
}

print ('</table>');			
			?>
			
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