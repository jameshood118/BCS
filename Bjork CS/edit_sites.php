<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Edit Product Entry</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

    <script type="text/javascript" src="swfobject.js"></script>
</head>

<body onLoad="MM_preloadImages('images/menu/home-hover.png','images/menu/about-hover.png','images/menu/services-hover.png','images/menu/portfolio-hover.png','images/menu/contact-hover.png')">
<div id="invis"> 
  <div id="logo"><img src="images/logo.png" width="324" height="356" alt="BCS Logo 2009" border="0"/></div>
  <div id="header"> 
    <div class="admin"> 
      <?php include("admin.php"); ?>
    </div>
    <?php include("menu.php"); ?>
  </div>
  <div id="content" style="background:transparent url('images/content-bg-index.jpg') no-repeat top center;"> 
    <div class="wrapper"> 
      <div id="submenu"> &nbsp; </div>
      <div class="body-index"> 
        <div style="padding-left:188px;	width:390px;height:75px;"> </div>
        <p class="text"> 
          <?php include ("creds.php"); ?>
		     <?php 
$Idnum=$_POST['Idnum'];
$name=$_POST['name'];
$address=$_POST['address'];
$category=$_POST['category'];
 ?>
 
 
 
 <table width="650" border="0" cellspacing="0" cellpadding="10">
                        <tr> 
                          <td><div align="center" class="title">Edit Product Control 
                              Panel </div></td>
                        </tr>
                        <tr> 
                          <td><div align="center"> 
                              <form name="form1" id="form1" method="post" action="add_sites.php">
                                <input type="hidden" value=<?php echo $login?> name="login">
                                <input type="hidden" value=<?php echo $loginpass?> name="loginpass">
                                <input type="submit" name="Submit" value="Add New Site" />
                              </form>
                            </div></td>
                        </tr>
                        <tr> 
                          <td><div align="center"> 
                              <form name="form1" id="form1" method="post" action="admin_menu.php">
                                <input type="hidden" value=<?php echo $login?> name="login">
                                <input type="hidden" value=<?php echo $loginpass?> name="loginpass">
                                <input type="submit" name="Submit" value="Back to Admin Menu" />
                              </form>
                            </div></td>
                        </tr>
                        <tr> 
                          <td> <div align="center"> </div>
                            <div align="center"> 
                              <form name="form2" id="form2" method="" action="index.php">
                                <input type="submit" name="Submit2" value="Logout" />
                              </form>
                            </div></td>
                        </tr>
                      </table>
  <?php 

$host = "10.6.171.192" ;
$user = "bjorkcs" ;
$pass = "Kotorsw1" ;
$db = "bjorkcs" ;
$table = "samples" ;



$show_all = "SELECT * FROM $table 
WHERE Idnum = '$Idnum'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$category = $row[ "Category" ]."";
$address = $row[ "Address" ]."";

if ($price==""){
$price="Call or Email For Price.";
}

}

print ('<img src="images/samples/'.$Idnum.'.jpg"><br>');


print ('<br>');
print ('<span class=title>'.$name.' '.$address.'</span><BR> ');

print ('<table width=600>');
print ('<td width=600 align=left>');
print ($category);
print ('</td>');
print ('</table>');
print ('<br>');

?>
 <FORM ENCTYPE="multipart/form-data" ACTION="alter_sites.php" METHOD=POST>
    <table width="935" border="0" cellspacing="0" cellpadding="5">
      <tr> 
        <td width="230"> <div align="right">Change Name:</div></td>
        <td width="230"> <input name="Idnum" type="hidden" id="Idnum" value="<?php echo $Idnum?>"> 
          <input name="name" type="text" id="name" value="<?php echo $name?>"></td>
        <td width="230">&nbsp;</td>
        <td width="230">&nbsp;</td>
      </tr>
      <tr> 
        <td> <div align="right">Change Address:</div></td>
        <td> <input name="address" type="text" id="address" value="<?php echo $address?>"></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td> <div align="right">Change Category:</div></td>
        <td> <input name="category" type="text" id="category" value="<?php echo $category?>"></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr> 
        <td> <div align="right">Replace Picture:</div></td>
        <td colspan="2"> <input type="file" name="file"> 
          <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          <div align="right"></div></td>
        <td> <div align="right"> 
            <input type="submit" name="Submit" value="Submit Changes">
          </div></td>
      </tr>
    </table>
  </form>
  <p> </p>
  <table width="935" border="0" cellspacing="0" cellpadding="5">
    <tr> 
      <td width="465"><div align="center"> 
          <form name="form1" method="post" action="delete_sites.php">
            <input type="submit" name="Submit3" value="Delete Product (Caution! One Touch Delete!)">
			<input type="hidden" value="<?php echo $Idnum?>" name="Idnum">
			<?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
          </form>
        </div></td>
      <td width="465"><div align="center"> 
          <form name="form2" method="post" action="admin_sites.php">
		  
		  <?php 
		  print ('<input type="hidden" value="'.$login.'" name="login">');
print ('<input type="hidden" value="'.$loginpass.'" name="password">');
		  ?>
            <input type="submit" name="Submit2" value="Abort Changes - Back to Products Admin">
          </form>
        </div></td>
    </tr>
  </table>

 
        <p style="padding-bottom:20px;"></p></p>
        </div>
      <div class="push"></div>
    </div>
    <div class="footer"> 
      <?php include("footer.php"); ?>
    </div>
  </div>
</div>

</body>
</html>
