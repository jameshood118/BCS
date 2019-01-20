<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php

$login=$_POST['login'];
$pass=$_POST['pass'];

if ($login!="bjorkcs" || $pass!="toshiba") {
die(); 
}
else
{

?>

<form action="admin_wreath_mail_send.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="login" value="<?php echo $login?>"><input type="hidden" name="pass" value="<?php echo $pass?>">
Subject: <input type="text" name="subject"><br>
<textarea name="body" rows="10" cols="30"></textarea> <br>
<input type="submit" value="Send Mail">
</form>
<form action="admin_cp_wreath.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="login" value="<?php echo $login?>"><input type="hidden" name="pass" value="<?php echo $pass?>">
<input type="submit" value="Cancel">
</form>

<?php

}

?>

</body>
</html>
