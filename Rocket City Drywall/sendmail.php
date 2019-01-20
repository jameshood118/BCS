<?php

					$name=$_POST['name'];
					$email=$_POST['email'];
					$phone=$_POST['phone'];
					$comments=$_POST['message'];
					$subject=$_POST['category']; 
					

					
					
			
$message = "Subject: $Subject \n
Name: $name \n
Email: $email \n
Phone: $phone \n
Comments: $comments \n
";
					

mail( "jlbjork@gmail.com", $subject, $message, "From: $email" echo '<script language="JavaScript">window.location="thankyou.php";</script>';

?>




