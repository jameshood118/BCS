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

<div align="center">
<table border="0"><tr><td>
				       	 <form name="form4" method="post" action="admin_menu.php">
                          <input type="submit" name="Submit3" value="Back to Admin Menu">
                          <input type="hidden" value="<?php echo $login?>" name="login">
                          <input type="hidden" value="<?php echo $loginpass?>" name="password">
                        </form>
						
						
 
 <form action="" method="post" enctye="multipart/form-data">Sort By:
 <select name="sort">
	<option value="Show_All">Show All</option>
	<option value="Approved">Approved</option>
	<option value="Pending">Pending</option>
	</select>
	  <input type="hidden" value="<?php echo $login?>" name="login">
      <input type="hidden" value="<?php echo $loginpass?>" name="password">
	<input type="submit" name="Submit3" value="Sort">
	</form></td>  </tr>
</table>
						
						<?php 
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "talkbacks" ;

$sort=$_POST['sort'];

if ($sort=="Approved")
{
$show_all = "SELECT * FROM $table WHERE Status='approved' ORDER by Idnum DESC";
}
elseif ($sort=="Pending")
{
$show_all = "SELECT * FROM $table WHERE Status='pending' ORDER by Idnum DESC";
}
else
{
$show_all = "SELECT * FROM $table ORDER by Idnum DESC";
}

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());
	

print ('<table width=600>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$email = $row[ "Email" ]."";
$post_pass = $row[ "Post_pass" ]."";
$title = $row[ "Title" ]."";
$message = $row[ "Message" ]."";
$status = $row[ "Status" ]."";
$image = $row[ "Image" ]."";
$weblink = $row[ "Weblink" ]."";
$phone = $row[ "Phone" ]."";
$company_name = $row[ "Company_name" ]."";
$category = $row[ "Category" ]."";



print ('<td width="300"><strong>'.$title.'</strong><BR>');
print ('<a href="'.$weblink.'" target="_blank"><img src="images/talkback/'.$Idnum.'.jpg" border="0" width="125"></a><BR>');
print (''.$company_name.' '.$phone.'<BR>');
print (''.$message.'<strong><BR><BR>');
print (''.$status.'</strong><BR><BR>');
print ('<form name="form1" id="form1" method="post" action="approve_talkbacks.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Approve" />');
print ('</form>');
print ('<form name="form1" id="form1" method="post" action="pend_talkbacks.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Make Pending" />');
print ('</form>');
print ('<form name="form1" id="form1" method="post" action="deny_talkbacks.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit3" value="Deny" />');
print ('</form>');
print ('<form name="form1" id="form1" method="post" action="admin_edit_talkbacks.php">');
print ('<input type="hidden" value='.$login.' name="login">');
print ('<input type="hidden" value='.$loginpass.' name="password">');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit3" value="Edit" />');
print ('</form>');
print ('</td>');

$number=$number+1;

if ($number>2){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>

</div>

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
