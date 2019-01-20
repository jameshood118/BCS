<html>
<head>
<title>Rocket City Drywall | Huntsville, Alabama</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
</head>

<body>

<div id="wrapper">
  <div id="container"> 
    <!-- Header -->
    <div id="header"> 
      <div id="header-img"> <img src="images/collage1.jpg"/> </div>
      <!--menu-->
      <div id="menu"> 
        <?php include('menu.php'); ?>
      </div>
      <!--end menu-->
      <div id="feature">
	  <p class="feature-title">Admin Page</p> 
		<?php include('account_info.php'); ?>
      </div>
    </div>
    <!-- End Header -->
    <!-- START CONTENT -->
    <div id="content"> 
      <div id="body-admin"> 
        <p class="text-admin">

<div align="center"><table><tr>
				       	 <form name="form4" method="post" action="admin_menu.php">
                          <input type="submit" name="Submit3" value="Back to Admin Menu">
                          <input type="hidden" value="<?php echo $login?>" name="login">
                          <input type="hidden" value="<?php echo $loginpass?>" name="password">
                        </form>
						
						  	 <form name="form4" method="post" action="admin_add_mailing.php">
                          <input type="submit" name="Submit3" value="Add to List">
                          <input type="hidden" value="<?php echo $login?>" name="login">
                          <input type="hidden" value="<?php echo $loginpass?>" name="password">
                        </form>
						
						  	 <form name="form4" method="post" action="mass_mail.php">
                          <input type="submit" name="Submit3" value="Mass Mailing">
                          <input type="hidden" value="<?php echo $login?>" name="login">
                          <input type="hidden" value="<?php echo $loginpass?>" name="password">
                        </form>
						</tr></table></div><BR>        <?php 
	$exists=$_GET['exists'];
	if ($exists=="true") {
	print ('<font color=red size="2">Email Exists in Database.</font><br>');
	}
	?><BR>
						
						<?php 
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "mailinglist" ;

$show_all = "SELECT * FROM $table ORDER by Idnum ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

print ('<div align="center"><table width=600 border="1">');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$email = $row[ "Email" ]."";
$category = $row[ "Category" ]."";



print ('<td><TR><th>Id #</th><TH>Name</TH><TH>Email</TH><th>Category</th></tr>');
print ('<tr><TD><strong>'.$Idnum.'</strong></TD>');
print ('<TD>'.$name.'</TD><TD>'.$email.'</TD><TD>'.$category.'');
print ('<TD><BR><form name="form1" id="form1" method="post" action="remove_mailing.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Remove" />');
print ('</form></td>');
print ('<td><BR><form name="form1" id="form1" method="post" action="edit_mailing.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit3" value="Edit" />');
print ('</form></td></tr>');
print ('</td>');

$number=$number+1;

if ($number>1){
print ('</tr>');
$number=0;
}


}
print ('</table></div>');
///end show menu items
?>

				  </p>
      </div>
      <!--end body-->
    </div>
    <!-- END CONTENT -->
  </div>
<!-- END CONTAINER -->

<!-- START WRAPPERfooter -->

  <div id="wrapperfooter"> 
    <!-- Footer -->
    <div id="footer"> 
    </div>
    <!-- END footer -->
  </div>
<!-- END WRAPPERfooter -->

</div> 
<!-- END WRAPPER -->

</body>
</html>
