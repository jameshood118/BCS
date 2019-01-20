<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Edit Author</title>
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
              <FORM ENCTYPE="multipart/form-data" ACTION="alter_author.php" METHOD=POST><table width="650" border="0" cellspacing="5" cellpadding="0"> 
                <tr> 
                  <td colspan="2"><div align="center"> 
                      <p class="title" style="text-align:center">   <?php 
						$selected_author=$_POST['selected_author'];
						?></div></td>
                </tr>
                <tr>
			
                  <td>
				                  <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_authors" ;

$show_all = "SELECT * FROM $table
WHERE authid = '$selected_author'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$authid  = $row["authid" ];
$first_name = $row["first_name"];
$last_name = $row['last_name'];
$email = $row['email'];
$url = $row['url'];
$description = $row['description'];
$photo = $row['photo'];

}
?>
				  </td><td>Current Photo: <img src="images/authors/thumbs/<?php echo $photo?>"></td> 
                </tr>
                <tr> 
                  <td><div align="right">First Name</div></td>
                  <td><input name="first_name" type="text" value="<?php echo $first_name?>"></td>
                </tr>
                <tr> 
                  <td><div align="right">Last Name</div></td>
                  <td><input name="last_name" type="text" value="<?php echo $last_name?>"></td>
                </tr>
                <tr> 
                  <td><div align="right">Email</div></td>
                  <td><input name="email" type="text" value="<?php echo $email?>"></td>
                </tr>
                <tr> 
                  <td><div align="right">URL</div></td>
                  <td><input name="url" type="text" value="<?php echo $url?>"></td>
                </tr>
                <tr> 
                  <td><div align="right">Description</div></td>
                  <td><textarea name="description" cols="40" rows="15"><?php echo $description?></textarea></td>
                </tr>
                <tr> 
                  <td><div align="right">Photo: </div></td>
				   
                  <td><input name="file" type="file"></td>
                </tr>
                <tr> 
                  <td><div align="center"> 
                    <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="hidden" name="selected_author" value="'.$selected_author.'">');

					  ?>
                    <input type="submit" name="Submit" value="Submit"> 
              </form>
            </div></td>
                 <td><FORM ENCTYPE="multipart/form-data" ACTION="delete_author.php" METHOD=POST>
            <?php 
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input name="selected_author" type="hidden" value="'.$selected_author.'">'); 
					  ?></div>
            <input type="submit" name="Delete" value="Delete Author">
          </form></td>
        </tr>
      </table>
    </div>
    <td valign="top" align="right" width="120"> 
      <!--SIDE BANNER ADS-->
      <div class="banners-side"> 
        <?php include('banners-side.php'); ?>
      </div>
      <!--END-->
    </td></tr>
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
    </tr></table>
    </div>
  <div class="footer"> 
    <?php include('footer.php'); ?>
  </div>
</div>
</div>
</body>
</html>
