   		   <?php include ("creds.php"); 
		   $first_view="1";
		   ?>

<table>
            <tr><td>
              <form name="form4" method="post" action="">
                <input type="submit" name="Add" value="Add to List">
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
$person2remove=$_POST['person2remove'];
$table="ex_commander";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE from $table WHERE Idnum='$person2remove'") or die(mysql_error());


// set up basic connection
$ftp_server="208.109.181.209";
$ftp_user_name="bigfootstk";
$ftp_user_pass="Bigfoot1";
$conn_id = ftp_connect($ftp_server);

$delimage='../images/excommander/'.$person2remove.'.jpg';
$delthumb='../images/excommander/thumbs/'.$person2remove.'.jpg';


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
				if (isset($_POST['Add'])) { 
						unset ($first_view);

				?>
		 <FORM ENCTYPE="multipart/form-data" ACTION="insert_excommander.php" METHOD=POST>
    
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Name:</div></td>
      <td><input name="name" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	    <tr> 
      <td> <div align="right">Age:</div></td>
      <td><input name="age" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
   <tr>
	  <td><div align="right">Email:</div></td>
      <td> <input name="email" type="text" id="email"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	
	<tr>
	  <td><div align="right">Bio:</div></td>
      <td> <textarea name="bio" cols="25" rows="10"></textarea></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
	  <td><div align="right">Message:</div></td>
      <td> <textarea name="message" cols="25" rows="10"></textarea></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	   <tr>
	  <td><div align="right">Video:</div></td>
      <td> <input name="video" type="file"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
		   <tr>
	  <td><div align="right">Picture:</div></td>
      <td> <input name="picture" type="file"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
     <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <input type="submit" name="Submit_Add" value="Submit New Commander">
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
		if (isset($_POST['Edit'])) {
				unset ($first_view);

		$selected_person=$_POST['Idnum'];
		

$table = "ex_commander" ;

$show_all = "SELECT * FROM $table 
WHERE Idnum = '$selected_person'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$name = $row[ "Name" ]."";
$age = $row[ "Age" ]."";
$bio = $row[ "Bio" ]."";
$email = $row[ "Email" ]."";
$message = $row[ "Message" ]."";
$video = $row[ "Video" ]."";


}

?>
 <FORM ENCTYPE="multipart/form-data" ACTION="alter_excommander.php" METHOD=POST>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Name:</div></td>
      <td><input name="name" type="text" value="<?php echo $name?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	    <tr> 
      <td> <div align="right">Age:</div></td>
      <td><input name="age" type="text" value="<?php echo $age?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
   <tr>
	  <td><div align="right">Email:</div></td>
      <td> <input name="email" type="text" id="email" value="<?php echo $email?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	
<tr>
	  <td><div align="right">Bio:</div></td>
      <td> <textarea name="bio" cols="25" rows="10"><?php echo $bio?></textarea></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
	  <td><div align="right">Message:</div></td>
      <td> <textarea name="message" cols="25" rows="10"><?php echo $message?></textarea></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	   <tr>
	  <td><div align="right">Video:</div></td>
      <td> <input name="video" type="file"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
		   <tr>
	  <td><div align="right">Picture:</div></td>
      <td> <input name="picture" type="file"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
     <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <input type="submit" name="Submit" value="Submit Changes">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$selected_person.'" name="selected_person">');
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
				  
$table = "ex_commander" ;

$show_all = "SELECT * FROM $table ORDER by Idnum ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div align="center"><table border="1">');
while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$age = $row[ "Age" ]."";
$bio = $row[ "Bio" ]."";
$email = $row[ "Email" ]."";
$message = $row[ "Message" ]."";
$video = $row[ "Video" ]."";

if ($video==""){
$video=="nothing";
}
if(file_exists('../images/excommander/'.$Idnum.'.jpg')){
print ('<tr><td rowspan="4"><img src="../images/excommander/thumbs/'.$Idnum.'.jpg"></td></tr>');
}else{
print ('<tr><td rowspan="4"><img src="../images/excommander/thumbs/nopic.jpg"></td></tr>');
};
print ('<tr><TD><strong>Name: </strong>'.$name.'</TD><TD><strong>Age: </strong>'.$age.'</TD><TD><strong>Email: </strong>'.$email.'</TD></tr>');
print ('<tr><td><strong>Bio: </strong>'.$bio.'</td><td><strong>Message: </strong>'.$message.'</td>');
if(file_exists('../video/excommander/'.$video.'' and $video<>"nothing")){
print ('<td><center><a href="../video/excommander/'.$video.'">Video</a></center></td></tr>');
}else{
echo "<td>No Video</td></tr>";
}
print ('<tr><TD><BR><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="person2remove">');
print ('<input type="submit" name="Remove" value="Remove" />');
print ('</form></td>');
print ('<td><BR><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Edit" value="Edit" />');
print ('</form></td>');
if(file_exists('../images/excommander/thumbs/'.$Idnum.'.jpg' )){
print ('<td><center><img src="../images/excommander/thumbs/'.$Idnum.'.jpg"></center></td></tr>');
}else{
echo "<td></td></tr>";
}

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
  

