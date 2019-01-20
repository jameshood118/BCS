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
    <?php include('checkpass.php');?>
    <div class="body"> 
      <table border=0 cellpadding=4 cellspacing=0 style="margin-left:70px;">
        <tr> 
          <!--Body Text-->
          <td valign="top" width="660"> <div align="center"> 
              <table width="650" border="0" cellspacing="5" cellpadding="0">
                <tr> 
                  <td colspan="2"><div align="center"> 
                      <p class="title" style="text-align:center">Edit Existing 
                        Event</p>
                    </div></td>
                </tr><tr>
                <td> Location: <BR> 
                  <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "listings" ;

$sort=$_POST['place'];

if ($sort=="All" or $sort==""){
$allselect="selected";
} else {
$allselect="";
}

if ($sort=="Unassigned"){
$un_select="selected";
} else {
$un_select="";
}

$show_all = "SELECT * FROM $table
ORDER BY name";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('Sort By: '.$sort);
print ('<form action="" method="post" enctye="multipart/form-data">');
print ('<SELECT NAME="place">');
print ('<option value="All" '.$allselect.'>All</option>');
print ('<option value="Unassigned" '.$un_select.'>Unassigned</option>');

while ($row = mysql_fetch_array ($result))
{
$id = $row["id"];
$name = $row['name'];

$table2 = "events_revised" ;

$show_all2="SELECT * FROM $table2 WHERE Listingid='$id' ORDER BY Idnum DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result2 = mysql_query ($show_all2) or die ( mysql_error ());

$num_rows=mysql_num_rows($result2);

if ($num_rows>'0'){
print ('<option value="'.$id.'">'.$name.'</option>');
}

}
print ('</SELECT><BR>');
print ('<input type="submit" name="Submit" value="Sort">');
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('</form>');



					?>
                </td><FORM ENCTYPE="multipart/form-data" ACTION="edit_event.php" METHOD=POST>
                <td>Event to Edit:<BR> <select name="selected_event">
                    <?php 
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "events_revised" ;

$show_all = "SELECT * FROM $table
ORDER BY Idnum DESC";



if ($sort<>"All" and $sort<>"" and $sort <>"Unassigned"){
$show_all="SELECT * FROM $table WHERE Listingid='$sort' ORDER BY Idnum DESC";
} else {
$show_all="SELECT * FROM $table WHERE Listingid<>'1'
ORDER BY Startdate DESC, Eventname";
}

if ($sort=="Unassigned") {
$show_all="SELECT * from $table WHERE Listingid='1' ORDER by Startdate DESC, Eventname";
}

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$Idnum  = $row["Idnum" ];
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

$displayname=$startdate.' "'.$listingname.' - '.$eventname.'"';

$displayname=substr($displayname,0,50);

print ('<option value="'.$Idnum.'">'.$displayname.'</option>');

}



					?>
                  </select></td></tr>
                <tr> 
                  <td>&nbsp;</td>
                  <td><div align="right"> </div></td>
                </tr>
                <tr> 
                  <td colspan="2"><div align="center"> 
                      <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                      <input type="submit" name="Submit" value="Edit Selected Event">
                    </div></td>
                </tr>
              </table></form>
              </div>
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
