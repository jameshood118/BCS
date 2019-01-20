<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Archives</title>
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
          <td valign="top" width="620" style="padding-right:20px;"> <p class="title">Archives</p>
            <p class="text">
			
              
            <form name="form1" method="post" action="">
              <select name="menu2" onChange="MM_jumpMenu('parent',this,0)">
                <option value="#" selected>Choose Issue To View</option>
				<?php 
			  ////archive browser text here
			  
			  $host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_issues" ;

$show_all = "SELECT * FROM $table
WHERE Flash = 'yes'
ORDER BY issueid DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$issueid  = $row["issueid" ];
$date = $row['date'];
$pages  = $row["pages" ];
$live = $row["live"];
$cover = $row['cover'];

$displayname='Issue #: '.$issueid.' - (Published: '.$date.')';

print ('<option value="view_article.php?myissue='.$issueid.'">'.$displayname.'</option>');

}
			  
			  ////end archive browser text here
			  ?>
              </select>
            </form>
			   <br><br>
            
            <p><form name="form2" method="post" action="">
            <select name="menu2" onChange="MM_jumpMenu('parent',this,0)">
                <option value="#" selected>Select Issue to Download Full PDF</option>
				<?php 
			  ////archive browser text here
			  
			  $host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_issues" ;

$show_all = "SELECT * FROM $table
WHERE PDF = 'yes'
ORDER BY issueid DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$issueid  = $row["issueid" ];
$date = $row['date'];
$pages  = $row["pages" ];
$live = $row["live"];
$cover = $row['cover'];

$displayname='Issue #: '.$issueid.' - (Published: '.$date.')';

print ('<option value="images/issue_pdfs/'.$issueid.'.pdf" target="_blank">'.$displayname.'</option>');

}
			  
			  ////end archive browser text here
			  ?>
              </select>
			</form>
			 <br><br>
			</p>
			<p class="title">
			 Article Search
			</p>
			<p class="text"></p>
            <form name="form3" method="post" action="archives.php">
              Enter Search Phrase: <input type="text" name="search_phrase">
			  <br>
              
              <br>
			  <input type="submit" name="Submit" value="Submit">
            </form>
            <p class="text">
			<?php 
			$search_phrase=$_POST['search_phrase'];
			if ($search_phrase<>"") {
			////populate list of matching articles
			
			$srch="%".$search_phrase."%";
			
			$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_articles" ;

$show_all = "SELECT * FROM $table
WHERE story LIKE '$srch'
ORDER BY issueid DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$id  = $row["id" ];
$catid = $row['catid'];
$headline  = $row["headline" ];
$date = $row["date"];
$authid = $row['authid'];
$pageno = $row['pageno'];
$art_issue_id = $row['issueid'];

$displayname=substr($headline,0,26);

$displayname=stripslashes($displayname);


print ('<a href="full_article.php?article='.$id.'">'.$headline.' (published in Issue #'.$art_issue_id.' on date: '.$date.')</a>');
print ('<br><br>');
}
			
			////end populate list of matching articles
			}
			?>
			</p>
			
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
