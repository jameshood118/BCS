<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Add New Event</title>
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
        <!--Body Text-->
        <td valign="top" width="660"> <table width="660">
            <?php 
			  $show=$_POST['show'];

			  print ('<form name="form1" action="" method="post">');
			  print ('<select name="show">');
			  ///populate options

$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listing_categories" ;

$show_all = "SELECT * FROM $table
ORDER BY category";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<option value="All">All Categories</option>');

while ($row = mysql_fetch_array ($result))
{
$catid  = $row["catid" ];
$category = $row["category"];


print ('<option value="'.$catid.'">'.$category.'</option>');



}
print ('</select>'); ?>
            &nbsp; 
            <?php 
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input type="submit" name="Submit" value="Show">');			  
			  
			  
			  ///end populate options

			  print ('</form>');
			  
			  ?>
            <FORM ENCTYPE="multipart/form-data" ACTION="insert_event.php" METHOD=POST>
              <tr> 
                <td>Event Name: <BR> <input name="event_name" type="text"></td>
                <td rowspan="2">Description: <BR> <textarea name="description" rows="5" class="textarea1"></textarea></td>
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
$catid = $row["catid"];
$category = $row['category'];


print ('<option value="'.$catid.'">'.$category.'</option>');
}



					?>
                  </select> </td>
                <td> </td>
              </tr>
              <tr> 
                <td>Musical: (Y or N)<BR> <select name="musical">
                    
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select></td>
                <td> Location: <BR> <select name="place">
                    <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listings" ;

if ($show<>"All" and $show<>""){
$show_all = "SELECT * FROM $table WHERE catid='$show' ORDER BY name";
} else {
$show_all = "SELECT * FROM $table ORDER BY name";
}

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$id = $row["id"];
$name = $row['name'];

$truncated = substr($name, 0, 45);

print ('<option value="'.$id.'">'.$truncated.'</option>');
}



					?>
                  </select></td>
              </tr>
              <tr> 
                <td>Cost: <BR> <input name="cost" type="text"></td>
              </tr>
              <tr> 
                <td>Link: <BR> <input name="link" type="text"></td>
                <td>Number of pics: <BR> <input name="numpic" type="text"></td>
              </tr>
              <tr> 
                <td>Start Date: <BR> 
                  <?php $months = array (1 => '01', '02', '03', '04', '05', '06','07', '08', '09', '10', '11', '12'); ?>
                  Month: 
                  <select name='startmonth'>
                    <?php foreach ($months as $value) {?>
                    <option value="<?php echo $value ?>"><?php echo $value?></option>
                    <?php } ?>
                  </select> 
                  <?php $days = range (1, 31); ?>
                  Day: 
                  <select name='startday'>
                    <?php foreach ($days as $value) {?>
                    <option value="<?php echo $value?>"><?php echo $value?></option>
                    <?php } ?>
                  </select>
                  Year: 
                  <select name='startyear'>
                    <?PHP
$year = date("Y"); for ($i = 0; $i <= 6; $i++) {echo "<option>$year</option>"; $year++;}
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
                    <option value="<?php echo $value ?>"><?php echo $value?></option>
                    <?php } ?>
                  </select> 
                  <?php $days = range (1, 31); ?>
                  Day: 
                  <select name='endday'>
                    <?php foreach ($days as $value) {?>
                    <option value="<?php echo $value?>"><?php echo $value?></option>
                    <?php } ?>
                  </select>
                  Year: 
                  <select name='endyear'>
                    <?PHP
$year = date("Y"); for ($i = 0; $i <= 6; $i++) {echo "<option>$year</option>"; $year++;}
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
                <TD></TD>
                <TD> 
                  <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                  <input name="submit" type="submit" value="Submit"></TD>
              </TR>
            </form>
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
