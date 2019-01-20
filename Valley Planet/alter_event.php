<HTML><BODY>
<?php include('checkpass.php');?>
<?php
$selected_event=$_POST['selected_event'];
$event_name=$_POST ['event_name'];
$description=$_POST ['description'];
$category=$_POST ['category'];
$place=$_POST ['place'];
$musical=$_POST ['musical'];
$listingid=$_POST ['place'];
$cost=$_POST ['cost'];
$event_name=$_POST ['event_name'];
$link=$_POST ['link'];
$numpic=$_POST ['numpic'];
/* start date variables */
$startmonth=$_POST ['startmonth'];
$startday=$_POST ['startday'];
$startyear=$_POST ['startyear'];
$starttime=$_POST['starttime'];

$startdate=''.$startyear.'-'.$startmonth.'-'.$startday.'';
/* end date variables */
$endmonth=$_POST ['endmonth'];
$endday=$_POST ['endday'];
$endyear=$_POST ['endyear'];
$endtime=$_POST['endtime'];

$listaction=$_POST['listaction'];
$listingname=$_POST['listingname'];


///find next id

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listings" ;

$show_all="SELECT * from $table ORDER by id";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$id = $row["id"];
}

$nextid=$id+1;
///end find next id




$enddate=''.$endyear.'-'.$endmonth.'-'.$endday.'';

$login=$_POST['login'];
$password=$_POST['password'];

$newlink = substr ($link, 0, 4);
if ($newlink == "http"){
$postaddress= $link;
}
else{$postaddress = "http://".$link;
}


  

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "events_revised" ;

$show_all = "SELECT * FROM $table
ORDER BY Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

mysql_query("UPDATE $table SET Idnum='$selected_event', 
Catid='$category',
Musical='$musical',
Listingid='$place',
Listingname='$listingname',
Eventname='$event_name',
Description='$description',
Cost='$cost',
Link='$postaddress',
Numpic='$numpic',
Startdate='$startdate',
Starttime='$starttime',
Enddate='$enddate',
Endtime='$endtime'
WHERE Idnum = '$selected_event'") or die(mysql_error());
?>

<form name="return" method="post" action="admin_menu.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $password?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
</BODY></HTML>