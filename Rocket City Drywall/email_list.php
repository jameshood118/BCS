Sign up for our Mailing List!
<form action="mail_signup.php" method="post">
Name: <br/>
<input name="name" type="text"><br/>
Email: <br/>
<input name="mail" type="text">
<p><input class="submit" name="Submit" type="Submit" value="Signup"></p>
</form>             
		
		<?php 
	$exists=$_GET['exists'];
	if ($exists=="true") {
	print ('<span style="font-weight:bold;font-size:120%;color:#990000;">Email Exists in Database.</span><br/>');
	}
	?>