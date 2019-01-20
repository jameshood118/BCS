<?php include('checkpass.php');?>
<?php
$event_name=$_POST ['event_name'];
$description=$_POST ['description'];
$category=$_POST ['category'];
$place=$_POST ['place'];
$musical=$_POST ['musical'];
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


while ($row = mysql_fetch_array ($result))
{
$Idnum = $row[ "Idnum" ]."";
}
$new_Idnum_num=$Idnum+1;

mysql_query("INSERT into $table 
(Idnum, Catid, Musical, Listingid, Eventname, Description, Cost, Link, Numpic, Startdate, Starttime, Enddate, Endtime, Datemodified) 
VALUES 
('$new_Idnum_num', '$category', '$musical', '$place', '$event_name', '$description', '$cost', '$postaddress', '$numpic', '$startdate', '$starttime', '$enddate', '$endtime', '0')
") or die(mysql_error());

echo $startdate;
					

print ('<form name="redirect" method="post" action="admin_menu.php">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('</form>');

print ('<script language="javascript" type="text/javascript">');
print ("document.forms['redirect'].submit();");
print ('</script> ');

?>