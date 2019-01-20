
<html>
<head>
<title>Admin at Butcher Drafting</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php 
							
$login= $_POST["login"];
$loginpass= $_POST["password"];
							
							
$host = "10.6.186.64" ;
$user = "butcherdraft" ;
$pass = "Drafting1" ;
$db = "butcherdraft" ;
$table = "users" ;

$show_all = "SELECT * FROM $table
WHERE Username = '$login'
ORDER BY User_ID";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$User_ID = $row[ "User_ID" ]."";
$username = $row[ "Username" ]."";
$password = $row[ "Password" ]."";
$email = $row[ "Email" ]."";
$account_type=$row["Account_Type"]."";

}

if ($loginpass<>$password or $password=="") {
echo '<script language="JavaScript">window.location="admin.php?error=true";</script>';
}

$sub_message='Logged in as: '.$login.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Account Type: '.$account_type.'';						
							?><?php 
							print ('<div align=right><strong>'.$sub_message.'</strong></div>');
							?>
					<form name="form1" method="post" action="admin_plan.php">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit" value="Admin Plans">
                  </form>
				  		<form name="form1" method="post" action="admin_project.php">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit" value="Admin Projects">
                  </form>
				  		<form name="form1" method="post" action="admin_tip.php">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit" value="Admin Tips">
                  </form>
				  		<form name="form1" method="post" action="admin_mailing.php">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit" value="Admin Mailing List">
                  </form>
				  
                     <form name="form4" method="post" action="admin.php">
                    <input type="submit" name="Submit4" value="Logout">
                  </form>
</body>
</html>
