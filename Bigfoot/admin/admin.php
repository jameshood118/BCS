<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin at Big Foot Shoot To Kill</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<body>
									<?php 
									$error=$_GET['error'];
									if ($error=="true") {
									print ('<font color=red>Login Incorrect Retry.</font><br>');
									}
									?>

 <form name="form1" method="post" action="admin_menu.php">
 				Admin Login:<input name="login" type="text" id="login"><BR>
                Admin Password:<input name="password" type="password" id="password">              
              <input type="submit" name="Submit" value="Submit">
              </form>

</body>
</html>
