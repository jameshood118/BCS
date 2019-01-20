<?php
$name=$_POST['name'];
$email=$_POST['mail'];
 
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "mailinglist" ;

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

$sql = mysql_query("SELECT email FROM $table WHERE email = '$email'") or die ("query 1: " . mysql_error());
$mysql_num = mysql_num_rows($sql);

if ($mysql_num >= 1)
{
echo '<script language="JavaScript">window.location="index.php?exists=true";</script>';
}
else
{

mysql_query("INSERT into $table (Idnum, Name, Email) Values ('$Idnum', '$name','$email')") or die(mysql_error());} 

?>

<form name="return" method="post" action="index.php">
</form>

<script language="javascript" type="text/javascript">
document.return.submit();
</script>


