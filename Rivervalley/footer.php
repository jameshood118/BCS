<style type="text/css">
.links a:link, .links a {
	color:#fff;
	}
</style>
<div class="footer"> 


<?php 

$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;

$prodgroup = "SELECT * from $table ORDER by Idnum DESC";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($prodgroup) or die ( mysql_error ());

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

if ($old_product_group<>$product_group and file_exists('images/products/thumbs/tiny/'.$Idnum.'.jpg')) {
$backcount=$backcount+1;
$backgrounds[$backcount]='images/products/thumbs/tiny/'.$Idnum.'.jpg';
$links[$backcount]='product_details.php?var1='.$product_name.'&var2='.$idnum.'&var3='.$manufacturer.'';



$old_product_group=$product_group;
}

}
?>

<table width="960" height="150" align="center" cellpadding="0" cellspacing="0" style="background:url('images/new-items/new-items.png') no-repeat bottom center;">
<tr><td height="6">&nbsp;</td></tr>
<tr>
<td width="205">&nbsp;</td>
<td class="thumb" background="<?php echo $backgrounds[1]?>" style="background-color:#fff; background-repeat: no-repeat; background-position: center" width="110" valign="center">
<a href="<?php echo $links[1] ?>"><img src="images/new-items/thumb1.png" alt="" border="0" width="110" /></a>
</td>
<td class="thumb" background="<?php echo $backgrounds[2]?>" style="background-color:#fff; background-repeat: no-repeat; background-position: center" width="110" valign="top">
<a href="<?php echo $links[2] ?>"><img src="images/new-items/thumb2.png" alt="" border="0" width="110" /></a>
</td>
<td class="thumb" background="<?php echo $backgrounds[3]?>" style="background-color:#fff; background-repeat: no-repeat; background-position: center" width="110" valign="top">
<a href="<?php echo $links[3] ?>"><img src="images/new-items/thumb3.png" alt="" border="0" width="110" /></a>
</td>
<td class="thumb" background="<?php echo $backgrounds[4]?>" style="background-color:#fff; background-repeat: no-repeat; background-position: center" width="110" valign="top">
<a href="<?php echo $links[4] ?>"><img src="images/new-items/thumb4.png" alt="" border="0" width="110" /></a>
</td>
<td class="thumb" background="<?php echo $backgrounds[5]?>" style="background-color:#fff; background-repeat: no-repeat; background-position: center" width="110" valign="top">
<a href="<?php echo $links[5] ?>"><img src="images/new-items/thumb5.png" alt="" border="0" width="110" /></a>
</td>
<td width="205">&nbsp;</td>
</tr>

<tr>
<td class="links" colspan="7" height="34" align="center" valign="center" style="text-align:center;font-size:9pt;">
<a href="index.php" target="_self">Home</a> &bull; <a href="about.php" target="_self">About Us</a> &bull; <a href="products.php" target="_self">Products</a> &bull; <a href="contact.php" target="_self">Contact Us</a> &bull; <a href="#admin-login">Admin</a>
</td>
</tr>
</table>

<div align="center">
<p class="footer-text">
<?php 
function autoUpdatingCopyright($startYear){
 
    // given start year (e.g. 2004)
    $startYear = intval($startYear);
 
    // current year (e.g. 2007)
    $year = intval(date('Y'));
 
    // is the current year greater than the
    // given start year?
    if ($year > $startYear)
        return $startYear .'-'. $year;
    else
        return $startYear;
}
?>
&copy; <?php echo autoUpdatingCopyright(2009);?> Bjork Creative Services. All Rights Reserved. | Site By<a href="http://www.bjorkcs.com"> Bjork Creative Services</a>
</p>
</div>

	</div> 
	


</body>
</html>


