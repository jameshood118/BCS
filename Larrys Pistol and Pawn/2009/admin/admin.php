<?php 
$error=$_GET['error'];
if ($error=="true") {
print ('<span style="background:#ccc;color:red;padding:2px;">LOGIN FAILED.</span><br/><br/>');
}
?>

					
<form name="form1" method="post" action="admin_menu.php">
<p>Admin Login:   <input name="login" type="text"></p>
<p style="padding-top:5px;">Password:<input name="password" type="password"></p>
<p class="submit"><input type="submit" name="submit" value="Submit"></p>
</form>