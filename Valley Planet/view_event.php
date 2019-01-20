<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - View Event Details</title>
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
    <div class="body"> 
      <table border=0 cellpadding=4 cellspacing=0 style="margin-left:70px;">
        <tr> 
          <!--Body Text-->
          <td valign="top" width="660"> <div align="left"> 
              <?php
		  $var1=$_GET['var1'];
					?>
              <?php 
					$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "events_revised" ;

$show_all = "SELECT * FROM $table
WHERE Idnum = '$var1'
ORDER BY Idnum DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($event_row = mysql_fetch_array ($result))
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

$date1 = explode('-', $event_startdate);
$date_y = $date1[0];
$date_m = $date1[1];
$date_d = $date1[2];

$fromstring=date("D F d, Y", mktime(0,0,0, $date_m, $date_d, $date_y));

$date2 = explode('-', $event_enddate);
$date_y = $date2[0];
$date_m = $date2[1];
$date_d = $date2[2];

$tostring=date("D F d, Y", mktime(0,0,0, $date_m, $date_d, $date_y));

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table2 = "listings" ;

$show_all2 = "SELECT * FROM $table2
WHERE id = '$event_listingid'
ORDER BY id";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result2 = mysql_query ($show_all2) or die ( mysql_error ());


while ($row2 = mysql_fetch_array ($result2))
{
$id2 = $row2["id"];
$name2 = $row2['name'];
}

if ($event_starttime<>"") {
$start_transition="at";
} else {
$start_transtition="";
}

if ($event_startdate<>$event_enddate) {
$transition_phrase="To: ".$tostring;
$time_transition=" at ";
} else {
$transition_phrase="";
$time_transition=" to ";
}

if ($event_endtime<>"") {
$end_transition=$time_transition.$event_endtime;
} else {
$end_transtition="";
}

print ('<span class=category_titles><font color=000000><strong>');
print ($event_eventname."</strong></span><br>");
print ('<span class=listing_names><font color=000000>Presented By: '.$name2.'</span><br>');
print ('<span class=normal><strong><font color=000000>From: '.$fromstring.' '.$start_transition.' '.$event_starttime.' '.$transition_phrase.$end_transition.'</strong><br>');
print ('<span class=normal><font color=000000>'.$event_description.'</span>');


}
					?>
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
