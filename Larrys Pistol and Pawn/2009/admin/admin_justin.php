<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="../design.css"/>
<script src="../swfobject.js" type="text/javascript"></script>

<script type="text/javascript">
	function showonlyone(thechosenone) {
      var newboxes = document.getElementsByTagName("div");
            for(var x=0; x<newboxes.length; x++) {
                  name = newboxes[x].getAttribute("name");
                  if (name == 'newboxes') {
                        if (newboxes[x].id == thechosenone) {
                        newboxes[x].style.display = 'block';
                  }
                  else {
                        newboxes[x].style.display = 'none';
                  }
            }
      }
}
	</script>

</head>

<body>
<div id="invis"> 
  <div id="header"> 
	<div id="menu"> 
      <?php include('../menu.php'); ?>
    <!--end menu--></div>
  <!--end header--></div>
  
    
<div id="content">
    
    <div id="div2"> 
	<div class="core">
	<p class="title">Welcome to the Thrift Store</p>
	<p class="text">
	
	</p>

		   <?php include ("creds.php"); ?>
		  <center><table><tr><td>
        <form name="form1" method="post" action="">
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
          <input type="submit" name="add_justin" value="Add Just In Images">
        </form></td><td>
		  <form name="form2" method="post" action="admin_menu.php">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Admin_return" value="Back to Admin">
        </form></td>
		</tr>
		
		<tr><td colspan="3"><div align="center">
        <form name="form4" method="post" action="../index.php">
          <input type="submit" name="Submit4" value="Logout">
        </form></div></td></tr>
				</table></center>
								<?php
						if (isset($_POST['Delete'])) { 
		
		 ///Removal of Email is here
$file2remove=$_POST['file2remove'];

///Delete Image Start
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="thriftdec";
$ftp_user_pass="Charity1";
$conn_id = ftp_connect($ftp_server);

$delimage='images/justin/'.$file2remove.'';
$delthumb='images/justin/thumbs/'.$file2remove.'';

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// check connection
if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user <i>$ftp_user_name</i>";
        exit;
    } else {
        echo "<BR><strong>Connected:</strong> $ftp_server, for user <i>$ftp_user_name</i><BR>";
    }


///upload script
ftp_delete($conn_id, $delimage);
ftp_delete($conn_id, $delthumb);

// close the FTP stream
ftp_close($conn_id);
///end upload image
 

///end Removal
?>
<form name="return" method="post" action="admin_justin.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
<?php
}
?>
				
				<?php 
				if (isset($_POST['add_justin'])) { ?>
		 <center><FORM ENCTYPE="multipart/form-data" ACTION="processFiles.php" METHOD=POST>
    
  <table width="600" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="230"> <div align="right">File:</div></td>
      <td width="230"><input name="file" type="file"></td>
          </tr>
    <tr> 
      <td colspan="2"> <div align="center"> 
          <input type="submit" name="Submit_Image" value="Submit New Image">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        </div></td>
    </tr>
  </table>
  </form>
  <p> </p>
  
<table width="600" border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><div align="center"> 
        <form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Abort_justin" value="Abort Addition">
        </form>
      </div></td>
  </tr>
</table></center>
		
	<?php } ?>
<?php
$dir = '../images/justin/';
if ($handle = opendir('../images/justin/')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "thumbs") {
			 print ('<p style="padding-top:20px;padding-bottom:20px;"><BR><BR>Reading Images...');
             print ('<BR /><img src="../images/justin/thumbs/'.$file.'">');
			 print ('<BR /><form name="form1" enctype="multipart/form-data" method="post" action="">');
			 print ('<input type="hidden" value="'.$file.'" name="file2remove">');
			 print ('<input type="hidden" value="'.$login.'" name="login">');
	         print ('<input type="hidden" value="'.$loginpass.'" name="password">');
			 print ('<input type="submit" name="Delete" value="Delete"></form>');
        }
    }
    closedir($handle);
}


$number=$number+1;

if ($number>2){
print ('<BR/>');
$number=0;
}

print ('</p>');

///end show menu items
?>
	        <?php 
if (isset($_POST['Abort_justin'])) {
unset ($_POST['add_justin']);
}
?>	

	<!--end core--></div>
	 <!--end div2--></div>
<!--end content--></div>
       
    <div id="div1">
		<div class="core">
		
		
		</div>
		<!--end core--></div>
	 
    <!--end div1--></div>

  <div id="div3"> 
    <div class="core">
	
	<div id="admin"> 

    </div>
    <!--end core--></div>
    <!--end div3--></div>
	
	<div class="clear"></div>
    
  	<div class="footer">
		<?php include('../footer.php'); ?>
  	  <!--end footer-->
  	</div>

<!--end invis--></div>


</body>
</html>
