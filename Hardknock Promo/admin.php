<?php 
									$error=$_GET['error'];
									if ($error=="true") {
									print ('<font color=red>Login Incorrect Retry.</font><br>');
									}
									?>

  <form name="form1" method="post" action="admin_menu.php">
 <p class="admin-form">
 				<label for="login">Admin Login:</label>
                <input name="login" type="text" id="login">
</p>
<p class="admin-form">
                <label for="password">Password:</label>
                <input name="password" type="password" id="password">
				<br/>              
<div class="submit"><input type="submit" name="Submit" value="Submit"></div>

 </p>
</form>