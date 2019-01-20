
   		   <?php include ("creds.php"); ?>

							
 <FORM ENCTYPE="multipart/form-data" ACTION="admin_insert_mailing.php" METHOD=POST>
    
  <table width="935" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="230"> <div align="right">Name:</div></td>
      <td width="230"><input name="name" type="text" id="name"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
      <td><div align="right">Email: </div></td>
      <td><input name="email" type="text" id="email"></td>
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="2">&nbsp;</td>
    </tr>
    <tr> 
      <td colspan="4"> <div align="center"> 
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          <input type="submit" name="Submit" value="Submit">
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

