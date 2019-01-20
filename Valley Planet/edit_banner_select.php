<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Select Existing Banner to Edit</title>
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
              <table width="650" border="0" cellspacing="5" cellpadding="0">
                <tr> 
                  <td width="640"><div align="center"> 
                      <p class="title" style="text-align:center">Select Existing 
                        Banner to Edit</p>
                    </div></td>
                </tr>
                <tr> 
                  <td>
				  
				  <?php 
				  ///show banners here
				  $host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "banner_ads" ;

$show_all = "SELECT * FROM $table
ORDER BY Idnum";

print ('<table width=600 border=1 cellpadding=10>');

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

print ('<tr align=left>');

print ('<td width=480>');
print ('<img src="images/banners/'.$banner.'">');
print ('</td>');

print ('<td width=120 valign=top>');
print ($advertiser."<br><br>");
print ('Clicks: '.$clicks.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
print ('Impressions: '.$impressions.'<br><br>');
print ('<form name="form1" method="post" action="edit_banner.php">');
print ('<input type="hidden" name="banner_id" value="'.$idnum.'">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="submit" name="Submit2" value="Edit Banner">');
print ('</form>');
print ('<br><br>');
print ('<form name="form1" method="post" action="delete_banner.php">');
print ('<input type="hidden" name="banner_id" value="'.$idnum.'">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="submit" name="Submit2" value="Delete Banner">');
print ('</form>');
print ('</td>');
print ('</tr>');

}


print ('</table>');
				  ///end show banners
				  ?>
				  
				  </td>
                </tr>
              </table>
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
