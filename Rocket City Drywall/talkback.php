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
      <div id="header-img"> <img src="images/collage5.jpg"/> </div>
      <!--menu-->
      <div id="menu"> 
        <?php include('menu.php'); ?>
      </div>
      <!--end menu-->
      <div id="feature"> 
        <?php include('email_list.php'); ?>
      </div>
    </div>
    <!-- End Header -->
    <!-- START CONTENT -->
    <div id="content"> 
      <div id="titlebar"> 
        <p class="title">Customer Talkback</p>
      </div>
      <div id="sidebar"> 
        <p class="sublink-title">Add a Talkback!</p>
        <!-- start TALKBACK FORM -->
        <FORM ENCTYPE="multipart/form-data" ACTION="insert_talkbacks.php" METHOD=POST>
          <table width="255" border="0" cellspacing="0" cellpadding="2">
            <tr> 
              <td width="60" style="padding-left:30px;">Name:</td>
              <td><input name="name" size="15" type="text" id="name"></td>
            </tr>
            <tr> 
              <td style="padding-left:30px;">Company<br/>
                Name:</td>
              <td> <input name="company_name" size="15" type="text" id="company_name"></td>
            </tr>
            <tr> 
              <td style="padding-left:30px;">Web Link:</td>
              <td> <input name="weblink" size="15" type="text" id="weblink"></td>
            </tr>
            <tr> 
              <td style="padding-left:30px;">Phone<br/>
                Number:</td>
              <td> <input name="phone" size="15" type="text" id="phone"></td>
            </tr>
            <tr> 
              <td style="padding-left:30px;">Email:</td>
              <td> <input name="email" size="15" type="text" id="email"> </td>
            </tr>
            <tr> 
              <td style="padding-left:30px;">Message<br/>
                Title: </td>
              <td><input name="Idnum" type="hidden" id="Idnum"> <input name="title" type="text" size="15" id="title"></td>
            <tr> 
              <td style="padding-left:30px;">Posting<br/>
                Password:</td>
              <td> <input name="post_pass" size="15" type="text" id="post_pass"></td>
            </tr>
            <tr> 
              <td style="padding-left:30px;padding-top:5px;"  valign="top">Message:</td>
              <td><textarea name="message" cols="7" rows="3" wrap="VIRTUAL"></textarea></td>
            </tr>
            <tr> 
              <td  style="padding-left:30px;" valign="bottom"> Category: </td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td style="padding-left:30px;" colspan=2 align="left"> <select name="category">
                  <option></option>
                  <option>Contractor Advertisement</option>
                  <option>Labor Available</option>
                  <option>Hiring Labor</option>
                  <option>Customer Comments/Reviews</option>
                  <option>Service Needed</option>
                </select> </td>
            </tr>
            <tr> 
              <td style="padding-left:30px;">Upload Picture:</td>
              <td>&nbsp;</td>
            </tr>
            <tr> 
              <td colspan="2" align="left" style="padding-left:30px;"><input class="submit" size="15" type="file" name="file"></td>
            </tr>
            <tr> 
              <td colspan=2 align="left" style="padding-top:10px;padding-left:30px;"> 
                <input class="submit" type="submit" name="Submit" value="Submit Talkback"> 
              </td>
            </tr>
          </table>
        </form>
        <!-- end form-->
      </div>
      <div id="body" style="min-height:400px;"> 
        <div class="text-talkbacks"> 
          <?php 
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "talkbacks" ;

$show_all = "SELECT * FROM $table WHERE Status='approved'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

$error=$_GET['error'];
if ($error=="true") {
print ('<span style="background:#ccc;color:red;padding:2px;">INCORRECT PASSWORD FOR THAT POST!</span><br/><br/>');
}


print ('<table width=550><TR>');

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





print ('<td colspan="2" class="staff-header" valign="center" align="left"><strong>'.$title.'</strong></td></tr><tr><td width="130" valign="top" align="left">');
print ('<a href="'.$weblink.'" target="_blank"><img src="images/talkback/'.$Idnum.'.jpg" border="0" width="125"></a><br/>');
print ('<font size="2">Password: <form name="form3" method="post" action="edit_talkbacks.php">');
print ('<input type="password" name="post_pass" size="15"><BR>');
print ('<input type="hidden" value='.$Idnum.' name="Idnum">');
print ('<input type="submit" name="Submit2" value="Edit" />');
print ('</form></td></font>');
print ('</td><td valign="top" align="left"><strong>Company Name: </strong>'.$company_name.'<BR>');
print ('<strong>Phone Number: </strong>'.$phone.'<BR>');
print ('<strong>Email: </strong><a href="mailto:'.$email.'">'.$email.'</a><BR>');
print ('<strong>Category: </strong>'.$category.'<BR>');
print ('<strong>Message:</strong><BR>'.$message.'<BR><BR></td>');
$number=$number+1;

if ($number>0){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>
        </div>
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
      <div class="admin"> 
        <?php include('admin.php'); ?>
      </div>
    </div>
    <!-- END footer -->
  </div>
<!-- END WRAPPERfooter -->

</div> 
<!-- END WRAPPER -->

</body>
</html>
