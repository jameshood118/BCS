<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Delete Event</title>
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
                  <td width="640" colspan="2"><div align="center"> 
                      <?php 
	
	
				  ///delete business script
				  
$selected_business=$_POST['selected_business'];		  
			 
				  
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listings" ;
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE FROM $table WHERE id = '$selected_business'") or die(mysql_error());
				  
				  ///end delete event script
				  ?>
                      <?php 
				  

				  ?>
                    </div></td>
                </tr>
                <tr> 
                  <td width="320"><div align="center"> 
                      <form name="return" method="post" action="admin_menu.php">
                        <input type="hidden" name="login" value="<?php echo $login?>">
                        <input type="hidden" name="password" value="<?php echo $password?>">
                      </form>
                      <script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
                    </div></td>
                  <td width="320"><div align="center"> </div></td>
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
      </table>
    </div>
    <div class="footer"> 
      <?php include('footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>
