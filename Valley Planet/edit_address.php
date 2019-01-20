<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Edit Address</title>
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
          <td valign="top" width="660">
		  <div align="center"> 
              <FORM ENCTYPE="multipart/form-data" ACTION="alter_address.php" METHOD=POST>
                <table width="650" border="0" cellspacing="5" cellpadding="0">
                  <tr> 
                    <td colspan="2"><div align="center"> 
                        <p class="title" style="text-align:center">Edit Address</p>
                      </div></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right"> 
                        <?php 

						

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "addresses" ;

$show_all = "SELECT * FROM $table
ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$idnum  = $row["Idnum" ];
$caption = $row["Caption"];
$name = $row['Name'];
$street_address = $row['Street_Address'];
$city = $row['City'];
$state = $row['State'];
$phone = $row['Phone'];
$fax = $row['Fax'];
$zip = $row['Zip'];
}


					?>
                        Editing Address: <?php echo $name?></div></td>
                    <td width="320"> <input name="address_id" type="hidden" id="address_id" value="<?php echo $idnum?>"> 
                    </td>
                  </tr>
                  <tr> 
                    <td><div align="right">Caption for Address:</div></td>
                    <td>
					<input name="caption" type="text" id="caption" value="<?php echo $caption?>">
					</td>
                  </tr>
                  <tr> 
                    <td> <div align="right">Enter New Name:</div></td>
                    <td><input name="name" type="text" id="name" value="<?php echo $name?>"></td>
                  </tr>
                  <tr> 
                    <td> <div align="right">Street Address:</div></td>
                    <td><input name="street_address" type="text" id="street_address" value="<?php echo $street_address?>"></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right">City:</div></td>
                    <td width="320"><input name="city" type="text" id="city" value="<?php echo $city?>"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">State:</div></td>
                    <td><input name="state" type="text" id="state" value="<?php echo $state?>"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Phone:</div></td>
                    <td><input name="phone" type="text" id="phone" value="<?php echo $phone?>"></td>
                  </tr>
				  <tr> 
                    <td><div align="right">Fax:</div></td>
                    <td><input name="fax" type="text" id="fax" value="<?php echo $fax?>"></td>
                  </tr>
				  <tr> 
                    <td><div align="right">Zip Code:</div></td>
                    <td><input name="zip" type="text" id="zip" value="<?php echo $zip?>"></td>
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
