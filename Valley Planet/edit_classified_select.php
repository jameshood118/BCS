<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Edit Classified Select</title>
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

              <FORM ENCTYPE="multipart/form-data" ACTION="edit_classified.php" METHOD=POST>
 
                <table width="469" border="0" cellspacing="2" cellpadding="0">
   <tr>
    <td>							 <?php 							
$class_host="vpnews.db.4808198.hostedresource.com";
$class_user = "vpnews" ;
$class_pass = "Toshiba1" ;
$class_db = "vpnews" ;
$class_table = "classified" ;

$class_show_all = "SELECT * FROM $class_table
ORDER BY headline";

print ('<center>Select a Classified to Edit: </center><BR></td></tr><tr><td><select name="selected_classified">');

mysql_connect ($class_host,$class_user,$class_pass) or die ( mysql_error ());
mysql_select_db ($class_db)or die ( mysql_error ());
$class_result = mysql_query ($class_show_all) or die ( mysql_error ());

while ($class_row = mysql_fetch_array ($class_result))
{
$class_id  = $class_row["id" ];
$class_headline = $class_row["headline"];


print ('<option value="'.$class_id.'">'.$class_headline.'</option>');

}
print ('</select>');

?></tr></table>  <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');

					  ?>
                        <input type="submit" name="Submit" value="Submit">
                      </div>
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
