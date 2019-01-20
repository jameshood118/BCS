<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Edit Banner</title>
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
    <?php include('checkpass.php');?>
    <div class="body"> 
      <table border=0 cellpadding=4 cellspacing=0 style="margin-left:70px;">
        <tr> 
          <!--Body Text-->
          <td valign="top" width="660"> <div align="center"> 
              <FORM ENCTYPE="multipart/form-data" ACTION="alter_banner.php" METHOD=POST>
                <table width="650" border="0" cellspacing="5" cellpadding="0">
                  <tr> 
                    <td colspan="2"><div align="center"> 
                        <p class="title" style="text-align:center">Edit Banner</p>
                      </div></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right"> 
                        <?php 

$banner_id=$_POST['banner_id'];						

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "banner_ads" ;

$show_all = "SELECT * FROM $table
WHERE Idnum = '$banner_id'
ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$idnum  = $row["Idnum" ];
$advertiser = $row["Advertiser"];
$contact = $row['Contact'];
$phone = $row['Phone'];
$address = $row['Address'];
$banner = $row['Banner'];
$ppc = $row['PPC'];
$cpm = $row['CPM'];
$clicks = $row['Clicks'];
$impressions = $row['Impressions'];
$url = $row['Url'];
$slot = $row['Slot'];
$page = $row['Page'];
}

$split_address=explode("|", $address);
$address1=$split_address['0'];
$address2=$split_address['1'];

					?>
                        Editing Banner #: <?php echo $idnum?></div></td>
                    <td width="320"> <input name="banner_id" type="hidden" id="banner_id" value="<?php echo $banner_id?>"> 
                    </td>
                  </tr>
                  <tr> 
                    <td><div align="right">Select Existing Advertiser:</div></td>
                    <td><select name="advertiser">
                        <?php 
						$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "banner_ads" ;

$show_all2 = "SELECT * FROM $table
ORDER BY Advertiser";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result2 = mysql_query ($show_all2) or die ( mysql_error ());

$old_advertiser="";
while ($row2 = mysql_fetch_array ($result2))
{
$advertiser_list  = $row2["Advertiser" ];

if ($advertiser_list==$advertiser) {
$advertiser_select="selected";
} else {
$advertiser_select="";
}

if ($old_advertiser<>$advertiser_list){
print ('<option value="'.$advertiser_list.'" '.$advertiser_select.' >'.$advertiser_list.'</option>');
$old_advertiser=$advertiser_list;
}



}
						?>
                      </select></td>
                  </tr>
                  <tr> 
                    <td> <div align="right">or Enter New Advertiser:</div></td>
                    <td><input name="new_advertiser" type="text" id="new_advertiser"></td>
                  </tr>
                  <tr> 
                    <td> <div align="right">Contact Name:</div></td>
                    <td><input name="contact_name" type="text" id="contact_name" value="<?php echo $contact?>"></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right">Contact Phone:</div></td>
                    <td width="320"><input name="contact_phone" type="text" id="contact_phone" value="<?php echo $phone?>"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Contact Address Line 1:</div></td>
                    <td><input name="address1" type="text" id="address1" value="<?php echo $address1?>"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Contact Address Line 2:</div></td>
                    <td><input name="address2" type="text" id="address2" value="<?php echo $address2?>"></td>
                  </tr>
                  <tr> 
                    <td colspan="2"><div align="center"> 
                        <?php 
					print ('<img src="images/banners/'.$banner.'">');
					?>
                      </div></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Replace Banner File:</div></td>
                    <td><input type="file" name="file">
					<?php
					print ('<input name="old_filename" type="hidden" id="old_filename" value="'.$banner.'">');
					?>
					</td>
                  </tr>
                  <tr> 
                    <td colspan="2"><div align="center"><em><strong><font size="-1">Top 
                        Banners: 468 wide x 60 tall --- Side Banners: 120 wide 
                        x 240 tall</font></strong></em></div></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Cost Per Click:</div></td>
                    <td> <input name="ppc" type="text" id="ppc" value="<?php echo $ppc?>"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Cost Per 1000 Impressions (views):</div></td>
                    <td><input name="cpm" type="text" id="cpm" value="<?php echo $cpm?>"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">URL To Click Through To:</div></td>
                    <td><input name="url" type="text" id="url" value="<?php echo $url?>"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Slot:</div></td>
                    <td><select name="slot" id="slot">
                        <option value="top" <?php if ($slot=="top") {print ('selected');}?>>Top</option>
                        <option value="right" <?php if ($slot=="right") {print ('selected');}?>>Right</option>
                        <option value="left" <?php if ($slot=="left") {print ('selected');}?>>Left</option>
                        <option value="side" <?php if ($slot=="side") {print ('selected');}?>>Either 
                        Side</option>
                      </select></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Set to Specific Page:</div></td>
                    <td><select name="set_page" id="set_page">
                        <option value="none">None</option>
                        <option value="home" <?php if ($page=="home") {print ('selected');}?>>Home</option>
                        <option value="about us" <?php if ($page=="about us") {print ('selected');}?>>About 
                        Us</option>
                        <option value="advertise" <?php if ($page=="advertise") {print ('selected');}?>>Advertise</option>
                        <option value="archives" <?php if ($page=="archives") {print ('selected');}?>>Archives</option>
                        <option value="store" <?php if ($page=="store") {print ('selected');}?>>Store</option>
                        <option value="contact" <?php if ($page=="contact") {print ('selected');}?>>Contact</option>
                        <option value="business" <?php if ($page=="business") {print ('selected');}?>>Business</option>
                        <option value="classified" <?php if ($page=="classified") {print ('selected');}?>>Classifieds</option>
                        <option value="events" <?php if ($page=="events") {print ('selected');}?>>Event 
                        Calendar</option>
                        <option value="music" <?php if ($page=="music") {print ('selected');}?>>Music 
                        Calendar</option>
                        <option value="gas" <?php if ($page=="gas") {print ('selected');}?>>Gas 
                        Prices</option>
                        <option value="horoscopes" <?php if ($page=="horoscopes") {print ('selected');}?>>Horoscopes</option>
                        <option value="lottery" <?php if ($page=="lottery") {print ('selected');}?>>Lottery</option>
                        <option value="movies" <?php if ($page=="movies") {print ('selected');}?>>Movie 
                        Times</option>
                        <option value="weather" <?php if ($page=="weather") {print ('selected');}?>>Weather</option>
                      </select></td>
                  </tr>
                  <tr> 
                    <td>&nbsp;</td>
                    <td><div align="right"> </div></td>
                  </tr>
                  <tr> 
                    <td colspan="2"><div align="center"> 
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input type="submit" name="Submit" value="Submit">
                      </div></td>
                  </tr>
                </table>
              </form>
            </div>
          <td valign="top" align="right" width="120"> 
            <!--SIDE BANNER ADS-->
            <div class="banners-side"> 
              <?php include('banners-side.php'); ?>
            </div>
            <!--END-->
          </td>
        </tr>
        <tr> 
          <td width="660"> <div align="center"> 
              <form name="form1" method="post" action="admin_menu.php">
                <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                <input type="submit" name="Submit2" value="Back to Admin Menu">
              </form>
            </div></td>
          <td width="120"> </td>
        </tr>
      </table>
    </div>
    <div class="footer"> 
      <?php include('footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>
