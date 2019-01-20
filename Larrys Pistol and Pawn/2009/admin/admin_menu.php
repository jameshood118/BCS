

		   <?php include ("creds.php"); ?>
		  <center><table><tr><td>
        <form name="form1" method="post" action="">
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
          <input type="submit" name="Admin_Sales" value="Admin Monthly Sales">
        </form></td>
		<td>
        <form name="form1" method="post" action="">
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
          <input type="submit" name="Show_All" value="Show All">
        </form></td
		></tr>
		
		<tr><td colspan="3"><div align="center">
     <form name="form4" method="post" action="../index.php">
          <input type="submit" name="Submit4" value="Logout">
        </form></div></td></tr>
		
		</table></center>
		
		
				<?php if (isset($_POST['Admin_Sales'])) { ?>
				
				
				  <center><table><tr><td>
        <form name="form1" method="post" action="">
          <input type="hidden" value="<?php echo $login?>" name="login">
          <input type="hidden" value="<?php echo $loginpass?>" name="password">
          <input type="submit" name="add_sales" value="Add Sales PDF">
        </form></td><td>
		  <form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Admin_return" value="Abort">
        </form></td>
		</tr>

				</table></center>
				
				
				
			<?php }?>
			
			
				<?php 
				if (isset($_POST['add_sales'])) { ?>
		 <center><FORM ENCTYPE="multipart/form-data" ACTION="" METHOD=POST>
    
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
        <input type="submit" name="Abort_Addition" value="Abort Addition">
        </form>
      </div></td>
  </tr>
</table></center>
		
	<?php } ?>
	
	
	
	
	
	<?php 
				if (isset($_POST['Submit_Image'])) { 

$source_file=$_FILES['file']['tmp_name'];
$imagename=$_FILES['file']['name'];

$search = array(' ',"'",'&');
$replace = array('','','and');

//Outputs: zsdeffg
$imagename2 = str_replace($search, $replace, $imagename);

$imagename3 = stripslashes ($imagename2);


///upload image
// set up basic connection
$ftp_server="www.pistolandpawn.com";
$ftp_user_name="bjork";
$ftp_user_pass="aDUJag8F";
$conn_id = ftp_connect($ftp_server);

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

// upload the file


$destination_file="../public_html/2009/promo/$imagename3";
	

print("<br><strong>Source File:</strong> ".$source_file."<br>");
print("<strong>Destination File:</strong> ".$destination_file."<BR>");

///upload script
$upload = ftp_put($conn_id, $destination_file, $source_file, FTP_BINARY);

// check upload status
if (!$upload) {
        echo "FTP upload has failed!";
    } else {
        echo "<BR><BR><strong>Uploaded:</strong> $source_file to $ftp_server as <i>$destination_file</i><BR><BR>";
    ///end upload script

}
///end upload file if file siez is >0

// close the FTP stream
ftp_close($conn_id);
///end upload image
/// make thumb portion
  ?><form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Upload_return" value="Back">
        </form>
<?php }

?>

	<?php 	if (isset($_POST['Show_All'])) { ?>

<?php

print ('<p style="padding-top:20px;padding-bottom:20px;"><BR><BR>Reading Images...');

		
$dir="../promo";
if ($handle = opendir($dir)) {
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && $file != "thumbs") {
             print ('<BR /><a href="../promo/'.$file.'">'.$file.'</a>');
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

///end show menu items ?>

<form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Show_All_return" value="Back">
        </form>

	<?php }
	?>
	
						        <?php 
if (isset($_POST['Show_All_return'])) {
unset ($_POST['Show_All']);
}
?>	
		
					        <?php 
if (isset($_POST['Upload_return'])) {
unset ($_POST['Submit_Image']);
}
?>	
			
				        <?php 
if (isset($_POST['Admin_return'])) {
unset ($_POST['Admin_Sales']);
}
?>	

	        <?php 
if (isset($_POST['Abort_Addition'])) {
unset ($_POST['add_sales']);
}
?>	
		
		
