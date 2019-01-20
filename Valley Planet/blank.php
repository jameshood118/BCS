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
      <table border=0 cellpadding=4 cellspacing=0>
        <tr> 
          <!--Body Text-->
          <td valign="top" width="325" style="padding-right:20px;"> <p class="title"> 
              Welcome to Valley Planet. </p>
            <p class="subtitle">This Planet Rocks!&trade;</p>
            <p class="subtitle2">This is another type of subtitle.</p>
            <p class="text-index">Lorem ipsum dolor sit amet, consectetuer adipiscing 
              elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
              magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis 
              nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
              ex ea commodo consequat.</p>
            <p style="margin-top:50px;padding-top:50px;">&nbsp;</p></td>
          <td width="300" valign="top" align="left"> <img src="images/blank-cover.jpg" alt="Cover"/> 
          </td>
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
