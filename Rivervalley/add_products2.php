<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>River Valley Comfort Shoes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
    <script type="text/javascript" src="swfobject.js"></script>

<script type="text/javascript">
	function showonlyone(thechosenone) {
      var newboxes = document.getElementsByTagName("div");
            for(var x=0; x<newboxes.length; x++) {
                  name = newboxes[x].getAttribute("name");
                  if (name == 'newboxes') {
                        if (newboxes[x].id == thechosenone) {
                        newboxes[x].style.display = 'block';
                  }
                  else {
                        newboxes[x].style.display = 'none';
                  }
            }
      }
}
	</script>
</head>

<body>
<div id="invis"> 
  <div id="header" style="background:transparent url('images/header2.png') no-repeat top center;"> 
    <div class="account-info"> 
      <?php 
							
$login= $_POST["login"];
$loginpass= $_POST["password"];
							
							
$host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
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
	  
	$sub_message='<strong>Logged in as</strong>: '.$login.' &bull; <strong>Account Type</strong>: '.$account_type.'';						
	?>
      <?php 
	print ('<div align=right>'.$sub_message.'</div>');
	?>
    </div>
    <div class="account-info" style="padding-top:25px;"> 
      <form name="form1" method="post" action="admin_menu.php">
        <input type="hidden" value="<?php echo $login?>" name="login">
        <input type="hidden" value="<?php echo $loginpass?>" name="password">
        <input type="submit" name="Submit" value="Admin Menu">
      </form>
      <form style="padding-top:5px;" name="form4" method="post" action="index.php">
        <input type="submit" name="Submit4" value="Logout">
      </form>
      <p class="text"> 
        <?php include('add_2.php'); ?></p>
    </div>
  <!--end body-->
  <div class="push" style="height:150px;"></div>
</div>
  <!--end content-->
</div>
<!--end invis-->

	


</body>
</html>
