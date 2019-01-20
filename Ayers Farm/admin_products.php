<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="styles.php" rel="stylesheet" type="text/css">
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
  
  
  <?php 
	///check login
	$login=$_POST['login'];
	$loginpass=$_POST['loginpass'];
	
	$var1=$_GET['$var1'];
	$var2=$_GET['$var2'];
	
	if ($login=="" and $var1<>"") {
	$login=$var1;
	$loginpass=$var2;
	}
	
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

$stock = $row[ "Idnum" ]."";
$username = $row[ "Username" ]."";
$password = $row[ "Password" ]."";
$email = $row[ "Email" ]."";


}

if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?var1='.$username.'&var2='.$password.'";</script>';
}

$sub_message='Logged in as: '.$login.'';
	print ("<span class=subheading>".$submessage."</span>");
	///end check login
	?>
	
	 
    <p style="height:10px;">&nbsp;</p>
    <p class="title"> </p>
    <?php 
	$selectedmonth=$_POST['selectedmonth'];
	
		if ($selectedmonth<>"") {
	$thismonth=$selectedmonth;
	} else {
	$thismonth=date("M");
	$selectedmonth=$thismonth;
	}
	
	if ($thismonth=="Dec"){
	$thismonth=="December";
	}
	
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
	
	if ($selectedmonth=="All") {
	$viewall="selected";
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
	

	
	
	if ($selectedmonth=="All") {
	$show_all = "SELECT * FROM $table
	ORDER BY Category, Product";
	} else {
	$show_all = "SELECT * FROM $table
	where ".$thismonth." = 'yes'
	ORDER BY Category, Product";
	}
	
	
	
	mysql_connect ($host,$user,$pass) or die ( mysql_error ());
	mysql_select_db ($db)or die ( mysql_error ());
	$result = mysql_query ($show_all) or die ( mysql_error ());
	
	
	print ('<table width="450" id="mytable" border="1" align="left">');
	print ('<tr height=40>');
	print ('<td width=50 align=left></td>');
	print ('<td width=400 colspan=2 align=center>');
	
	print ('<form name="form1" id="form1" method="post" action="">');
	print ('<select name="selectedmonth">');
	print ('<option value="All"'.$viewall.'>View All Products</option>');
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
	print ('<option value="December" '.$dec.'>Available in December</option>');
	print ('</select>');
	print ('<input type="submit" name="Submit" value="Change Month" />');
	print ('<input type="hidden" value='.$login.' name="login">');
	print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
	print ('</form>');
	
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
	$price="Call";
	} else {
	$price="$".$price;
	}
	
	///print category row if category is new
	if ($old_category<>$category) {
	print ('<tr align=left>');
	print ('<td width=50 align=left></td>');
	print ('<td width=400 colspan=2>');
	print ('<span class=subheading><u><strong>'.$category.'</strong></u></span></tr>');
	}
	///end print category row
	$old_category=$category;
	///print item specifics here
	print ('<tr align=left valign=top>');
	print ('<td width=50 align=center>');
	print ('<form name="form1" id="form1" method="post" action="delete_product.php">');
	print ('<input type="hidden" value='.$login.' name="login">');
	print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
	print ('<input type="hidden" value='.$stock.' name="stock">');
	print ('<input type="submit" name="Submit2" value="X" />');
	print ('</form>');
	print ('</td>');
	print ('<td width=320>');
	
	print ('<span class=subheading2>'.$product.'</span>');
	if ($description<>"") {
	print ('<span class=text2><br><i>'.$description.'</i></span>');
	}
	
	
	print ('<td width=80 align=center>');
	print ('<form name="form1" id="form1" method="post" action="edit_product.php">');
	print ('<input type="hidden" value='.$login.' name="login">');
	print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
	print ('<input type="hidden" value='.$stock.' name="stock">');
	print ('<input type="submit" name="Submit2" value="Edit" />');
	print ('</form>');
	print ('</td>');
	
	print ('</tr>');
	///end print item specifics
	
	///bracket below ends while loop
	}
	print ('<tr><td width=450 height=20 colspan=3>');
	
	print ('<table width=450>');
	print ('<tr>');
	print ('<td width=200>');
	print ('<form name="form1" id="form1" method="post" action="admin_menu.php">');
	print ('<input type="hidden" value='.$login.' name="login">');
	print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
	print ('<input type="submit" name="Submit2" value="Admin Menu" />');
	print ('</form>');
	print ('</td>');
	print ('<td width=200>');
	print ('<form name="form1" id="form1" method="post" action="add_product.php">');
	print ('<input type="hidden" value='.$login.' name="login">');
	print ('<input type="hidden" value='.$loginpass.' name="loginpass">');
	print ('<input type="submit" name="Submit2" value="Add New Item" />');
	print ('</form>');
	print ('</td>');
	print ('<td width=50>');
	print ('<form name="form1" id="form1" method="" action="index.html">');
	print ('<input type="submit" name="Submit2" value="Exit" />');
	print ('</form>');
	print ('</td>');
	print ('</tr>');
	print ('</table>');
	
	print ('</td>');
	print ('</tr>');
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