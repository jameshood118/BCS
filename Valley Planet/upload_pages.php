<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Upload Pages</title>
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
              <FORM ENCTYPE="multipart/form-data" ACTION="insert_uploads.php" METHOD=POST>
                <table width="650" border="0" cellspacing="5" cellpadding="0">
                  <tr> 
                    <td width="640"><div align="center"> 
                        <p class="title" style="text-align:center"> 
                          <?php 
						$issue_number=$_POST['issue_number'];
						$pages=$_POST['pages'];
						
						if ($pages==""){
						
						$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_issues" ;

$show_all = "SELECT * FROM $table
WHERE issueid='$issue_number'
ORDER BY issueid DESC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$pages  = $row["pages" ];
}
						
						}
						
						?>
                          Upload Pages for Issue # <?php echo $issue_number?> 
                        </p>
                      </div></td>
                  </tr>
                  <tr> 
                    <td> 
                      <?php 
					///page browser upload fields
					
					$page_image_counter=1;
					print ('<table width=600 border=1>');
					print ('<tr align="left">');
					while ($page_image_counter<=$pages) {
					//////////individual file field entries
					
					
					print ('<td width=300>');
					print ('<div class="title" style="text-align:center">');
					  $pageimage="images/issue_pages/".$issue_number."/".$page_image_counter.".jpg";
					  
					  if (file_exists($pageimage)){
					  
					  } else {
					  $pageimage="images/issue_pages/nopic.jpg";
					  }
  
  print ('<span class=text>Page #: '.$page_image_counter.'</span><br>');
  print ('<a href="images/issue_pages/'.$issue_number.'/'.$page_image_counter.'.jpg" target="_blank"><img src="'.$pageimage.'" width="135" height="175" border="1"/></a><br>');
  print ('<input name="file'.$page_image_counter.'" type="file" id="file'.$page_image_counter.'" size="10">');
					print ('</div>');
					print ('</td>');
					
					
					//////////ebd individual file field entries
					$page_image_counter=$page_image_counter+1;
					$rowcount=$rowcount+1;
					
					if ($rowcount>2) {
					print ('</tr>');
					print ('<tr>');
					$rowcount=0;
					}
					
					}
					print ('</tr>');
					print ('</table>');
					///end page browser upload fields
					?>
                    </td>
                  </tr>
                  <tr> 
                    <td> PDF File: 
                      <input name="pdf_file" type="file" id="pdf_file">
                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
                      ( 
                      <?php 
					  $pdf_path="images/issue_pdfs/".$issue_number."pdf";
					  
					  if (file_exists($pdf_path)) {
					  $memo="PDF Currently Exists";
					  } else {
					  $memo="PDF Not Yet Uploaded";
					  }
					  print ($memo);
					  ?>
                      ) <BR>
                      <BR>
                      <BR></td>
                  </tr>
                  <tr> 
                    <td><div align="center"> 
                        <?php 
						print ('<input type="hidden" name="pages" value="'.$pages.'">');
						print ('<input type="hidden" name="issue_number" value="'.$issue_number.'">');
						
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input type="submit" name="Submit" value="Submit">
                      </div></td>
                  </tr>
                </table>
              </form>
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
