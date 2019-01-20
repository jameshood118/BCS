<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Edit Issue</title>
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
              <FORM ENCTYPE="multipart/form-data" ACTION="alter_issue.php" METHOD=POST>
                <table width="650" border="0" cellspacing="5" cellpadding="0">
                  <tr> 
                    <td colspan="2"><div align="center"> 
                        <p class="title" style="text-align:center">
                          <?php 
						$selected_issue=$_POST['selected_issue'];
						?>
                          Edit Issue #: <?php echo $selected_issue?></p>
                      </div></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right">Issue # to Add: </div></td>
                    <td width="320"> 
                      <?php
					  
					   
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_issues" ;

$show_all = "SELECT * FROM $table
WHERE issueid = '$selected_issue'
ORDER BY issueid";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))
{
$issueid  = $row["issueid" ];
$date = $row["date"];
$cover = $row['cover'];
$live = $row['live'];
$pages = $row['pages'];
}

$datearray = explode("-", $date);

$year=$datearray[0];;
$month=$datearray[1];
$day=$datearray[2];;


					?>
                      <input name="new_issue" type="text" id="new_issue" size="3" value="<?php echo $issueid?>"> 
                    </td>
                  </tr>
                  <tr> 
                    <td> <div align="right">Month of Issue (MM):</div></td>
                    <td><input name="month" type="text" id="month" size="2" maxlength="2" value="<?php echo $month?>"></td>
                  </tr>
                  <tr> 
                    <td> <div align="right">Day of Issue (DD):</div></td>
                    <td><input name="day" type="text" id="day" size="2" maxlength="2" value="<?php echo $day?>"></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right">Year of Issue (YY):</div></td>
                    <td width="320"><input name="year" type="text" id="month3" size="4" maxlength="4" value="<?php echo $year?>"></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right">Change Cover Pic:</div></td>
                    <td width="320"><input name="cover_file" type="file" id="cover_file"></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right">Live:</div></td>
                    <td width="320"><select name="live" id="live">
                        <option value="0" <?php 
						if ($live<>"1") {
						print ("selected");
						}
						?>>No</option>
                        <option value="1" <?php 
						if ($live=="1") {
						print ("selected");
						}
						?>>Yes</option>
                      </select></td>
                  </tr>
                  <tr> 
                    <td width="320"> <div align="right">Pages:</div></td>
                    <td width="320"><select name="pages" id="pages">
                        <?php 
					$maxpages=100;
					$page_counter=1;
					$quad_counter=1;
					while ($page_counter<=$maxpages) {
					
					if ($page_counter==$pages) {
					$pageselect="selected";
					} else {
					$pageselect="";
					}
					
					if ($quad_counter=="4"){
					
					print ('<option value="'.$page_counter.'" '.$pageselect.'>'.$page_counter.'</option>');
					
					$quad_counter="0";
					}
					
					
					
					$quad_counter=$quad_counter+1;
					$page_counter=$page_counter+1;
					}
					?>
                      </select></td>
                  </tr>
                  <tr> 
                    <td>&nbsp;</td>
                    <td><div align="right"> </div></td>
                  </tr>
                  <tr> 
                    <td><div align="center"> 
                        <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input type="submit" name="Submit" value="Submit">       </form></td>
<td><FORM ENCTYPE="multipart/form-data" ACTION="delete_issue.php" METHOD=POST><?php 
print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
print ('<input name="issueid" type="hidden" value="'.$issueid.'"'); 
					  ?></div>
                        <input type="submit" name="Delete" value="Delete Issue"></form></td>
                  </tr>
                </table>
       
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
