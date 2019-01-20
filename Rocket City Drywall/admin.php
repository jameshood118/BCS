<?php 
$error=$_GET['error'];
if ($error=="true") {
print ('<span style="background:#ccc;color:red;padding:2px;">LOGIN FAILED.</span><br/><br/>');
}
?>

					
<form name="form1" method="post" action="admin_menu.php">
Admin Login:   <input name="login" size="12" type="text" id="login">

Password:<input name="password" size="12" type="password" id="password">

<input class="submit" type="submit" name="submit" value="Submit">
</form>