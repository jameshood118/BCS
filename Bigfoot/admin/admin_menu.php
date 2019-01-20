<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin at Jameshood118</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<body>

   		   <?php include ("creds.php"); ?>

  
				  <form name="form1" method="post" action="admin_gallery.php">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit" value="Admin Gallery">
                  </form>
		
                     <form name="form4" method="post" action="../index.php">
                    <input type="submit" name="Submit4" value="Logout">
                  </form>
</body>
</html>
