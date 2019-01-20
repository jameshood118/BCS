<html><body>   		   <?php include ("creds.php"); ?>

		
<?php

$Idnum=$_POST['selected_email'];
$name=$_POST['name'];
$email=$_POST['email'];


///update database
$table="mailinglist";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("UPDATE $table set Idnum='$Idnum',
Name='$name',
Email='$email'
WHERE Idnum = '$Idnum'") or die(mysql_error());

///end update database


?>

<form name="return" method="post" action="admin_mailing.php">
<input type="hidden" name="login" value="<?php echo $login?>">
<input type="hidden" name="password" value="<?php echo $loginpass?>">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>
  <!-- END Admin -->
  </td>
  </tr>
  </table>
  </div>
</body></html>
