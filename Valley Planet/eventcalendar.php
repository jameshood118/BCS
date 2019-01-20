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
td A:link {font-size:75%; text-decoration: none; font-weight:bold; color:#669900;}
td A:visited {font-size:75%; text-decoration: none; color:#669900;}
td A:active {font-size:75%; text-decoration: none;  color:#669900;}
td A:hover {font-size:75%; text-decoration: underline; color:#003366; text-transform: uppercase}

.featurelinks {
	font-weight: bold;
	color: #ffc600;
	font-style: normal;
	text-decoration: none;
}
-->
</style>
<style type="text/css">
table {<br>
	width:630px;
	height:auto;
	}
	
table, tr, td {
	align:center;
	text-align:center;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	color: #000;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}
td {
	width:90px;
	}
td .weekdays {
	text-align:center;
	height:25px;
	width:90px;
	}

td .days {
	text-align:left;
	height:90px;
	}
	
<!--
.category_title {
	width:630px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 110%;
	font-weight: bold;
	color: #000;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.category_titles {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 75%;
	font-weight: bold;
	color: #000;
	font-style: normal;
	text-decoration: none;
	decoration: none;
	width:140px;
}
.colors {
	width:15px;
	height:15px;
	}

.listing_names {
	font-weight: bold;
	font-size:90%;
	color: #000;
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
	font-size: 90%;
	font-weight: normal;
	color: #000;
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
      <?php 
	  ///get cata and catsearch
	  $original_catsearch=$_POST['catsearch'];
	  $catsearch="%".$original_catsearch."%";
	  $cata=$_GET['cata'];
	  ///end get cata
	  
	   //////set up dates
							  $calendar_year=$_GET['newyear'];
$calendar_month=$_GET['newmonth'];

if ($calendar_month=="") {
$calendar_month=date("n");
}
							  
if ($calendar_month=="13") {
$calendar_month=01;
$calendar_year=$calendar_year+1;
}
							  
if ($calendar_month=="0") {
$calendar_month="12";
$calendar_year=$calendar_year-1;
}
							  
							  
							  
							  $calendar_date=$calendar_year."-".$calendar_month."-01";
							  
							  if ($calendar_year=="") {
							  $current_month=date("F");
							  $current_monthnum=date("n");
							  $current_monthnum0=date("m");
							  $days_in_month=date("t");
							  $current_day=date("d");
							  $weekday=date("D");
							  $current_year=date("Y");
							  $calendar_year=$current_year;
							  $startday=date("w", mktime(0, 0, 0, $current_monthnum, 1, $current_year));
							  } else {
							  $newdate=date("Y-m-d", mktime(0,0,0, $calendar_month, 1, $calendar_year));
							  $current_month=date("F", mktime(0,0,0, $calendar_month, 1, $calendar_year));
							  $current_monthnum=date("n", mktime(0,0,0, $calendar_month, 1, $calendar_year));
							  $current_monthnum0=date("m", mktime(0,0,0, $calendar_month, 1, $calendar_year));
							  $days_in_month=date("t", mktime(0,0,0, $calendar_month, 1, $calendar_year));
							  $current_day=date("d", mktime(0,0,0, $calendar_month, 1, $calendar_year));
							  $weekday=date("D", mktime(0,0,0, $calendar_month, 1, $calendar_year));
							  $current_year=date("Y", mktime(0,0,0, $calendar_month, 1, $calendar_year));
							  $startday=date("w", mktime(0,0,0, $calendar_month, 1, $calendar_year));
							  }
							  $lastyear=$current_year-1;
							  $nextyear=$current_year+1;
							  $lastmonth=$current_monthnum-1;
							  $nextmonth=$current_monthnum+1;
							  $lastmonth2=date("M", mktime(0,0,0, $calendar_month-1, 1, $calendar_year));
							  $nextmonth2=date("M", mktime(0,0,0, $calendar_month+1, 1, $calendar_year));
							  
							  ///end set up dates
	  ?>
    </div>
    <div class="body"> 
      <table style="margin-left:70px;" border=0 cellpadding=4 cellspacing=0>
        <tr> 
          <!--Body Text-->
          <td valign="top" width="630" style="padding-right:20px;"> <p class="title">Event 
              Calendar</p>
            <p class="text"> 
            <form name="form2" method="post" action="eventcalendar.php?cata=<?php echo $cata?>&newyear=<?php echo $calendar_year?>&newmonth=<?php echo $calendar_month?>">
              <table width="630" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="300" height="25"> <div align="center"> 
                      <select name="catmenu" onChange="MM_jumpMenu('parent',this,0)">
                        <option value="eventcalendar.php?cata=all&newyear=<?php echo $calendar_year?>&newmonth=<?php echo $calendar_month?>" selected>View 
                        All Events by Category</option>
                        <?php 
						

								
								$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "event_categories" ;
$show_all = "SELECT * FROM $table
ORDER BY category";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$catid  = $row["catid" ];
$category = $row["category"];

if ($cata==$catid and $cata<>"") {
$catselect="selected";
} else {
$catselect="";
}

print ('<option value="eventcalendar.php?cata='.$catid.'&newyear='.$calendar_year.'&newmonth='.$calendar_month.'" '.$catselect.'>'.$category.'</option>');
}
								
								
								?>
                      </select>
                    </div></td>
                  <td width="70"> <div align="right" class="listing_urls">Search:</div></td>
                  <td width="200"><input name="catsearch" type="text" id="catsearch" value="<?php echo $original_catsearch?>"></td>
                  <td width="60"> <div align="left" class="submit"> 
                      <input type="submit" name="Submit" value="Go!">
                    </div></td>
                </tr>
              </table>
            </form></p>
            <p class="text"> 
              <?php 
							 
							  							  
							  print ("<table width=630>");
							  print ('<TR>');
							  print ("<td colspan=1 width=630 class=category_title>");
							  print ("<span class=category_title><center>Calendar of Events For ".$current_month.", ".$current_year."<br/></span>");
							  print ("</td>");
							  print ("</tr>");
							  print ("</table>");
							  print ("<table border=1 cellpadding=4 bgcolor=cccccc bordercolor=000000 align=center>");
							  ///navrow
							  print ('<TR bgcolor="#000000">');
							  print ("<TD class=weekdays>");
							  print ('<a href=eventcalendar.php?cata='.$cata.'&newyear='.$lastyear.'&newmonth='.$current_monthnum0.'><< '.$lastyear.' </a>');
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ('<a href=eventcalendar.php?cata='.$cata.'&newyear='.$current_year.'&newmonth='.$lastmonth.'><< '.$lastmonth2.' </a>');
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ("");
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ('<a href=eventcalendar.php?cata='.$cata.'> '.$current_month.' </a>');
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ("");
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ('<a href=eventcalendar.php?cata='.$cata.'&newyear='.$current_year.'&newmonth='.$nextmonth.'> <font color=black>blahblah</font>'.$nextmonth2.'>></a>');
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ('<a href=eventcalendar.php?cata='.$cata.'&newyear='.$nextyear.'&newmonth='.$current_monthnum0.'> '.$nextyear.' >></a>');
							  print ("</td>");
							  print ("</tr>");
							  ///end navrow
							  print ("<TR>");
							  ///header row
							  print ("<TD class=weekdays>");
							  print ("SUNDAY");
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ("MONDAY");
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ("TUESDAY");
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ("WEDNESDAY");
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ("THURSDAY");
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ("FRIDAY");
							  print ("</td>");
							  print ("<TD class=weekdays>");
							  print ("SATURDAY");
							  print ("</td>");
							  ///end header row
							  print ("</TR>");
							  print ("<TR>");
							  $weekday_count=0;
							  
							  $daycount=1;
							  
							  while ($daycount<=$days_in_month) {
							  if ($weekday_count==$startday and $startyes<>"true"){
							  $startyes="true";
							  }
							  
							  if ($startyes=="true" and $daycount<=$days_in_month) {
							  $cellcolor="ffffff";
							  } else {
							  $cellcolor="000000";
							  }
							  
							  print('<TD class=days bgcolor='.$cellcolor.' valign=top>');
							  
							  
							  
							  if ($startyes=="true") {
							  print ($daycount."<BR>");
							 
							  /////////////////////////////print ("enter event selector here.");
							  
							  $datestring=$current_year."-".$current_monthnum0."-".$daycount;
							  $makedate=date("Y-m-d", mktime(0, 0, 0, $current_monthnum0, $daycount, $current_year));
							  
							  
							  $event_host="vpnews.db.4808198.hostedresource.com";
$event_user = "vpnews" ;
$event_pass = "Toshiba1" ;
$event_db = "vpnews" ;
$event_table = "events_revised" ;

if ($cata=="all") {
$cata="";
}

if ($cata<>"") {
$event_show_all = "SELECT * FROM $event_table
WHERE Catid = '$cata'
ORDER BY Eventname";
} else {
///WHERE Startdate <= '$selected_date' and Enddate >= '$selected_date' - place in where below.
$event_show_all = "SELECT * FROM $event_table
ORDER BY Eventname";
}

if ($catsearch<>"") {
///search field not empty
if ($cata<>"") {
$event_show_all = "SELECT * FROM $event_table
WHERE Catid = '$cata' and (Eventname LIKE '$catsearch' or Description LIKE '$catsearch')
ORDER BY Eventname";
} else {
$event_show_all = "SELECT * FROM $event_table
WHERE Eventname LIKE '$catsearch' or Description LIKE '$catsearch'
ORDER BY Eventname";
}

///end searchfield not empty
}

mysql_connect ($event_host,$event_user,$event_pass) or die ( mysql_error ());
mysql_select_db ($event_db)or die ( mysql_error ());
$event_result = mysql_query ($event_show_all) or die ( mysql_error ());

$days_eventlist="";
$days_eventnums="";
$days_eventcount="";
$days_eventcolors="";

while ($event_row = mysql_fetch_array ($event_result))
{
$event_id = $event_row["Idnum" ];
$event_catid  = $event_row["Catid" ];
$event_category = $event_row["Category"];
$event_listingid = $event_row["Listingid"];
$event_eventname = $event_row["Eventname"];
$event_description = $event_row["Description"];

$event_cost = $event_row["Cost"];
$event_link = $event_row["Link"];
$event_numpic = $event_row["Numpic"];
$event_startdate = $event_row["Startdate"];
$event_enddate = $event_row["Enddate"];

$event_starttime = $event_row["Starttime"];
$event_endtime = $event_row["Endtime"];
$event_datemodified = $event_row["Datemodified"];

if ($event_startdate<=$makedate and $event_enddate>=$makedate) {
///get colorcodes for events of the day
$color_host="vpnews.db.4808198.hostedresource.com";
$color_user = "vpnews" ;
$color_pass = "Toshiba1" ;
$color_db = "vpnews" ;
$color_table = "event_categories" ;
$color_show_all = "SELECT * FROM $table
WHERE catid = '$event_catid'
ORDER BY category";

mysql_connect ($color_host,$color_user,$color_pass) or die ( mysql_error ());
mysql_select_db ($color_db)or die ( mysql_error ());
$color_result = mysql_query ($color_show_all) or die ( mysql_error ());

while ($color_row = mysql_fetch_array ($color_result))
{
$color_catid  = $color_row["id" ];
$color_category = $color_row["category"];
$color_colorcode = $color_row["colorcode"];
$days_eventcolors=$days_eventcolors.$color_colorcode."|";
}

///end get colorcodes for events of the day


$days_eventlist=$days_eventlist.$event_eventname."|";
$days_eventnums=$days_eventnums.$event_id."|";
$days_eventcount=$days_eventcount+1;
}


}

/////embed flash object here

if ($days_eventcount>0) {
print ('<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="80" height="80">');
print ('<param name="movie" value="flash/daily_marquee80x80.swf?daysevents='.$days_eventlist.'&dayseventnums='.$days_eventnums.'&dayscolors='.$days_eventcolors.'">');
print ('<param name="quality" value="high">');
print ('<embed src="flash/daily_marquee80x80.swf?daysevents='.$days_eventlist.'&dayseventnums='.$days_eventnums.'&dayscolors='.$days_eventcolors.'" quality="high" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="80" height="80"></embed></object>');

}



/////end embed flash daily object here
		///print ($selected_date);					  
							  
							  /////////////////////////////end enter event selector here
							  } else {
							  print ("");
							  }
							  
							  
							  
							  print ("</TD>");
							  
							  ///end of week row
							  if ($weekday_count>5){
							  print ("</TR>");
							  $weekday_count=0;
							  } else {
							  $weekday_count=$weekday_count+1;
							  }
							  ///end end of week row
							  
							  if ($startyes=="true"){
							  $daycount=$daycount+1;
							  }
							  
							  }
							  
							  
							  
							  
							  
							  print ("</table>");
							  
							  //////end set up month view for calendar
							  ?>
            <p> 
              <?php 
							print ('<table width="630">');
							print ('<tr>');
							
							$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "event_categories" ;
$show_all = "SELECT * FROM $table
ORDER BY category";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

$cat_counter=0;

while ($row = mysql_fetch_array ($result))
{
$catid  = $row["id" ];
$category = $row["category"];
$colorcode = $row["colorcode"];

print ('<td  class=colors width=15 height=15 bgcolor="#'.$colorcode.'"></td>');
print ('<td class=category_titles width=140 height=15>'.$category.'</td>');

$cat_counter=$cat_counter+1;

if ($cat_counter>=4) {
print ('</tr>');
print ('<tr>');
$cat_counter=0;
}

///end while loop
}
							
							
							print ('</table>');
							?>
            </p></td>
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
