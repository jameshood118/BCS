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

<style type="text/css">
<!--
.featurelinks {
	font-weight: bold;
	color: #ffc600;
	font-style: normal;
	text-decoration: none;
}
-->
</style>
<style type="text/css">
<!--
.category_titles {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 115%;
	font-weight: bold;
	color: #000;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.listing_names {
	font-weight: bold;
	color: #FFFFFF;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.listing_urls {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 90%;
	font-weight: bold;
	color: #669900;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.normal {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12;
	font-weight: normal;
	color: #FFFFFF;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}
-->
</style>
<script type="text/javascript" src="TypingText.js">
/****************************************************
* Typing Text script- By Twey @ Dynamic Drive Forums
* Visit Dynamic Drive for this script and more: http://www.dynamicdrive.com
* This notice MUST stay intact for legal use
****************************************************/
</script>

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
      <table style="margin-left:70px;" border=0 cellpadding=4 cellspacing=0>
        <tr> 
          <!--Body Text-->
          <td valign="top" width="625" style="padding-right:20px;"> <p class="text"> 
             
			  <?php 
			  $show=$_POST['show'];

			  print ('<form name="form1" action="" method="post">');
			  print ('<select name="show">');
			  ///populate options
			  $host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listing_categories" ;

$show_all = "SELECT * FROM $table
ORDER BY category";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<option value="All">All Categories</option>');

while ($row = mysql_fetch_array ($result))
{
$catid  = $row["catid" ];
$category = $row["category"];


print ('<option value="'.$catid.'">'.$category.'</option>');



}
print ('</select>');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="submit" name="Submit" value="Show">');			  
			  
			  
			  ///end populate options

			  print ('</form>');
			  
			  ?>
			 
			  <?php 
							
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listing_categories" ;

if ($show<>"All" and $show<>""){
$show_all = "SELECT * FROM $table WHERE catid='$show' ORDER BY category";
} else {
$show_all = "SELECT * FROM $table ORDER BY category";
}

print ('<table width="620">');

$oldcatid="";
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$catid  = $row["catid" ];
$category = $row["category"];
print ("<tr>");
print ('<td align="left" class="category_titles">');


/// insert table of data for category

$list_host="vpnews.db.4808198.hostedresource.com";
$list_user = "vpnews" ;
$list_pass = "Toshiba1" ;
$list_db = "vpnews" ;
$list_table = "listings" ;

if ($catsearch<>"") {
$list_show_all = "SELECT * FROM $list_table
WHERE catid = '$catid' and (description LIKE '$catsearch' or name LIKE '$catsearch' or address LIKE '$catsearch' or state LIKE '$catsearch' or city LIKE '$catsearch' or phone LIKE '$catsearch') 
ORDER BY name";
} else {
$list_show_all = "SELECT * FROM $list_table
WHERE catid = '$catid'
ORDER BY name";
}


mysql_connect ($list_host,$list_user,$list_pass) or die ( mysql_error ());
mysql_select_db ($list_db)or die ( mysql_error ());
$list_result = mysql_query ($list_show_all) or die ( mysql_error ());

$num_rows = mysql_num_rows($list_result);
if ($num_rows>0) {
print ($category);
}

print ("</td>");
print ("</tr>");
print ("<tr>");
print ("<td>");

print ('<table width="620" bgcolor="ffffff" border="1" cellpadding="2">');
print ("<tr>");

while ($list_row = mysql_fetch_array ($list_result))
{
$list_id  = $list_row["id" ];
$list_catid  = $list_row["catid" ];
$list_name  = $list_row["name" ];
$list_address  = $list_row["address" ];
$list_city  = $list_row["city" ];
$list_state  = $list_row["state" ];
$list_description  = $list_row["description" ];
$list_phone  = $list_row["phone" ];
$list_email  = $list_row["email" ];
$list_url  = $list_row["url" ];
$first4=substr($list_url, 0, 3);  // abcdef;




print ('<td width="420">');

print ('<span class=listing_names><font color="000000">'.$list_name.'</font></span><br>');
print ('</td>');
///form to edit lisitng
print ('<td width=200>');
print ('<form name="form1" method="post" action="edit_business.php">');
print ('<input type="hidden" name="selected_business" value="'.$list_id.'">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="submit" value="Edit / Delete">');
print ('</form>');
print ('</td>');
///end form to edit listing

$tdnum=$tdnum+1;
if ($tdnum>0) {
print ("</tr>");
$tdnum=0;
print ("<tr>");
}


}

print ("</table>"); 


/// end table of data for category
$tdnum=0;
print ("</td>");
print ("</tr>");


}
print ("</table>");
							
							?>
            </p></td>
          <td valign="top" width="120"> <div class="banners-side"> 
              <?php include('banners-side.php'); ?>
            </div></td>
        </tr>
      </table></p>
      </div>
    <div class="footer"> 
      <?php include('footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>
