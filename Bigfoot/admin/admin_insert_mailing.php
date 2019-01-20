   		   <?php include ("creds.php"); ?>
<?php 

$name=$_POST['name'];
$email=$_POST['email']; 

$table = "mailinglist" ;

$show_all = "SELECT * FROM $table Order by Idnum";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_num=$Idnum+1;
 
mysql_query("INSERT into $table (Idnum, Name, Email) Values ('$new_Idnum_num', '$name','$email')") or die(mysql_error());

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
