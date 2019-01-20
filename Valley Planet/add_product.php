<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Add New Products</title>
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
    <?php include('checkpass.php');?><div class="body">
    <table border=0 cellpadding=4 cellspacing=0 style="margin-left:70px;">
      <tr> 
        <!--Body Text-->
        <td valign="top" width="660"> <table width="660">
            <FORM ENCTYPE="multipart/form-data" ACTION="insert_product.php" METHOD=POST>
Product Name: <input name="name" type="text"><BR>
Description: <BR><textarea name="description" rows="5"></textarea><BR>
Price: <input name="price" type="text"><BR>
Count: <input name="count" type="text"><BR>
Status: <select name="status"><BR>
<option value="">Select Status</option>
<option value="active">Active</option>
<option value="sold-out">Sold-Out</option>
</select><BR>
	  
			  
              Category: <select name="category"><BR>
			  <option value="">Select a Category</option>
                    <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "store" ;

$show_all = "SELECT * FROM $table";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$category = $row['Category'];

if ($old_category<>$category) {
print ('<option value="'.$category.'">'.$category.'</option>');
}
$old_category=$category;

}



					?>
                  </select><BR>
New Category: <input name="new_category" type="text"><BR>
First Picture: <input name="file" type="file"><BR>
Second Picture: <input name="fileb" type="file"><BR>

<BR><BR>

                              <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                  <input name="submit" type="submit" value="Submit">
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
