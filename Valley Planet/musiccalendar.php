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
      <?php $out=$_GET['out'];?>
    </div>
    <div class="body"> 
      <table style="margin-left:70px;" border=0 cellpadding=4 cellspacing=0>
        <tr> 
          <!--Body Text-->
          <td valign="top" width="620" style="padding-right:20px;"> <p class="title">Music 
              Calendar</p>
            <p class="text"> 
              <!-- ******CONTENT GETS PLACED HERE******** -->
            <form name="form2" method="post" action="eventcalendar.php">
              <table width="600" border="0" cellspacing="0" cellpadding="0">
                <tr> 
                  <td width="300"> <div align="center"> 
                      <select name="catmenu" onChange="MM_jumpMenu('parent',this,0)">
                        <option value="eventcalendar.php?cata=all" selected>View 
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

print ('<option value="eventcalendar.php?cata='.$catid.'" '.$catselect.'>'.$category.'</option>');
}
								
								
								?>
                      </select>
                    </div></td>
                  <td width="70"> <div align="right" class="listing_urls">Search:</div></td>
                  <td width="200"><input name="catsearch" type="text" id="catsearch" value="<?php echo $original_catsearch?>"></td>
                  <td width="30"> <div align="left" class="submit"> 
                      <input type="submit" name="Submit" value="Go!">
                    </div></td>
                </tr>
              </table>
            </form></p>
            <p class="text"> 
            <table width="620" height="560" border="0" cellpadding="0" cellspacing="0">
              <tr> 
                <td width="24">&nbsp;</td>
                <td width="620" valign="top"> <div align="left"> 
                    <?php 
							  //////set up month view for calendar
							  $calendar_year=$_GET['newyear'];
							  $calendar_month=$_GET['newmonth'];
							  
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
							  
							  $datestring=$current_year."-".$current_monthnum0."-".$daycount;
							  $makedate=date("Y-m-d", mktime(0, 0, 0, $current_monthnum0, $daycount, $current_year));
							  
							  
							  $event_host="vpnews.db.4808198.hostedresource.com";
$event_user = "vpnews" ;
$event_pass = "Toshiba1" ;
$event_db = "vpnews" ;
$event_table = "events_revised" ;

$event_show_all = "SELECT * FROM $event_table
WHERE Musical = 'yes' and Listingid <> '1'
ORDER BY Startdate , Eventname";

print ('<table width=620 bgcolor="#FFFFFF">');
print ('<tr align=center>');
print ('<td width=620>');

if ($out<>"month") {
$time_length="Seven Days";
} else {
$time_length="Thirty Days";
}

print ('<span class=page_titles><strong><font color=#000000>Music Related Events For The Next '.$time_length.'.</strong></span>');
print ('</td>');
print ('</tr>');
print ('<tr align=left>');

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

///set from and to names

$date1 = explode('-', $event_startdate);
$date_y = $date1[0];
$date_m = $date1[1];
$date_d = $date1[2];

$fromstring=date("D F d, Y", mktime(0,0,0, $date_m, $date_d, $date_y));
$thestart=mktime(0,0,0, $date_m, $date_d, $date_y);

$date2 = explode('-', $event_enddate);
$date_y = $date2[0];
$date_m = $date2[1];
$date_d = $date2[2];

$tostring=date("D F d, Y", mktime(0,0,0, $date_m, $date_d, $date_y));

if ($tostring<>$fromstring){
$transition_phrase=$tostring." at ";
} else {
$transition_phrase="";
}

$event_starttime= substr($event_starttime,0,5);
$event_endtime= substr($event_endtime,0,5);


///end set from and to names

$today  = mktime(0, 0, 0, date("m")  , date("d"), date("Y"));
$weekout  = mktime(0, 0, 0, date("m")  , date("d")+7, date("Y"));
$monthout  = mktime(0, 0, 0, date("m")  , date("d")+30, date("Y"));

if ($out<>"month") {
$howlong = $weekout;
} else {
$howlong = $monthout;
}




if ($thestart>=$today and $thestart<=$howlong) {
print ('<td width=620 align=left>');

if ($fromstring<>$old_fromstring) {
print ("<br><br>");
print ("<span class=category_titles><font color=000000><strong>".$fromstring."</strong><BR><br>");
$old_fromstring=$fromstring;
}
///set listing name


$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table3 = "listings" ;

$show_all3 = "SELECT * FROM $table3
WHERE id = '$event_listingid'
ORDER BY id";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result3 = mysql_query ($show_all3) or die ( mysql_error ());


while ($row3 = mysql_fetch_array ($result3))
{
$id3 = $row3["id"];
$name3 = $row3['name'];

}



$event_listing_name=$name3;
///end set listing name
print ("<span class=normal><font color=000000><strong>".$event_listing_name.":</strong> </span><span class=normal><font color=000000>".$event_eventname."</span>");

if ($event_description<>"") {
print ('<span class=normal><font color=000000><br>'.$event_description.'</span>');
}

print ("</TD>");
print ('</tr>');
print ('<tr align=left>');
}

///print event entry if it is in the date range

///end print event entry


}

							  
							  print ("</table>");
							  
							  //////end set up month view for calendar
							  ?>
                    <div class=featurelinks> 
                      <center>
                        <a href="musiccalendar.php">View One Week</a> - <a href="musiccalendar.php?out=month">View 
                        One Month </a> 
                      </center>
                    </div>
                  </div></td>
              </tr>
            </table></p>
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