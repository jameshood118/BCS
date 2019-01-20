<?php echo "<?xml version=\"1.0\" encoding=\"utf-8\"?".">"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>

<?php
$hashtofind=$_POST['hash'];
?>
<form action="" method="post" name="hash dicovery">
Input word to find the hash: <input name="hash" type="text" /><BR>




<input name="Submit" type="submit" value="Uncover" />
<input name="Reset" type="submit" value="Reset" />
</form>
<?php
if ($hashtofind==''){
print ('You Really need to input a value');
exit;
} else {
$hash = md5($hashtofind);
}



?>
<?php if (isset($_POST['Submit'])) { ?>
Hash Discovered! <BR><?php echo $hash ?>
<?php } ?>

<?php if (isset($_POST['Reset'])) { 
unset ($_POST['Submit']);
}?>


</body>
</html>
