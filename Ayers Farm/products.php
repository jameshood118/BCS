<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<LINK REL="SHORTCUT ICON" HREF="favicon.ico">
<link href="styles.php" rel="stylesheet" type="text/css">
<style type="text/css">
.imagelink A:link {text-decoration: none; color:#3b2412;}
.imagelink A:visited {text-decoration: none; color:#3b2412;}
.imagelink A:active {text-decoration: none; color:#3b2412;}
.imagelink A:hover {text-decoration:none; color:#3b2412;} 
</style>

<title>Ayers Farm | Products</title>


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
    <?php 
	$selectedmonth=$_POST['selectedmonth'];
	$selected_season=$_POST['selected_season'];
	
	if ($selectedmonth<>"") {
$thismonth=$selectedmonth;
} else {
$thismonth=date("M");
$selectedmonth=$thismonth;
}

if ($thismonth=="Dec"){
$thismonth="December";
}
	
	if ($selectedmonth=="Jan") {
	$jan="selected";
	$monthlabel="January";
	$winter="selected";
	}
	
	if ($selectedmonth=="Feb") {
	$feb="selected";
	$monthlabel="February";
	$winter="selected";
	}
	
	if ($selectedmonth=="Mar") {
	$mar="selected";
	$monthlabel="March";
	$spring="selected";
	}
	
	if ($selectedmonth=="Apr") {
	$apr="selected";
	$monthlabel="April";
	$spring="selected";
	}
	
	if ($selectedmonth=="May") {
	$may="selected";
	$monthlabel="May";
	$spring="selected";
	}
	
	if ($selectedmonth=="Jun") {
	$jun="selected";
	$monthlabel="June";
	$summer="selected";
	}
	
	if ($selectedmonth=="Jul") {
	$jul="selected";
	$monthlabel="July";
	$summer="selected";
	}
	
	if ($selectedmonth=="Aug") {
	$aug="selected";
	$monthlabel="August";
	$summer="selected";
	}
	
	if ($selectedmonth=="Sep") {
	$sep="selected";
	$monthlabel="September";
	$fall="selected";
	}
	
	if ($selectedmonth=="Oct") {
	$oct="selected";
	$monthlabel="October";
	$fall="selected";
	}
	
	if ($selectedmonth=="Nov") {
	$nov="selected";
	$monthlabel="November";
	$fall="selected";
	}
	
	if ($selectedmonth=="Dec"){
	$selectedmonth="December";
	}
	
	if ($selectedmonth=="December") {
	$dec="selected";
	$monthlabel="December";
	$winter="selected";
	}
	
	?>

    <p class="title"><br><br></p>
  </div>
  <div class="middle"> 
    <?php 
			
			 $host = "10.6.166.84" ;
$user = "ayersfarm" ;
$pass = "Farmersmarket1" ;
$db = "ayersfarm" ;
$table = "products" ;




if ($selected_season<>"") {
$title_message="Products Available in the ".$selected_season." season.";
} else {
$title_message="Products Available in the month of ".$monthlabel.".";
}

$show_all = "SELECT * FROM $table
where ".$thismonth." = 'yes'
ORDER BY Category, Product";

if ($selected_season=="Spring") {
$show_all = "SELECT * FROM $table
where Mar = 'yes' or Apr = 'yes' or May = 'yes'
ORDER BY Category, Product";
}

if ($selected_season=="Summer") {
$show_all = "SELECT * FROM $table
where Jun = 'yes' or Jul = 'yes' or Aug = 'yes'
ORDER BY Category, Product";
}

if ($selected_season=="Fall") {
$show_all = "SELECT * FROM $table
where Sep = 'yes' or Oct = 'yes' or Nov = 'yes'
ORDER BY Category, Product";
}

if ($selected_season=="Winter") {
$show_all = "SELECT * FROM $table
where December = 'yes' or Jan = 'yes' or Feb = 'yes'
ORDER BY Category, Product";
}

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


print ('<table width="450" id="mytable" align="left">');
print ('<tr>');
print ('<td width=450 colspan=4 align=center>');
print ("<span class=title>".$title_message."</span><br><br>");
print ('<table width=450>');
print ('<tr align=left>');
print ('<td width=50></td>');
print ('<td width=350>');
print ('<form name="form1" id="form1" method="post" action="">');
print ('<select name="selectedmonth">');
print ('<option value="Jan" '.$jan.'>Available in January</option>');
print ('<option value="Feb" '.$feb.'>Available in February</option>');
print ('<option value="Mar" '.$mar.'>Available in March</option>');
print ('<option value="Apr" '.$apr.'>Available in April</option>');
print ('<option value="May" '.$may.'>Available in May</option>');
print ('<option value="Jun" '.$jun.'>Available in June</option>');
print ('<option value="Jul" '.$jul.'>Available in July</option>');
print ('<option value="Aug" '.$aug.'>Available in August</option>');
print ('<option value="Sep" '.$sep.'>Available in September</option>');
print ('<option value="Oct" '.$oct.'>Available in October</option>');
print ('<option value="Nov" '.$nov.'>Available in November</option>');
print ('<option value="Dec" '.$dec.'>Available in December</option>');
print ('</select>');
print ('<input type="submit" name="Submit" value="Show Products" />');
print ('</form>');
print ('</td>');
print ('<td width=50>');
print ('</td>');
print ('</tr>');
print ('</table>');

print ('</td>');
print ('</tr>');


while ($row = mysql_fetch_array ($result))
{

$stock = $row[ "Idnum" ]."";
$category = $row[ "Category" ]."";
$product = $row[ "Product" ]."";
$description = $row[ "Description" ]."";
$price = $row[ "Price" ]."";
if ($price=="") {
$price="Call For Pricing.";
} 
///print category row if category is new
if ($old_category<>$category) {
print ('<tr align=left>');
print ('<td width=100 align=left></td>');
print ('<td width=400 colspan=3>');
print ('<span class=subheading><u><strong>'.$category.'</strong></u></span></td></tr>');
}
///end print category row
$old_category=$category;
///print item specifics here
print ('<tr align=left>');


if ($old_service<>$product) {
print ('<td width=15 align=center>');
print ('<td width=100>');
print ('<span class=subheading2>'.$product.'</span>');



print ('<td width=100 background="images/black_dot.png"></td>');

print ('<td width=130 align=right><span class=p4><strong>');
if(file_exists('images/itempics/'.$stock.'.jpg')){
print ('<a href="images/itempics/'.$stock.'.jpg" target="_blank" class="imagelink">View Image</a>');
}else{
echo "</td>";
};
print ('</strong></span></td></tr>');
}
$old_service=$product;
if ($description <>"") {
print ('<tr align left>');
print ('<td width=50></td>');
print ('<td width=400 colspan=3 align=left>');
print ('<span class=text><i>'.$description.'</i></span>');
print ('</td>');
print ('</tr>');
}
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
  <div id="submenu"> <a href="index.html" target="_self">Home</a> | <a href="about.php" target="_self">About 
    Us</a> | <a href="products.php" target="_self">Products</a> | <a href="contact.html" target="_self">Contact 
    Us</a> | <a href="admin.php" target="_self">Admin</a> </div>
</div>

</body>
</html>