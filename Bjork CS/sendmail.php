<?php

					$name=$_POST['name'];
					$email=$_POST['email'];
					$phone=$_POST['phone'];
					$comments=$_POST['comments'];
					$department=$_POST['department']; 
					
					
			
					if ($name<>"" and $email<>"" and $phone<>"" and $comments<>"") {
					$emptyfields="";
					} else {
					$emptyfields="true";
					}

$message = "Department: $department \n
Name: $name \n
Email: $email \n
Phone: $phone \n
Comments: $comments \n
";
					
  

  
if ($emptyfields<>"true") {
mail( "jlbjork@gmail.com", "Message for you, from the BCS Contact Form", $message, "From: $email" );
echo '<script language="JavaScript">window.location="thankyou.php";</script>';
exit;
} else {
header ("Location: http://www.efmoutfitters.com/bjorkcreatives/contact.php?emptyfields=true"); /* Redirect browser */
exit;
}
?>




