<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Edit Article Category</title>
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
                    <td colspan="2"><div align="center"> 
                        <p class="title" style="text-align:center">Edit Event</p>
                      </div></td>
                  </tr>
                <?php 
			// Selected Listing is the selected Business Listing
				$selected_listing=$_POST['selected_listing'];
				
			// Selected Event is the event you are editing
				$event2edit=$_POST['event2edit'];
				
				print ('2.'.$selected_listing.'<BR>');
				print ('1.'.$event2edit.'<BR>');
				
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "events_revised" ;

$show_all = "SELECT * FROM $table WHERE Idnum='$event2edit' ";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$listingid=$row['Listingid'];
$listingname=$row['Listingname'];
}

echo "$listingname<BR>";
echo "$event2edit<BR>";

$host2="vpnews.db.4808198.hostedresource.com";
$user2 = "vpnews" ;
$pass2 = "Toshiba1" ;
$db2 = "vpnews" ;
$table2 = "listings" ;

$show_all2 = "SELECT * FROM $table2 WHERE id='$selected_listing' ";

mysql_connect ($host2,$user2,$pass2) or die ( mysql_error ());
mysql_select_db ($db2)or die ( mysql_error ());
$result2 = mysql_query ($show_all2) or die ( mysql_error ());


while ($row2 = mysql_fetch_array ($result2))
{
$id=$row2['id'];
$name=$row2['name'];
}
echo "$name<BR>";
echo "$selected_listing<BR>";

$table3 = "events_revised";

mysql_connect ($host3,$user3,$pass3) or die ( mysql_error ());
mysql_select_db ($db3)or die ( mysql_error ());

mysql_query("UPDATE $table3 set Idnum='$event2edit',
Listingame='$name',
Listingid='$selected_listing'
WHERE Idnum = '$event2edit") or die(mysql_error());
?>
				

                 
                  <tr> 
                    <td colspan="2"></td>
                  </tr> 
            </div> </td></tr></table>
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
