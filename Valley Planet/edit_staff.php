<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Edit Existing Writer</title>
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
		  
		 <?php  
		 $selected_staff=$_POST['selected_staff'];
		 
		 $host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "staff" ;

$show_all = "SELECT * FROM $table WHERE Idnum='$selected_staff'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$name = $row [ "Name" ]."";
$bio = $row [ "Bio" ]."";

}
?>
          <td valign="top" width="660"> <div align="center"> Edit Existing Writer/Staff
             <FORM ENCTYPE="multipart/form-data" ACTION="alter_staff.php" METHOD="post">
   Editing Writer/Staff: #: <?php echo $selected_staff?> Name: <?php echo $name?>
    <table width="660" border="0" cellspacing="0" cellpadding="5">
      <tr> 
        <td><div align="right">Name: </div></td>
        <td><input name="name" type="text" id="name" value="<?php echo $name?>"></td>
     </tr>
	 <tr> 
        <td> <div align="right"> Bio: </div></td>
        <td> <textarea name="bio" cols="30" rows="2" wrap="VIRTUAL" class="textarea1"><?php echo $bio?></textarea></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td> <div align="right">Upload Picture: </div></td>
        <td> <input type="file" name="file"> <div align="right"></div></td>
        </tr>
  <tr>
          <td> 
            <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="hidden" name="selected_staff" value="'.$selected_staff.'">');
					  ?>
            <input type="submit" name="Submit" value="Submit"></div> 
      </form></td>
      <td> <form name="form1" method="post" action="delete_staff.php">
          <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="hidden" name="selected_staff" value="'.$selected_staff.'">');
					  ?>
          <input type="submit" name="Submit2" value="Delete">
        </form></div> </td></tr>
  
  </form>
          </table></div> 
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
