<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

<style type="text/css">
<!--
.featurelinks {
	font-weight: bold;
	color: #ffc600;
	font-style: normal;
	text-decoration: none;
}
-->
</style>
<style type="text/css">
<!--
.category_titles {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 115%;
	font-weight: bold;
	color: #000;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.listing_names {
	font-weight: bold;
	color: #FFFFFF;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.listing_urls {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 90%;
	font-weight: bold;
	color: #669900;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.normal {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12;
	font-weight: normal;
	color: #FFFFFF;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}
-->
</style>
<script type="text/javascript" src="TypingText.js">
/****************************************************
* Typing Text script- By Twey @ Dynamic Drive Forums
* Visit Dynamic Drive for this script and more: http://www.dynamicdrive.com
* This notice MUST stay intact for legal use
****************************************************/
</script>

</head>

<body>
<div id="invis"> 
  <div id="header"> <span class="banner-top"> 
    <?php include('banner-top.php'); ?>
    </span> 
    <div id="menu"> 
      <?php include('menu.php'); ?>
    </div>
  </div>
  <div id="content"> 
    <div id="submenu"> 
      <?php include('submenu.php'); ?>
    </div>
    <div class="body"> 
      <table style="margin-left:70px;" border=0 cellpadding=4 cellspacing=0>
        <tr> 
          <!--Body Text-->
          <td valign="top" width="620" style="padding-right:20px;"> <p class="title">Store</p>
            <p class="text"> 
             <?php
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "store" ;

$show_all = "SELECT * FROM $table WHERE Category='Shirt'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$Idnum = $row["Idnum"];
$category = $row["Category"];
$name = $row["Name"];
$description = $row["Description"];
$price = $row["Price"];
?>
              <?php if(file_exists('images/store/thumbs/'.$Idnum.'.jpg' )){
print ('<a href="images/store/'.$Idnum.'.jpg"><img src="images/store/thumbs/'.$Idnum.'.jpg" border="0"/></a>');
}else{
echo "";};?>
              <?php if(file_exists('images/store/thumbs/'.$Idnum.'b.jpg' )){
print ('<a href="images/store/'.$Idnum.'b.jpg"><img src="images/store/thumbs/'.$Idnum.'b.jpg" border="0"/></a>');
}else{
echo "";
};	?>
              <BR>
              Name:<BR>
              <strong><?php echo $name?></strong><BR>
              Description:<BR>
              <?php echo $description?><BR>
            <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <input type="hidden" name="on0" value="Size">
              Size
              <select name="os0<?php $Idnum?>">
                <option value="Medium">Medium 
                <option value="Large">Large 
                <option value="Extra Large">Extra Large 
              </select>
              <input type="image" style="width:87px;height:23px;" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit3" alt="Make payments with PayPal - it's fast, free and secure!">
              <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="5" height="5"> 
              <input type="hidden" name="add" value="1">
              <input type="hidden" name="cmd" value="_cart">
              <input type="hidden" name="business" value="jill@valleyplanet.com">
              <input type="hidden" name="item_name" value="<?php echo $name?>">
              <input type="hidden" name="item_number" value="<?php echo $Idnum ?>">
              <input type="hidden" name="amount" value="<?php echo $price ?>">
              <input type="hidden" name="no_shipping" value="2">
              <input type="hidden" name="return" value="http://www.valleyplanet.com/paymentthanks.php">
              <input type="hidden" name="cancel_return" value="http://www.valleyplanet.com/paymentcancel.php">
              <input type="hidden" name="no_note" value="1">
              <input type="hidden" name="currency_code" value="USD">
              <input type="hidden" name="lc" value="US">
              <input type="hidden" name="bn" value="PP-ShopCartBF">
            </form>
            <BR>
            <BR> 
            <?php }?>
            <?php
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "store" ;

$show_all = "SELECT * FROM $table WHERE Category='Certificate'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$Idnum = $row["Idnum"];
$category = $row["Category"];
$name = $row["Name"];
$description = $row["Description"];
$price = $row["Price"];
$status = $row["Status"];
$count = $row["Count"];
?>
            <?php if(file_exists('images/store/thumbs/'.$Idnum.'.jpg' )){
print ('<a href="images/store/'.$Idnum.'.jpg"><img src="images/store/thumbs/'.$Idnum.'.jpg" border="0"/></a>');
}else{
echo "";};?>
            <?php if(file_exists('images/store/thumbs/'.$Idnum.'b.jpg' )){
print ('<a href="images/store/'.$Idnum.'b.jpg"><img src="images/store/thumbs/'.$Idnum.'b.jpg" border="0"/></a>');
}else{
echo "";
};	?>
            Name:<BR>
            <?php echo $name?><BR>
            Description:<BR>
            <?php echo $description?><BR>
            Status:<strong><?php echo $status?></strong><BR>
            Number Left: <?php echo $count?><BR> <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <BR>
              <input type="image" style="width:87px;height:23px;" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit3" alt="Make payments with PayPal - it's fast, free and secure!">
              <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="5" height="5"> 
              <input type="hidden" name="add" value="1">
              <input type="hidden" name="cmd" value="_cart">
              <input type="hidden" name="business" value="jill@valleyplanet.com">
              <input type="hidden" name="item_name" value="<?php echo $name?>">
              <input type="hidden" name="item_number" value="<?php echo $Idnum ?>">
              <input type="hidden" name="amount" value="<?php echo $price ?>">
              <input type="hidden" name="no_shipping" value="2">
              <input type="hidden" name="return" value="http://www.valleyplanet.com/paymentthanks.php">
              <input type="hidden" name="cancel_return" value="http://www.valleyplanet.com/paymentcancel.php">
              <input type="hidden" name="no_note" value="1">
              <input type="hidden" name="currency_code" value="USD">
              <input type="hidden" name="lc" value="US">
              <input type="hidden" name="bn" value="PP-ShopCartBF">
            </form>
            <?php }?>
            <?php
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "store" ;

$show_all = "SELECT * FROM $table WHERE Category='Book'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$Idnum = $row["Idnum"];
$category = $row["Category"];
$name = $row["Name"];
$description = $row["Description"];
$price = $row["Price"];
?>
            <?php if(file_exists('images/store/thumbs/'.$Idnum.'.jpg' )){
print ('<a href="images/store/'.$Idnum.'.jpg"><img src="images/store/thumbs/'.$Idnum.'.jpg" border="0"/></a>');
}else{
echo "";};?>
            <?php if(file_exists('images/store/thumbs/'.$Idnum.'b.jpg' )){
print ('<a href="images/store/'.$Idnum.'b.jpg"><img src="images/store/thumbs/'.$Idnum.'b.jpg" border="0"/></a>');
}else{
echo "";
};	?>
            <BR>
            Name:<BR>
            <strong><?php echo $name?></strong><BR>
            Description:<BR>
            <?php echo $description?><BR> <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
              <BR>
              <input type="image" style="width:87px;height:23px;" src="https://www.paypal.com/en_US/i/btn/x-click-but22.gif" border="0" name="submit3" alt="Make payments with PayPal - it's fast, free and secure!">
              <img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="5" height="5"> 
              <input type="hidden" name="add" value="1">
              <input type="hidden" name="cmd" value="_cart">
              <input type="hidden" name="business" value="jill@valleyplanet.com">
              <input type="hidden" name="item_name" value="<?php echo $name?>">
              <input type="hidden" name="item_number" value="<?php echo $Idnum ?>">
              <input type="hidden" name="amount" value="<?php echo $price ?>">
              <input type="hidden" name="no_shipping" value="2">
              <input type="hidden" name="return" value="http://www.valleyplanet.com/paymentthanks.php">
              <input type="hidden" name="cancel_return" value="http://www.valleyplanet.com/paymentcancel.php">
              <input type="hidden" name="no_note" value="1">
              <input type="hidden" name="currency_code" value="USD">
              <input type="hidden" name="lc" value="US">
              <input type="hidden" name="bn" value="PP-ShopCartBF">
            </form>
            <?php }?></p>
          </td>
          <td valign="top" width="120"> 
            <!--SIDE BANNER ADS-->
            <div class="banners-side"> 
              <?php include('banners-side.php'); ?>
            </div>
            <!--END-->
          </td>
        </tr>
      </table></p>
      </div>
    <div class="footer"> 
      <?php include('footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>