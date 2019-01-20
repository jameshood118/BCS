   		   <?php include ("creds.php"); 
		   $first_view="1";
		   ?>

<table>
            <tr><td>
              <form name="form4" method="post" action="">
                <input type="submit" name="Add" value="Add Sightings">
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
$sighting2remove=$_POST['sight_id'];
$table="sightings";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE from $table WHERE Sight_ID='$sighting2remove'") or die(mysql_error());

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


$delimage="../images/sightings/".$sighting2remove.".jpg";
$delthumb="../images/sightings/thumbs/".$sighting2remove.".jpg";
///check to see if file size is >0 and upload file if so.
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
		 <FORM ENCTYPE="multipart/form-data" ACTION="insert_sightings.php" METHOD=POST>
    
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Title:</div></td>
      <td><input name="title" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	
	    <tr> 
      <td> <div align="right">Author Name:</div></td>
      <td><input name="name" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	
	<tr> 
      <td> <div align="right">Date:</div></td>
      <td><input name="date" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	
	    <tr> 
      <td> <div align="right">Location:</div></td>
      <td><input name="location" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr> 
      <td> <div align="right">Time:</div></td>
      <td><input name="time" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
<tr> 
      <td> <div align="right">Details:</div></td>
      <td><textarea name="details" cols="20" rows="10"></textarea></td>
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
          <input type="submit" name="Submit_Add" value="Submit New Sighting">
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
		
		$sight2edit=$_POST['sight2edit'];
		

$table = "sightings" ;

$show_all = "SELECT * FROM $table 
WHERE Sight_ID = '$sight2edit'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$title = $row[ "Title" ]."";
$name = $row[ "Name" ]."";
$date = $row[ "Date" ]."";
$time = $row[ "Time" ]."";
$location = $row[ "Location" ]."";
$details = $row[ "Details" ]."";
$status = $row[ "Status" ]."";


}

?>
 <FORM ENCTYPE="multipart/form-data" ACTION="alter_sightings.php" METHOD=POST>
    
    <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Title:</div></td>
      <td><input name="title" type="text" value="<?php echo $title?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	
	    <tr> 
      <td> <div align="right">Author Name:</div></td>
      <td><input name="name" type="text" value="<?php echo $name?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	
	<tr> 
      <td> <div align="right">Date:</div></td>
      <td><input name="date" type="text" value="<?php echo $date?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	
	    <tr> 
      <td> <div align="right">Location:</div></td>
      <td><input name="location" type="text" value="<?php echo $location?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr> 
      <td> <div align="right">Time:</div></td>
      <td><input name="time" type="text" value="<?php echo $time?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
<tr> 
      <td> <div align="right">Details:</div></td>
      <td><textarea name="details" cols="20" rows="10"><?php echo $details?></textarea></td>
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
          <input type="submit" name="Submit_Add" value="Submit Changes">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$sight2edit.'" name="sight2edit">');
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

				  
$table = "sightings" ;

$show_all = "SELECT * FROM $table ORDER by Sight_ID ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div align="center"><table border="1">');

while ($row = mysql_fetch_array ($result))

{

$sight_id = $row[ "Sight_ID" ]."";
$title = $row[ "Title" ]."";
$name = $row[ "Name" ]."";
$date = $row[ "Date" ]."";
$time = $row[ "Time" ]."";
$location = $row[ "Location" ]."";
$details = $row[ "Details" ]."";
$status = $row[ "Status" ]."";

print ('<TD rowspan="6"><a href="../images/sightings/'.$sight_id.'.jpg"><img src="../images/sightings/thumbs/'.$sight_id.'.jpg" border="0"></a></TD>');
print ('<tr><TD><strong>Sighting Id: </strong>'.$sight_id.'</TD><TD><strong>Title: </strong>'.$title.'</TD><td><strong>Name: </strong>'.$name.'</td></tr>');
print ('<tr><td><strong>Date: </strong>'.$date.'</td><td><strong>Time: </strong>'.$time.'</td><td><strong>Location: </strong>'.$location.'</td></tr>');
print ('<tr><td colspan="2"><strong>Details: </strong>'.$details.'</td><td><strong>Status: </strong>'.$status.'</td></tr>');
print ('<tr><TD><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$sight_id.'" name="sight_id">');
print ('<input type="submit" name="Remove" value="Remove" />');
print ('</form></td>');
print ('<td><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$sight_id.'" name="sight2edit">');
print ('<input type="submit" name="Edit" value="Edit" />');
print ('</form></td></tr>');
print ('<tr><TD><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$sight_id.'" name="sight_id">');
print ('<input type="submit" name="Approved" value="Approve" />');
print ('</form></td>');
print ('<td><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
print ('<input type="hidden" value="'.$sight_id.'" name="sight_id">');
print ('<input type="submit" name="Pending" value="Pending" />');
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

        <?php 
if (isset($_POST['Pending'])) {
$sight_id=$_POST['sight_id'];


$table = "sightings" ;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table SET Sight_ID='$sight_id',
Status='pending'
WHERE Sight_ID='$sight_id'") or die(mysql_error());

}
?>

        <?php 
if (isset($_POST['Approved'])) {
$sight_id=$_POST['sight_id'];


$table = "sightings" ;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table SET Sight_ID='$sight_id',
Status='approved'
WHERE Sight_ID='$sight_id'") or die(mysql_error());

}
?>

  <!-- END Admin -->
  </td>
  </tr>
  </table>
  </div>
  

