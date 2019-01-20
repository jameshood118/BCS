
		   <?php include ("creds.php"); ?>
		  <center><table><tr><td>
        <form name="form1" method="post" action="">
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
          <input type="submit" name="add_justin" value="Add Images">
        </form></td>
		
		<td>		
		  <form name="form2" method="post" action="admin_menu.php">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Admin_return" value="Back to Admin">
        </form></td><td><form><input type=button value="refresh" onClick="window.location.reload()"></form> </td>
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

// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="bigfootstk";
$ftp_user_pass="Bigfoot1";
$conn_id = ftp_connect($ftp_server);

$delimage='../images/gallery/'.$file2remove.'';
$delthumb='../images/gallery/thumbs/'.$file2remove.'';


// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

if ($done=="1"){
exit;
///end Removal
} elseif ($done=="0") {
// check connection
if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user <i>$ftp_user_name</i>";
        exit;
    } else {
        echo "<BR><strong>Connected:</strong> $ftp_server, for user <i>$ftp_user_name</i><BR>";
    }

} 
?>

<table width="600" border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><div align="center"> 
        <form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Finish_Delete" value="Finish Delete">
        </form>
      </div></td>
  </tr>
</table>

<?php
///upload script
ftp_delete($conn_id, $delimage);
ftp_delete($conn_id, $delthumb);

// close the FTP stream
ftp_close($conn_id);
///end upload image

}
$done=1;

?>
        <?php 
if (isset($done)) {
unset ($_POST['Remove']);
}
?>

	        <?php 
if (isset($_POST['Finish_Delete'])) {
unset ($_POST['Remove']);
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

		     print('<table border="0">');
			 			 print ('<tr>');
			 
$dir = '../images/gallery/';
if ($handle = opendir('../images/gallery/')) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "thumbs") {
			 print ('<td width="200" align="center" valign="top">');
             print ('<img src="../images/gallery/thumbs/'.$file.'" width="200">');
			 print ('<BR /><form name="form1" enctype="multipart/form-data" method="post" action="">');
			 print ('<input type="hidden" value="'.$file.'" name="file2remove">');
			 print ('<input type="hidden" value="'.$login.'" name="login">');
	         print ('<input type="hidden" value="'.$loginpass.'" name="password">');
			 print ('<input type="submit" name="Delete" value="Delete"></form>');
			 print ('</td>');
       		$number=$number+1;

if ($number>2){
print ('</tr>');
$number=0; 
}

}
    }
    closedir($handle);
}





print ('</table>');

///end show menu items
?>
	        <?php 
if (isset($_POST['Abort_justin'])) {
unset ($_POST['add_justin']);
}
?>	

