   		   <?php include ("creds.php"); 
		   $first_view="1";
		   ?>

<table>
            <tr><td>
              <form name="form4" method="post" action="">
                <input type="submit" name="Add" value="Add Banners">
                <input type="hidden" value="<?php echo $login?>" name="login">
                <input type="hidden" value="<?php echo $loginpass?>" name="password">
              </form></td><td> 
              <form name="form4" method="post" action="admin_menu.php">
                <input type="submit" name="Submit3" value="Back to Admin Menu">
                <input type="hidden" value="<?php echo $login?>" name="login">
                <input type="hidden" value="<?php echo $loginpass?>" name="password">
              </form></td>
			  <td><form><input type=button value="refresh" onClick="window.location.reload()"></form> </td>
            </tr>
          </table>
        </div>
        <BR>
        <BR>
		
			<?php
						if (isset($_POST['Remove'])) { 
		
		 ///Removal of Email is here
$file2remove=$_POST['file2remove'];
$banner2remove=$_POST['banner2remove'];
$table="banner_ads";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE from $table WHERE Idnum='$banner2remove'") or die(mysql_error());

///upload image
// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="bigfootstk";
$ftp_user_pass="Bigfoot1";
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// check connection
if ((!$conn_id) || (!$login_result)) {
        echo "FTP connection has failed!";
        echo "Attempted to connect to $ftp_server for user $ftp_user_name";
        exit;
    } else {
        echo "Connected to $ftp_server, for user $ftp_user_name";
    }

// upload the file


$delimage="../images/banners/".$file2remove."";
$delthumb="../images/banners/thumbs/".$file2remove."";
$source_size=$_FILES['file']['size'];



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
				if (isset($_POST['Add'])) 
					{ 
						unset ($first_view);
					?>
		 <FORM ENCTYPE="multipart/form-data" ACTION="insert_banner.php" METHOD=POST>
    
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Link:</div></td>
      <td><input name="link" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
	  <td><div align="right">File:</div></td>
      <td> <input name="file" type="file"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
     <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <input type="submit" name="Submit_Add" value="Submit New Banner">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        </div></td>
    </tr>
  </table>
  </form>
  <p> </p>
  
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><div align="center"> 
        <form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Abort_add" value="Abort Addition">
        </form>
      </div></td>
  </tr>
</table>
		
	<?php } ?>	
			
        <?php 	
		if (isset($_POST['Edit'])) 
					{
					unset ($first_view);
		
		$selected_banner=$_POST['Idnum'];
		

$table = "banner_ads" ;

$show_all = "SELECT * FROM $table 
WHERE Idnum = '$selected_banner'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$link = $row[ "Link" ]."";
$filename = $row[ "Filename" ]."";


}

?>
 <FORM ENCTYPE="multipart/form-data" ACTION="alter_banner.php" METHOD=POST>
    
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Link:</div></td>
      <td><input name="link" type="text" value="<?php echo $link?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
	  <td><div align="right">File:</div></td>
      <td> <input name="file" type="file"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	  <td><div align="right">Current File:</div></td>
	 <td><img src="../images/banners/thumbs/<?php echo $filename?>"></td>
	<td colspan="2">&nbsp;</td>

    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <input type="submit" name="Submit_Add" value="Submit Changes">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$selected_banner.'" name="selected_banner">');
print ('<input type="hidden" value="'.$filename.'" name="previousfile">');
		  ?>
        </div></td>
    </tr>
  </table>
  </form>
  <p> </p>
  
<table width="100%" border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><div align="center"> 
        <form name="form2" method="post" action="">
		          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Abort_edit" value="Abort Changes">
        </form>
      </div></td>
  </tr>
</table>
<?php 

} ?>

        <?php 
if (isset($_POST['Abort_edit'])) {
unset ($_POST['Edit']);
}
?>
        <?php 
if (isset($_POST['Abort_add'])) {
unset ($_POST['Add']);
}
?>

<?php 
if (isset($first_view)) {

				  
$table = "banner_ads" ;

$show_all = "SELECT * FROM $table ORDER by Idnum ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div align="center"><table border="1">');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$link = $row[ "Link" ]."";
$filename = $row[ "Filename" ]."";




print ('<td><TR><th>Id #</th><TH>Link</TH><TH>File</TH></tr>');
print ('<tr><TD><strong>'.$Idnum.'</strong></TD>');
print ('<TD>'.$link.'</TD><TD><img src="../images/banners/thumbs/'.$filename.'"></TD>');
print ('<TD><BR><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="banner2remove">');
print ('<input type="hidden" value='.$filename.' name="file2remove">');
print ('<input type="submit" name="Remove" value="Remove" />');
print ('</form></td>');
print ('<td><BR><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Edit" value="Edit" />');
print ('</form></td></tr>');
print ('</td>');

$number=$number+1;

if ($number>0){
print ('</tr>');
$number=0;
}


}
print ('</table></div>');
///end show menu items
}
?>
  <!-- END Admin -->
  </td>
  </tr>
  </table>
  </div>
  

