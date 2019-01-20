<html><body>
<?php

$email=$_GET['var1'];

$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "mailinglist" ;

$show_all = "SELECT * FROM $table";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());

mysql_query("DELETE from $table WHERE Email='$email'") or die(mysql_error());

///end update database

?>
<form name="return" method="post" action="index.php">
</form>

<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script> 

</body></html>


