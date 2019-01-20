<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Edit Event</title>
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
    <?php include('checkpass.php');?><div class="body">
    <table border=0 cellpadding=4 cellspacing=0 style="margin-left:70px;">
      <tr> 
        <!--Body Text--><td valign="top" width="660">
        <table width="660">
          <?php 
$selected_event=$_POST['selected_event'];

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "events_revised" ;

$show_all = "SELECT * FROM $table WHERE Idnum='$selected_event'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$catid = $row["Catid"];
$musical = $row['Musical'];
$listingid = $row['Listingid'];
$listingname = $row['Listingname'];
$eventname = $row['Eventname'];
$description = $row['Description'];
$cost = $row['Cost'];
$link = $row['Link'];
$numpic = $row['Numpic'];
$startdate = $row['Startdate'];
$starttime = $row['Starttime'];
$enddate = $row['Enddate'];
$endtime = $row['Endtime'];
$datemodified = $row['Datemodified'];

///parse start date

$date_array_1=explode("-", $startdate);

$date_year=$date_array_1[0];
$date_month=$date_array_1[1];
$date_day=$date_array_1[2];

///end parse start date

///parse end date

$date_array_2=explode("-", $enddate);

$date_year2=$date_array_2[0];
$date_month2=$date_array_2[1];
$date_day2=$date_array_2[2];

///end parse end date

}


					?>
          Editing Event Name <?php echo $eventname;?> 
          <FORM ENCTYPE="multipart/form-data" ACTION="alter_event.php" METHOD=POST>
            <tr> 
              <td>Event Name: <BR> <input name="event_name" type="text" value="<?php echo $eventname?>"></td>
              <td rowspan="2">Description: <BR> <textarea name="description" rows="5" class="textarea1"><?php echo $description?></textarea></td>
            </tr>
            <tr> 
              <td>Category: <BR> <select name="category">
                  <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "event_categories" ;

$show_all = "SELECT * FROM $table
ORDER BY catid";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$catid2 = $row["catid"];
$category = $row['category'];

if ($catid==$catid2){
$cat_check="selected";
} else {
$cat_check="";
}

print ('<option value="'.$catid2.'" '.$cat_check.'>'.$category.'</option>');
}



					?>
                </select> </td>
              <td> </td>
            </tr>
            <tr> 
              <td> 
                <?php 
					if ($musical<>"yes" and $musical<>"Yes") {
					$nocheck="selected";
					$yescheck="";
					} else {
					$nocheck="";
					$yescheck="selected";
					}
					?>
                Musical: (Y or N)<BR> <select name="musical">
                  <?php 
					print ('<option value="Yes" '.$yescheck.'>Yes</option>');
					?>
                  <?php 
					print ('<option value="No" '.$nocheck.'>No</option>');
					?>
                </select></td>
              <td> Location: <?php echo $listingname?> <BR> <select name="place">
                  <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listings" ;

$show_all = "SELECT * FROM $table
ORDER BY name";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

if ($listingid=="1"){
print ('<option value="1">Unassigned Venue</option>');
}


while ($row = mysql_fetch_array ($result))
{
$id = $row["id"];
$name = $row['name'];

if ($id==$listingid) {
$loc_check="selected";
} else {
$loc_check="";
}



print ('<option value="'.$id.'" '.$loc_check.'>'.$name.'</option>');
}

$nextid=$id+1;



					?>
                </select></td>
            </tr>
            <tr> 
              <td>Cost: <BR> <input name="cost" type="text" value="<?php echo $cost?>"></td>
			  <td>
			  <input name="nextid" type="hidden" value="<?php echo $nextid?>">
			  <input name="listingname" type="hidden" value="<?php echo $listingname?>">
			  </td>
            </tr>
            <tr> 
              <td>Link: <BR> <input name="link" type="text" value="<?php echo $link?>"></td>
              <td>Number of pics: <BR> <input name="numpic" type="text" value="<?php echo $numpic?>"></td>
            </tr>
            <tr> 
              <td>Start Date: <BR> 
                <?php $months = array (1 => '01', '02', '03', '04', '05', '06','07', '08', '09', '10', '11', '12'); ?>
                Month: 
                <select name='startmonth'>
                  <?php foreach ($months as $value) {?>
                  <?php 
					if ($date_month==$value){
					$month_match="selected";
					} else {
					$month_match="";
					}
					?>
                  <option value="<?php echo $value ?>" <?php echo $month_match?>><?php echo $value?></option>
                  <?php } ?>
                </select> 
                <?php $days = range (1, 31); ?>
                Day: 
                <select name='startday'>
                  <?php foreach ($days as $value) {?>
                  <?php 
					if ($date_day==$value){
					$day_match="selected";
					} else {
					$day_match="";
					}
					?>
                  <option value="<?php echo $value?>" <?php echo $day_match?>><?php echo $value?></option>
                  <?php } ?>
                </select>
                Year: 
                <select name='startyear'>
                  <?PHP
$year = date("Y");



for ($i = 0; $i <= 6; $i++) {

if ($date_year==$year) {
$year_match="selected";
} else {
$year_match="";
}

echo '<option value="'.$year.'" '.$year_match.'>'.$year.'</option>';

$year++;

}
?>
                </select></td>
              <td>Start Time: 
                <?php $start = strtotime('12:00am');
$end = strtotime('11:45pm');

echo '<select name="starttime">';
print ('<option value="">NA</option>');
for ($i = $start; $i <= $end; $i += 900)
{
echo '<option>' . date('g:i a', $i);
}
echo '</select>';?>
              </td>
            </tr>
            <tr> 
              <td>End Date: <BR> 
                <?php $months = array (1 => '01', '02', '03', '04', '05', '06','07', '08', '09', '10', '11', '12'); ?>
                Month: 
                <select name='endmonth'>
                  <?php foreach ($months as $value) {?>
                  <?php 
					if ($date_month2==$value){
					$month_match="selected";
					} else {
					$month_match="";
					}
					?>
                  <option value="<?php echo $value ?>" <?php echo $month_match?>><?php echo $value?></option>
                  <?php } ?>
                </select> 
                <?php $days = range (1, 31); ?>
                Day: 
                <select name='endday'>
                  <?php foreach ($days as $value) {?>
                  <?php 
					if ($date_day2==$value){
					$day_match="selected";
					} else {
					$day_match="";
					}
					?>
                  <option value="<?php echo $value?>" <?php echo $day_match?>><?php echo $value?></option>
                  <?php } ?>
                </select>
                Year: 
                <select name='endyear'>
                  <?PHP
$year = date("Y");
for ($i = 0;
$i <= 6; $i++) {

if ($date_year2==$year) {
$year_match="selected";
} else {
$year_match="";
}

echo '<option value="'.$year.'" '.$year_match.'>'.$year.'</option>';

$year++;

}

?>
                </select></td>
              <td>End Time: 
                <?php $start = strtotime('12:00am');
$end = strtotime('11:45pm');

echo '<select name="endtime">';
print ('<option value="">NA</option>');
for ($i = $start; $i <= $end; $i += 900)
{

echo '<option>' . date('g:i a', $i);
}
echo '</select>';?>
              </td>
            </tr>
            <TR> 
              <TD> 
                <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="hidden" name="selected_event" value="'.$selected_event.'">');
					  ?>
                <input name="submit" type="submit" value="Submit"> 
          </form></td>
          <td> <form name="delete_event" method="post" action="delete_event.php">
              <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="hidden" name="idnum" value="'.$selected_event.'">');
					  ?>
              <input type="submit" name="Delete" value="Delete">
            </form></TD>
          </TR>
        </table></div>
      <td valign="top" align="right" width="120"> 
        <!--SIDE BANNER ADS-->
        <div class="banners-side"> 
          <?php include('banners-side.php'); ?>
        </div>
        <!--END-->
      </td>
      </tr>
      <tr> 
        <td width="660"> <div align="center"> 
            <form name="form1" method="post" action="admin_menu.php">
              <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
              <input type="submit" name="Submit2" value="Back to Admin Menu">
            </form>
          </div></td>
        <td width="120"> </td>
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
