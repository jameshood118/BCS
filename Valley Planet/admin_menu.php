<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Admin Menu</title>
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
              <table width="600" border="0" cellspacing="5" cellpadding="0">
                <tr> 
                  <td colspan="3"><div align="center">Admin Issues</div></td>
                </tr>
                <tr> 
                  <td width="200"> <div align="center"> 
                      <form name="form1" method="post" action="add_issue.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Add_Issue" type="submit" id="Add_Issue" value="Add New Issue">
                      </form>
                    </div></td>
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="edit_issue_select.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Edit_Issue" type="submit" id="Edit_Issue" value="Edit / Delete Issue">
                      </form>
                    </div></td>
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="edit_upload_select.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Upload_Pages" type="submit" id="Add_Issue4" value="Upload Pages / PDF">
                      </form>
                    </div></td>
                </tr>
                <tr bgcolor="#000000"> 
                  <td height="2" colspan="3"></td>
                </tr>
                <tr> 
                  <td colspan="3"><div align="center"> 
                      <p>Admin Articles</p>
                    </div></td>
                </tr>
                <tr> 
                  <td width="200"> <div align="center"> 
                      <form name="form2" method="post" action="add_article.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Add_Article" type="submit" id="Add_Article" value="Add New Article">
                      </form>
                    </div></td>
                  <td width="200"><div align="center"> </div></td>
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="edit_article_select.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Edit_Delete_Article" type="submit" id="Edit_Delete_Article" value="Edit / Delete Article">
                      </form>
                    </div></td>
                </tr>
                <tr bgcolor="#000000"> 
                  <td height="2" colspan="3"></td>
                </tr>
                <tr> 
                  <td colspan="3"><div align="center"> 
                      <p>Admin Events</p>
                    </div></td>
                </tr>
                <tr> 
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="add_event.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Add_Event" type="submit" id="Add_Event" value="Add Single Event">
                      </form>
                    </div></td>
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="edit_event_select.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Edit_Single_Event" type="submit" value="Edit / Delete Event">
                      </form>
                    </div></td>
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="upload_events.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Upload Event Spreadsheet" type="submit" id="Edit_Delete_Article4" value="Upload Event File">
                      </form>
                    </div></td>
                </tr>
                <tr bgcolor="#000000"> 
                  <td height="2" colspan="3"></td>
                </tr>
                <tr> 
                  <td colspan="3"><div align="center"> 
                      <p>Admin Banners</p>
                    </div></td>
                </tr>
                <tr> 
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="add_banner.php">
                        <input name="Add_Banner" type="submit" id="Add_Banner" value="Add Banner">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                      </form>
                    </div></td>
                  <td width="200"><div align="center"> </div></td>
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="edit_banner_select.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Edit_Delete_Banner" type="submit" id="Edit_Delete_Banner" value="Edit / Delete Banner">
                      </form>
                    </div></td>
                </tr>
                <tr bgcolor="#000000"> 
                  <td height="2" colspan="3"></td>
                </tr>
                <tr> 
                  <td colspan="3"><div align="center"> 
                      <p>Admin Store</p>
                    </div></td>
                </tr>
                <tr> 
                  <td><div align="center"> 
                      <form name="form1" method="post" action="add_product.php">
                        <input name="Add_Product" type="submit" id="Add_Product" value="Add Product">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                      </form>
                    </div></td>
                  <td><div align="center"> </div></td>
                  <td><div align="center"> 
                      <form name="form1" method="post" action="edit_product_select.php">
                        <input name="Edit_Delete_Product" type="submit" id="Edit_Delete_Product" value="Edit / Delete Product">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                      </form>
                    </div></td>
                </tr>
                <tr bgcolor="#000000"> 
                  <td height="2" colspan="3"></td>
                </tr>
                <tr> 
                  <td colspan="3"><div align="center"> 
                      <p>Admin Businesses</p>
                    </div></td>
                </tr>
                <tr> 
                  <td width="200"> <div align="center"> 
                      <form name="form2" method="post" action="add_business.php">
			
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Add_Businesslisting" type="submit" value="Add New Business">
                      </form>
                    </div></td>
                  <td width="200"><div align="center">
                      <form name="form1" method="post" action="view_listing_names.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="View_Full_List" type="submit" value="Edit In List View">
                      </form>
                    </div></td>
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="edit_business_select.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Edit_Delete_Business" type="submit" value="Edit / Delete Business">
                      </form>
                    </div></td>
                </tr>
                
                 <tr bgcolor="#000000"> 
                  <td height="2" colspan="3"></td>
                </tr>
                <tr> 
                  <td colspan="3"><div align="center"> 
                      <p>Admin Classifieds</p>
                    </div></td>
                </tr>
                <tr> 
                  <td width="200"> <div align="center"> 
                      <form name="form2" method="post" action="add_classified.php">
			
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Add_classifiedlisting" type="submit" value="Add New Classified">
                      </form>
                    </div></td>
                  <td width="200"></td>
                  <td width="200"><div align="center"> 
                      <form name="form1" method="post" action="edit_business_select.php">
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Edit_Delete_Business" type="submit" value="Edit / Delete Classfied">
                      </form>
                    </div></td>
                </tr>
                <tr bgcolor="#000000"> 
                  <td height="2" colspan="3"> <div align="center"> </div></td>
                </tr>
                <tr> 
                  <td colspan="3"><div align="center"> 
                      <form name="form3" method="post" action="index.php">
                        <input type="submit" name="Submit" value="Logout">
                      </form>
                    </div></td>
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
