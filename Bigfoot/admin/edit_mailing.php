   		   <?php include ("creds.php"); ?>

		
<?php

$Idnum=$_POST['Idnum'];

$table = "mailinglist" ;

$show_all = "SELECT * FROM $table 
WHERE Idnum = '$Idnum'";

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
    
  <table width="935" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="230"> <div align="right">Change Name:</div></td>
      <td width="230"> <input name="Idnum" type="hidden" id="Idnum" value="<?php echo $Idnum?>"> 
        <input name="name" type="text" id="name" value="<?php echo $name?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
	  <td><div align="right">Change Email:</div></td>
      <td> <input name="email" type="text" id="email" value="<?php echo $email?>"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
         <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <input type="submit" name="Submit" value="Submit Changes">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
        </div></td>
    </tr>
  </table>
  </form>
  <p> </p>
  
<table width="935" border="0" cellspacing="0" cellpadding="5">
  <tr> 
    <td><div align="center"> 
        <form name="form2" method="post" action="admin_mailing.php">
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          <input type="submit" name="Submit2" value="Abort Changes">
        </form>
      </div></td>
  </tr>
</table>

  <!-- END Admin -->
  </td>
  </tr>
  </table>
  </div>

