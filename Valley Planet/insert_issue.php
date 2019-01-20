<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Insert New Issue</title>
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
                  <td width="640" colspan="2"><div align="center">
				  <?php 
				  ///insert issue script
				  
				  $new_issue=$_POST['new_issue'];
				  
				  ///print ('Issue ID: '.$new_issue);
				  
				  $month=$_POST['month'];
				  $day=$_POST['day'];
				  $year=$_POST['year'];
				  
				  $cover_file=$_FILES['cover_file']['name'];
				  
				  $live=$_POST['live'];
				  $pages=$_POST['pages'];
				  
				  $date=$year."-".$month."-".$day;
				  
				  
				  $host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "news_issues" ;
mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("INSERT into $table (issueid) VALUES ('$new_issue')") or die(mysql_error());

mysql_query("UPDATE $table set issueid='$new_issue',
date='$date',
cover='$cover_file',
live='$live',
Flash='yes',
pages='$pages'
WHERE issueid = '$new_issue'") or die(mysql_error());
				  
				  ///end insert issue script
				  ?>
				  
				  <?php 
				  
				  
				  ///create directory script
				  
				  $dir = 'images/issue_pages/'.$new_issue.'/';
				  
				  if (file_exists($dir)) {
				  
				  }else {
				  // set up basic connection
$ftp_server="97.74.144.175";
$ftp_user_name="valleypl";
$ftp_user_pass="Toshiba1";
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// try to create the directory $dir
if (ftp_mkdir($conn_id, $dir)) {
 ///echo "successfully created $dir\n";
} else {
 echo "There was a problem while creating $dir\n";
}

// close the connection
ftp_close($conn_id);
				  }
				  



				  
				  ///end create directory script
				  ?>
				  
				  
				  <?php 
				  ///upload cover image script
				  
// set up basic connection
$ftp_server="97.74.144.175";
$ftp_user_name="valleypl";
$ftp_user_pass="Toshiba1";
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// check connection
if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user $ftp_user_name";
        exit;
    } else {
        ///echo "Connected to $ftp_server, for user $ftp_user_name";
    }

// upload the file
$currentdir=getcwd();
$target_path = $currentdir ."\\". basename($_FILES['cover_file']['name']);

$destination_file='images/issue_pages/'.$new_issue.'/1.jpg';
$source_file=$_FILES['cover_file']['tmp_name'];
///check to see if file size is >0 and upload file if so.
$source_size=$_FILES['cover_file']['size'];

if ($source_size>0) {
///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        ///echo "Uploaded $source_file to $ftp_server as $destination_file";
    }
///end upload script
}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
				  
				  ///end upload cover image script
				  ?>
				   
                      <p class="title" style="text-align:center">Issue <?php echo $new_issue?> Added.</p>
                    </div></td>
                </tr>
                <tr> 
                  <td width="320"><div align="center">
				  <form name="form1" method="post" action="admin_menu.php">
			  <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                <input type="submit" name="Submit2" value="Back to Admin Menu">
              </form>
				  </div></td>
                  <td width="320"><div align="center">
				  <form name="form1" method="post" action="upload_pages.php">
                        <?php 
					  print ('<input type="hidden" name="issue_number" value="'.$new_issue.'">');
					  print ('<input type="hidden" name="pages" value="'.$pages.'">');
					  
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
                        <input name="Upload_Pages" type="submit" id="Add_Issue4" value="Upload Pages / PDF">
                      </form>
				  </div></td>
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
      </table>
    </div>

    <div class="footer"> 
      <?php include('footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>
