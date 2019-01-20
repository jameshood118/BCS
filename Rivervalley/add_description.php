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
	  $selected_description=$_POST['selected_description'];
							
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
    
      <form name="form1" method="post" action="">
	    Copy From: <BR><select name="selected_description"><?php 
	   $host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;

$show_all = "SELECT * FROM $table";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$description = $row[ "Description" ]."";
$product_id = $row[ "Product_id" ]."";
$product_name = $row[ "Product_name" ]."";
$manufacturer = $row[ "Manufacturer" ]."";

$truncated = substr($description, 0, 30);

if ($old_description<>$description and $description<>'') {
print ('<option value="'.$description.'">'.$product_id.' - '.$product_name.' - '.$manufacturer.' - '.$truncated.'</option');
}

$old_description=$description;


}
	   ?></div></select><BR>&nbsp;
	      <input type="hidden" value="<?php echo $login?>" name="login">
        <input type="hidden" value="<?php echo $loginpass?>" name="password">
        <input type="submit" name="Submit" value="Copy Description">
	   </form><BR>
       
	   <form action="insert_description.php" method="post" name="Add Descriptions"><BR>
	   
	   	   Select Which Product ID to Edit: <BR><select name="Prod_edit"><?php 
	   $host = "10.6.166.54" ;
$user = "rivervalleysh" ;
$pass = "Valleyshoes1" ;
$db = "rivervalleysh" ;
$table = "products" ;

$show_all = "SELECT * FROM $table";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$product_id = $row[ "Product_id" ]."";
$product_name = $row[ "Product_name" ]."";
$manufacturer = $row[ "Manufacturer" ]."";


if ($old_product_id<>$product_id) {
print ('<option value="'.$product_id.'">'.$product_id.' - '.$product_name.' - '.$manufacturer.'</option');
}

$old_product_id=$product_id;

}
	   ?></select><BR>
	   
	 
	   New Description: <BR><textarea name="new_description" cols="50" rows="10"><?php echo $selected_description;?></textarea><BR><br>
	           <input type="hidden" value="<?php echo $login?>" name="login">
        <input type="hidden" value="<?php echo $loginpass?>" name="password">
	    <input type="submit" name="Submit4" value="Submit">
	   </form>
	   
	         <form name="form1" method="post" action="admin_menu.php">
        <input type="hidden" value="<?php echo $login?>" name="login">
        <input type="hidden" value="<?php echo $loginpass?>" name="password">
        <input type="submit" name="Submit" value="Abort Changes">
      </form>
	   
      </div>
    <!--end body-->
    <div class="push" style="height:150px;"></div>
  </div>
  <!--end content-->
</div>
<!--end invis-->

	


</body>
</html>
