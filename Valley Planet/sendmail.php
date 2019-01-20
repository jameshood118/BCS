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
	switch ($department) {
		case 'The Deep End':
			mail( "deepend@valleyplanet.com", "Valley Planet Contact Form", $message, "From: $email" );
			echo '<script language="JavaScript">window.location="thankyou.php";</script>';
			break;

		case 'Opinions':
			mail( "opinions@valleyplanet.com", "Valley Planet Contact Form", $message, "From: $email" );
			echo '<script language="JavaScript">window.location="thankyou.php";</script>';
			break;

		case 'Freelance':
			mail( "freelance@valleyplanet.com", "Valley Planet Contact Form", $message, "From: $email" );
			echo '<script language="JavaScript">window.location="thankyou.php";</script>';
			break;
		
		case 'Ad Sales':
			mail( "sales@valleyplanet.com", "Valley Planet Contact Form", $message, "From: $email" );
			echo '<script language="JavaScript">window.location="thankyou.php";</script>';
			break;

		case 'Listings':
			mail( "listings@valleyplanet.com", "Valley Planet Contact Form", $message, "From: $email" );
			echo '<script language="JavaScript">window.location="thankyou.php";</script>';
			break;

		case 'Calendar':
			mail( "calendar@valleyplanet.com", "Valley Planet Contact Form", $message, "From: $email" );
			echo '<script language="JavaScript">window.location="thankyou.php";</script>';
			break;
		
		case 'Classifieds':
			mail( "classifieds@valleyplanet.com", "Valley Planet Contact Form", $message, "From: $email" );
			echo '<script language="JavaScript">window.location="thankyou.php";</script>';
			break;

		case 'Information':
			mail( "info@valleyplanet.com", "Valley Planet Contact Form", $message, "From: $email" );
			echo '<script language="JavaScript">window.location="thankyou.php";</script>';
			break;
		case 'Web Questions':
			mail( "jlbjork@gmail.com", "Valley Planet Contact Form", $message, "From: $email" );
			echo '<script language="JavaScript">window.location="thankyou.php";</script>';
			break;
			}

} else {
echo '<script language="JavaScript">window.location="contact.php?emptyfields=true"</script>'; /* Redirect browser */
}
?>




