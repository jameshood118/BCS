<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Add New Banner</title>
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
              <FORM ENCTYPE="multipart/form-data" ACTION="insert_banner.php" METHOD=POST>
                <table width="650" border="0" cellspacing="5" cellpadding="0">
                  <tr> 
                    <td colspan="2"><div align="center"> 
                        <p class="title" style="text-align:center">Add New Banner</p>
                      </div></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right"> 
                        <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "banner_ads" ;

$show_all = "SELECT * FROM $table
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

$new_banner_id=$idnum+1;

					?>
                        Adding Banner #: <?php echo $new_banner_id?></div></td>
                    <td width="320"> <input name="new_banner" type="hidden" id="new_banner" value="<?php echo $new_banner_id?>"> 
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

if ($old_advertiser<>$advertiser_list){
print ('<option value="'.$advertiser_list.'">'.$advertiser_list.'</option>');
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
                    <td><input name="contact_name" type="text" id="contact_name"></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right">Contact Phone:</div></td>
                    <td width="320"><input name="contact_phone" type="text" id="contact_phone"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Contact Address Line 1:</div></td>
                    <td><input name="address1" type="text" id="address1"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Contact Address Line 2:</div></td>
                    <td><input name="address2" type="text" id="address2"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Banner File:</div></td>
                    <td><input type="file" name="file"></td>
                  </tr>
                  <tr> 
                    <td colspan="2"><div align="center"><em><strong><font size="-1">Top 
                        Banners: 392 wide x 100 tall --- Right Side Banners: 120 
                        wide x 240 tall -- Left Banners: 125 x 125</font></strong></em></div></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Banner File Type:</div></td>
                    <td> <select name="file_type" id="file_type">
                        <option value=".gif">GIF</option>
                        <option value=".jpg">JPG</option>
                      </select> </td>
                  </tr>
                  <tr> 
                    <td><div align="right">Cost Per Click:</div></td>
                    <td> <input name="ppc" type="text" id="ppc"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Cost Per 1000 Impressions (views):</div></td>
                    <td><input name="cpm" type="text" id="cpm"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">URL To Click Through To:</div></td>
                    <td><input name="url" type="text" id="url"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Slot:</div></td>
                    <td><select name="slot" id="slot">
                        <option value="top">Top</option>
                        <option value="right">Right</option>
                        <option value="left">Left</option>
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
