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
          <td valign="top" width="620" style="padding-right:20px;"> <p class="title">About 
              Us</p>
            <?php include('about_text_include.php'); ?>
            <p style="float:right;padding-top:20px;"> <img src="images/about-map.jpg" alt="Background Image"/> 
            </p>
            <?php include('address_include.php'); ?>
            <?php include('contacts_include.php'); ?>
			<p class="title" style="margin-top:20px;">Valley Planet Writers and Staff</p>
            <p class="text" style="margin-top:10px;">
              <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "staff" ;

$show_all = "SELECT * FROM $table ORDER by Idnum";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());
	

print ('<table width=600>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$title = $row[ "Title" ]."";
$bio = $row[ "Bio" ]."";

print ('<td style="margin-top:10px;">');
print ('<div style="float:right;background:#000;padding:2px;margin-left:8px;">');
if(file_exists('images/staff/thumbs/'.$Idnum.'.jpg' )){
print ('<a href="images/staff/'.$Idnum.'.jpg"><img src="images/staff/thumbs/'.$Idnum.'.jpg" border="0"/></a>');
}else{

};
print ('</div>');
print ('<div style="background:transparent url(images/bio-bg.jpg) no-repeat top left;">');
print ('<p style="margin-right:5px;padding:4px;"><span style="font-size:110%;font-weight:bold;color:#fff;">'.$name.'</span><br/><br/>');
print ('<strong>Bio: </strong>'.$bio.'</p>');
print ('</div>');
print ('<div style="height:10px;clear:both;"></div>');
print ('</td>');

$number=$number+1;

if ($number>0){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>
            </p>
            <p style="clear:both;">&nbsp;</p></td>
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