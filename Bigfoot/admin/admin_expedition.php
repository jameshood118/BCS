   		   <?php include ("creds.php"); 
		   $first_view="1";
		   ?>

<table>
            <tr><td>
              <form name="form4" method="post" action="">
                <input type="submit" name="Add" value="Add to List">
                <input type="hidden" value="<?php echo $login?>" name="login">
                <input type="hidden" value="<?php echo $loginpass?>" name="password">
              </form></td>
			  <td>
              <form name="form4" method="post" action="">
                <input type="submit" name="Add_Documents" value="Add Documents">
                <input type="hidden" value="<?php echo $login?>" name="login">
                <input type="hidden" value="<?php echo $loginpass?>" name="password">
              </form></td>
			  <td> 
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
$expedition2remove=$_POST['expedition2remove'];
$table="expeditions";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE from $table WHERE Exped_ID='$expedition2remove'") or die(mysql_error());

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
				if (isset($_POST['Add_Documents'])) {
				unset ($first_view);
				 ?>
		 <FORM ENCTYPE="multipart/form-data" ACTION="insert_documents.php" METHOD=POST>
    
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Expedition:</div></td>
      <td><select name="expedition">
	  <option value="select">Select..</option>
<?php	  
$table = "expeditions" ;

$show_all = "SELECT * FROM $table ORDER by Exped_ID ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$exped_id = $row[ "Exped_ID" ]."";
$commander = $row[ "Commander" ]."";
$date = $row[ "Date" ]."";


$table2 = "ex_commander" ;

$show_all2 = "SELECT * FROM $table2 WHERE Idnum='$commander'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result2 = mysql_query ($show_all2) or die ( mysql_error ());

while ($row2 = mysql_fetch_array ($result2))

{

$Idnum = $row2[ "Idnum" ]."";
$name = $row2[ "Name" ]."";
}

print ('<option value="'.$exped_id.'">'.$name.' - '.$date.'</option>'); }?>

	  </select></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
	  <td><div align="right">Documents/Downloads:</div></td>
      <td> <input name="documents" type="file"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	   <tr>
	  <td><div align="right">Document Description:</div></td>
      <td><input name="description" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
     <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <input type="submit" name="Submit_Add" value="Submit New Files">
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
				if (isset($_POST['Add'])) {
				unset ($first_view);
				 ?>
		 <FORM ENCTYPE="multipart/form-data" ACTION="insert_expedition.php" METHOD=POST>
    
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Expedition Commander:</div></td>
      <td><select name="commander">
	  <option value="select">Select..</option>
<?php	  
$table = "ex_commander" ;

$show_all = "SELECT * FROM $table ORDER by Idnum ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";

print ('<option value="'.$Idnum.'">'.$name.'</option>'); }?>

	  </select></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
      <td> <div align="right">Month:</div></td>
		<td><input name="month" type="text"></td>
    	<td colspan="2">&nbsp;</td>
	</tr>
		<tr>
      <td> <div align="right">Day:</div></td>
		<td><input name="day" type="text"></td>
    	<td colspan="2">&nbsp;</td>
	</tr>
		<tr>
      <td> <div align="right">Year:</div></td>
		<td><input name="year" type="text"></td>
    	<td colspan="2">&nbsp;</td>
	</tr>
	    <tr> 
      <td> <div align="right">Target Location:</div></td>
      <td><input name="location" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
	  <td><div align="right">Reasons to Believe:</div></td>
      <td> <textarea name="reasons" cols="25" rows="10"></textarea></td>
      <td colspan="2">&nbsp;</td>
    </tr>

   <tr>
	  <td><div align="right">Documents/Downloads:</div></td>
      <td> <input name="documents" type="file"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	   <tr>
	  <td><div align="right">Document Description:</div></td>
      <td><input name="description" type="text"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
     <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <input type="submit" name="Submit_Add" value="Submit New Expedition">
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
		
		$selected_expedition=$_POST['exped_id'];
		

$table = "expeditions" ;

$show_all = "SELECT * FROM $table 
WHERE Exped_ID = '$selected_expedition'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$commander = $row[ "Commander" ]."";
$reasons = $row[ "Reasons" ]."";
$cost = $row[ "Cost" ]."";
$location = $row[ "Location" ]."";

}

?>
 <FORM ENCTYPE="multipart/form-data" ACTION="alter_expedition.php" METHOD=POST>
    <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Expedition Commander:</div></td>
      <td><select name="commander">
	  	  <option value="select">Select..</option>

<?php	  
$table = "ex_commander" ;

$show_all = "SELECT * FROM $table ORDER by Idnum ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";

if ($commander==$Idnum){
$commander_check="selected";
} else {
$commander_check="";
}

print ('<option value="'.$Idnum.'" '.$commander_check.'>'.$name.'</option>'); }?>

	  </select></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	
		<tr>
      <td> <div align="right">Month:</div></td>
		<td><input name="month" type="text"></td>
    	<td colspan="2">&nbsp;</td>
	</tr>
		<tr>
      <td> <div align="right">Day:</div></td>
		<td><input name="day" type="text"></td>
    	<td colspan="2">&nbsp;</td>
	</tr>
		<tr>
      <td> <div align="right">Year:</div></td>
		<td><input name="year" type="text"></td>
    	<td colspan="2">&nbsp;</td>
	</tr>
	    <tr> 
      <td> <div align="right">Target Location:</div></td>
      <td><input name="location" type="text" value="<?php echo $location?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	<tr>
	  <td><div align="right">Reasons to Believe:</div></td>
      <td> <textarea name="reasons" cols="25" rows="10"><?php echo $reasons?></textarea></td>
      <td colspan="2">&nbsp;</td>
    </tr>

   <tr>
	  <td><div align="right">Documents/Downloads:</div></td>
      <td> <input name="documents" type="file"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
	   <tr>
	  <td><div align="right">Document Description:</div></td>
      <td><input name="description" type="text"></td>
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
print ('<input type="hidden" value="'.$exped_id.'" name="exped_id">');
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
$table = "expeditions" ;

$show_all = "SELECT * FROM $table ORDER by Exped_ID ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());


while ($row = mysql_fetch_array ($result))

{

$exped_id = $row[ "Exped_ID" ]."";
$commander = $row[ "Commander" ]."";
$reasons = $row[ "Reasons" ]."";
$cost = $row[ "Cost" ]."";
$location = $row[ "Location" ]."";
$date = $row[ "Date" ]."";


	  
$table2 = "ex_commander" ;

$show_all2 = "SELECT * FROM $table2 WHERE Idnum='$commander'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result2 = mysql_query ($show_all2) or die ( mysql_error ());

while ($row2 = mysql_fetch_array ($result2))

{

$Idnum = $row2[ "Idnum" ]."";
$name = $row2[ "Name" ]."";

}

print ('<div align="center"><table border="1" width="45%">');
print ('<tr><TD><strong>Commander: </strong>'.$name.'</TD><TD><strong>Location: </strong>'.$location.'</TD>');
print ('<td><strong>Cost: </strong>'.$cost.'</td><td><strong>Date: </strong>'.$date.'</td></tr>');
print ('<tr><td colspan="4"><strong>Reasons: <BR></strong>'.$reasons.'</TD></tr><tr><td colspan="4"><strong>Files Associated with this Expedition:</strong><BR>');

$table3 = "documents" ;

$show_all3 = "SELECT * FROM $table3 WHERE Exped_ID='$exped_id'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result3 = mysql_query ($show_all3) or die ( mysql_error ());

while ($row3 = mysql_fetch_array ($result3))

{

$file = $row3[ "File" ]."";
$description = $row3[ "Description" ]."";

if(file_exists('../images/expeditions/'.$exped_id.'/'.$file.'' )){
print ('<a href="../images/expeditions/'.$exped_id.'/'.$file.'">'.$file.'</a><BR>');
}else{
echo "";
}

}
print ('</td></tr><tr><TD><BR><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$exped_id.' name="expedition2remove">');
print ('<input type="submit" name="Remove" value="Remove" />');
print ('</form></td>');
print ('<td><BR><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$exped_id.' name="exped_id">');
print ('<input type="submit" name="Edit" value="Edit" />');
print ('</form></td>');



$number=$number+1;

if ($number>0){
print ('</table></div><BR>');
$number=0;
}


}

///end show menu items
}
?>
  <!-- END Admin -->
  </td>
  </tr>
  </table>
  </div>
  

