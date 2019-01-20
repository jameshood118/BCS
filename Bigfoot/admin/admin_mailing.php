   		   <?php include ("creds.php"); ?>

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
              </form></td><td>
              <form name="form4" method="post" action="">
                <input type="submit" name="Mass_Mail" value="Mass Mailing">
                <input type="hidden" value="<?php echo $login?>" name="login">
                <input type="hidden" value="<?php echo $loginpass?>" name="password">
              </form></td><td><form><input type=button value="refresh" onClick="window.location.reload()"></form> </td>
            </tr>
          </table>
        </div>
        <BR>
        <BR>
		
			<?php
						if (isset($_POST['Remove'])) { 
		
		 ///Removal of Email is here
$email2remove=$_POST['email2remove'];
$table="mailinglist";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE from $table WHERE Idnum='$email2remove'") or die(mysql_error());

///end Removal

}
?>	<?php 
if (isset($_POST['Mass_Mail'])) {  ?>
<form action="mass_mailing_list.php" method="post" ENCTYPE="multipart/form-data" >

           Subject:  
            
  <input name="subject" type="text" id="subject" size="40" maxlength="45">
            <BR/>
  Message: <BR/>
            
  <textarea name="message" cols="50" rows="15" id="message"></textarea>
            <BR/>
			Upload Picture: <input type="file" name="file">
                <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
            <INPUT TYPE="submit" NAME="send" VALUE="Submit">
            <BR/>
            <BR/>
</form>

        <form name="form2" method="post" action="">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        <input type="submit" name="Abort_mass" value="Abort Mass Mail">
        </form>
			
		<?php } ?>
		<?php 
				if (isset($_POST['Add'])) { ?>
		 <FORM ENCTYPE="multipart/form-data" ACTION="insert_mailing.php" METHOD=POST>
    
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Name:</div></td>
      <td><input name="name" type="text" id="name"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
	  <td><div align="right">Email:</div></td>
      <td> <input name="email" type="text" id="email"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
     <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <input type="submit" name="Submit_Add" value="Submit New Email">
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
		
		$selected_email=$_POST['Idnum'];
		

$table = "mailinglist" ;

$show_all = "SELECT * FROM $table 
WHERE Idnum = '$selected_email'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$name = $row[ "Name" ]."";
$email = $row[ "Email" ]."";


}

?>
 <FORM ENCTYPE="multipart/form-data" ACTION="alter_mailing.php" METHOD=POST>
    
  <table width="100%" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td> <div align="right">Change Name:</div></td>
      <td><input name="name" type="text" id="name" value="<?php echo $name?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
	  <td><div align="right">Change Email:</div></td>
      <td> <input name="email" type="text" id="email" value="<?php echo $email?>"></td>
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
print ('<input type="hidden" value="'.$selected_email.'" name="selected_email">');
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
if (isset($_POST['Abort_mass'])) {
unset ($_POST['Mass_Mail']);
}
?>
<?php 

				  
$table = "mailinglist" ;

$show_all = "SELECT * FROM $table ORDER by Idnum ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div align="center"><table border="1">');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$email = $row[ "Email" ]."";




print ('<td><TR><th>Id #</th><TH>Name</TH><TH>Email</TH></tr>');
print ('<tr><TD><strong>'.$Idnum.'</strong></TD>');
print ('<TD>'.$name.'</TD><TD>'.$email.'</TD>');
print ('<TD><BR><form name="form1" id="form1" method="post" action="">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="email2remove">');
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

if ($number>1){
print ('</tr>');
$number=0;
}


}
print ('</table></div>');
///end show menu items
?>
  <!-- END Admin -->
  </td>
  </tr>
  </table>
  </div>
  

