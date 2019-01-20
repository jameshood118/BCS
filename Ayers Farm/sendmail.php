<?php

					$name=$_POST['name'];
					$email=$_POST['email'];
					$phone=$_POST['phone'];
					$comments=$_POST['comments'];

$message = "Name: $name \n
Email: $email \n
Phone: $phone \n
Comments: $comments \n
";
					
  $email = $emailaddress;
  

  mail( "ayersfarm@att.net", "Ayers Farm Contact Form", $message, "From: $email" );
	echo '<script language="JavaScript">window.location="thankyou.html";</script>';
?>




