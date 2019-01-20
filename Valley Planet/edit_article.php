<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Add New Article</title>
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
              <FORM ENCTYPE="multipart/form-data" ACTION="alter_article.php" METHOD=POST>
                <table width="650" border="0" cellspacing="5" cellpadding="0">
                  <tr> 
                    <td colspan="2"><div align="center"> 
                        <p class="title" style="text-align:center">    <?php 
						$selected_article=$_POST['selected_article'];
						?>
                          Edit Issue #: <?php echo $selected_article?></p>
                      </div></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right"> 
                        <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_articles" ;

$show_all = "SELECT * FROM $table
WHERE id = '$selected_article'
ORDER BY id";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$catid = $row["catid"];
$authid = $row['authid'];
$date = $row['date'];
$headline = $row['headline'];
$story = $row['story'];
$teaserphoto = $row['teaserphoto'];
$featurephoto = $row['featurephoto'];
$issueid = $row['issueid'];
$pageno = $row['pageno'];
}

list($year, $month, $day) = explode('-', $date);

					?>
                      </td>
                    <td width="320"> <input name="id" type="hidden" id="id" value="<?php echo $selected_article?>"> 
                    </td>
                  </tr>
                  <tr> 
                    <td> <div align="right">Month of Article (MM):</div></td>
                    <td><input name="month" type="text" id="month" size="2" maxlength="2" value="<?php echo $month?>"></td>
                  </tr>
                  <tr> 
                    <td> <div align="right">Day of Article (DD):</div></td>
                    <td><input name="day" type="text" id="day" size="2" maxlength="2" value="<?php echo $day?>"></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right">Year of Article (YY):</div></td>
                    <td width="320"><input name="year" type="text" id="year" size="4" maxlength="4" value="<?php echo $year?>"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Select Category:</div></td>
                    <td><select name="category" id="category">
                        <?php 
						$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_categories" ;

$show_all = "SELECT * FROM $table
ORDER BY category";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$c_catid  = $row["catid" ];
$c_category = $row["category"];
$c_description = $row['description'];
$c_catorder = $row['catorder'];

print ('<option value="'.$c_catid.'">'.$c_category.'</option>');

}
						?>
                      </select></td>
                  </tr>
                  <tr> 
                    <td><div align="right">or Enter New Category:</div></td>
                    <td><input name="new_category" type="text" id="new_category"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Select Author:</div></td>
                    <td> <select name="author" id="author">
                        <?php 
						$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_authors" ;

$show_all = "SELECT * FROM $table
ORDER BY last_name, first_name";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$a_authid  = $row["authid" ];
$a_first_name = $row["first_name"];
$a_last_name = $row['last_name'];
$a_description = $row['description'];
$a_email = $row['email'];
$a_url = $row['url'];
$a_photo = $row['photo'];

$a_name=$a_last_name.", ".$a_first_name;

print ('<option value="'.$a_authid.'">'.$a_name.'</option>');

}
						?>
                      </select> </td>
                  </tr>
                  <tr> 
                    <td><div align="right">or Enter New Author:</div></td>
                    <td>First Name: 
                      <input name="new_author_first" type="text" id="new_author_first"></td>
                  </tr>
                  <tr> 
                    <td>&nbsp;</td>
                    <td>Last Name: 
                      <input name="new_author_last" type="text" id="new_author_last"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Headline:</div></td>
                    <td><input name="headline" type="text" id="headline"  value="<?php echo $headline?>"></td>
                  </tr>
                  <tr> 
                    <td colspan="2"><div align="center">Story:</div></td>
                  </tr>
                  <tr> 
                    <td colspan="2"><div align="center"> 
                        <textarea name="story" cols="150" rows="30" id="story" style="width:700px;"><?php echo $story?></textarea>
                      </div></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Issue #:</div></td>
                    <td><input name="issueid" type="text" id="issueid" size="3" maxlength="3"  value="<?php echo $issueid?>"></td>
                  </tr>
                  <tr> 
                    <td><div align="right">Page #:</div></td>
                    <td><input name="pageno" type="text" id="pageno" size="3" maxlength="3"  value="<?php echo $pageno?>"></td>
                  </tr>
                  <tr> 
                    <td>&nbsp;</td>
                    <td><div align="right"> </div></td>
                  </tr>
                  <tr> 
                    <td><div align="center"> 
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input type="submit" name="Submit" value="Submit"></form>
                      </div></td>
					  <td><FORM ENCTYPE="multipart/form-data" ACTION="delete_article.php" METHOD=POST>
            <?php 
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input name="issueid" type="hidden" value="'.$id.'"'); 
					  ?></div>
            <input type="submit" name="Delete" value="Delete Article">
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
