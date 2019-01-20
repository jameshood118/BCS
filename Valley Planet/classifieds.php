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
      <table style="margin-left:70px;" border=0 cellpadding=4 cellspacing=0>
        <tr> 
          <!--Body Text-->
          <td valign="top" width="620" style="padding-right:20px;"> <p class="title">Classifieds</p>
            <p class="text"> 
            <form name="form2" method="post" action="classifieds.php">
              <table width="620" height="70" border="0" cellspacing="5" cellpadding="0">
                <tr> 
                  <td width="300" valign="top"> <select name="catmenu" onChange="MM_jumpMenu('parent',this,0)">
                      <option value="classifieds.php?cata=all" selected>Limit 
                      by Category</option>
                      <?php 
$cata=$_GET['cata'];
$catsearch=$_POST['catsearch'];

$original_catsearch=$catsearch;

$catsearch= "%".$catsearch."%";


								
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "classified_categories" ;
$show_all = "SELECT * FROM $table
ORDER BY category";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$catid  = $row["id" ];
$category = $row["category"];

if ($cata==$catid) {
$catselect="selected";
} else {
$catselect="";
}

print ('<option value="classifieds.php?cata='.$catid.'" '.$catselect.'>'.$category.'</option>');
}
								
								
								?>
                    </select> </td>
                  <td> <div align="right" class="listing_urls">Search:</div></td>
                  <td><input name="catsearch" type="text" id="catsearch"></td>
                  <td><div align="left" class="submit">
                      <input type="submit" name="Submit" value="Go!">
                    </div></td>
                </tr>
                <tr> 
                  <td height="10">&nbsp;</td>
                </tr>
              </table>
            </form>
            <?php
							
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "classified_categories" ;

if ($catsearch=="" and $cata=="") {
$show_all = "SELECT * FROM $table
ORDER BY category";
}

if ($catsearch=="" and $cata<>"") {
$show_all = "SELECT * FROM $table
WHERE catid='$cata'
ORDER BY category";
}

if ($catsearch<>"") {
$show_all = "SELECT * FROM $table
ORDER BY category";
}

print ('<table width="620" align="left">');

$oldcatid="";
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$catid  = $row["id" ];
$category = $row["category"];
print ("<tr>");
print ('<td width="620" align="left" class="category_titles">');


/// insert table of data for category

$list_host="vpnews.db.4808198.hostedresource.com";
$list_user = "vpnews" ;
$list_pass = "Toshiba1" ;
$list_db = "vpnews" ;
$list_table = "classified" ;

if ($original_catsearch<>"") {
$list_show_all = "SELECT * FROM $list_table
WHERE catid = '$catid' and (category LIKE '$catsearch' or poster LIKE '$catsearch' or address LIKE '$catsearch' or state LIKE '$catsearch' or city LIKE '$catsearch' or phone LIKE '$catsearch') 
ORDER BY category";
} else {
$list_show_all = "SELECT * FROM $list_table
WHERE catid = '$catid'
ORDER BY category";
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

print ('<table width="620" cellpadding="10">');
print ("<tr>");

while ($list_row = mysql_fetch_array ($list_result))
{
$class_id  = $list_row["id" ];
$class_category  = $list_row["category" ];
$class_poster  = $list_row["poster" ];
$class_headline  = $list_row["headline" ];
$class_adtext  = $list_row["adtext" ];
$class_email  = $list_row["email" ];
$class_show_email  = $list_row["show_email" ];
$class_phone  = $list_row["phone" ];
$class_address  = $list_row["address" ];
$class_city  = $list_row["city" ];
$class_state  = $list_row["state" ];
$class_zip  = $list_row["zip" ];
$class_catid  = $list_row["catid" ];




print ('<td width="206" bgcolor="111111" border="1">');

print ('<center><span class=listing_names>'.$class_headline.'</span><br>');
print ("<span class=normal>Posted by: ".$class_poster."</span></center><br>");
print ("<span class=normal align=left>".$class_adtext."</span><br><br>");

if ($class_show_email<>"") {
print ("<span class=normal align=left>".$class_email."</span><br>");
}

if ($class_city=="" or $class_state=="") {

if ($class_city=="") {

if ($class_state<>"") {
print ("<span class=normal>".$class_state."<br>");
}


} else {
print ("<span class=normal>".$class_city."<br>");
}


} else {
print ("<span class=normal>".$class_city.", ".$class_state."</span><br>");
}

if ($class_phone<>"") {
print ("<span class=normal>Phone: ".$class_phone."</span><br>");
}


print ('<td>');

$tdnum=$tdnum+1;
if ($tdnum>2) {
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
							
							?></p>
            <!--END CONTENT-->
          </td>
          <td valign="top" width="120"> 
            <!--SIDE BANNER ADS-->
            <div class="banners-side"> 
              <?php include('banners-side.php'); ?>
            </div>
            <!--END-->
          </td>
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
