<html>
<head>
<title>Admin at River Valley Shoes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

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
