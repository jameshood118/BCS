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
WHERE Musical = 'yes' and Listingid<>'1'
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