<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Add New Classified</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>

<script language="JavaScript" type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>

</head>

<body>
<div id="invis"> 
  <div id="header"> <span class="banner-top"> 
    <?php include('banner-top.php'); ?>
    </span> 
    <div id="menu"> 
      <?php include('menu.php'); ?>
    </div>
  </div>
  <div id="content"> 
    <div id="submenu"> 
      <?php include('submenu.php'); ?>
    </div>
    <?php include('checkpass.php');?><div class="body">
    <table border=0 cellpadding=4 cellspacing=0 style="margin-left:70px;">
      <tr> 
        <!--Body Text-->
        <td valign="top" width="660"> <div align="center"> Add New Classified 
          <FORM ENCTYPE="multipart/form-data" ACTION="insert_classified.php" METHOD=POST>
            <table width="469" border="0" cellspacing="2" cellpadding="0">
              <tr> 
                <td> 
                  <?php 							
$host="vpnews.db.4808198.hostedresource.com";
$user = "vpnews" ;
$pass = "Toshiba1" ;
$db = "vpnews" ;
$table = "classified_categories" ;

$show_all = "SELECT * FROM $table
ORDER BY category";

print ('<div align="right">Select Category: </div> </td><td><select name="classified_categories">');

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{
$d  = $row["id" ];
$category = $row["category"];


print ('<option value="'.$id.'">'.$category.'</option>');

}
print ('</select>');

?>
                </td>
              </tr>
              <tr> 
                <td><div align="right"> New Category: </div></td>
                <td><input name="new_category" type="text">
                  <BR></td>
              </tr>
              <tr> 
                <td><div align="right"> Poster: </div></td>
                <td><input name="poster" type="text">
                  <BR></td>
              </tr>
              <tr> 
                <td><div align="right">Headline: </div></td>
                <td><input name="headline" type="text">
                  <BR></td>
              </tr>
                   <tr> 
                <td><div align="right">Adtext: </div></td>
                <td><textarea name="adtext" cols="" rows=""></textarea>
                  <BR>
                  <BR></td>
              </tr>
              <tr> 
                <td><div align="right">Email: </div></td>
                <td><input name="email" type="text">
                  <BR></td>
              </tr>
                <tr> 
                <td><div align="right">Show Email: </div></td>
                <td><select name="show_email">
                <option value=""></option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
                </select>
                  <BR></td>
              </tr>
              <tr> 
                <td><div align="right">Phone: </div></td>
                <td><input name="phone" type="text">
                  <BR></td>
              </tr>
             <tr> 
                <td><div align="right">Address: </div></td>
                <td><input name="address" type="text">
                  <BR></td>
              </tr>
              <tr> 
                <td><div align="right">City: </div></td>
                <td><input name="city" type="text">
                  <BR></td>
              </tr>
             <tr> 
                <td><div align="right">State : </div></td>
                <td><select name="state">
                    <option value="">Select a State</option>
                    <option value="AL">Alabama</option>
                    <option value="AK">Alaska</option>
                    <option value="AZ">Arizona</option>
                    <option value="AR">Arkansas</option>
                    <option value="CA">California</option>
                    <option value="CO">Colorado</option>
                    <option value="CT">Connecticut</option>
                    <option value="DE">Delaware</option>
                    <option value="DC">District of Columbia</option>
                    <option value="FL">Florida</option>
                    <option value="GA">Georgia</option>
                    <option value="HI">Hawaii</option>
                    <option value="ID">Idaho</option>
                    <option value="IL">Illinois</option>
                    <option value="IN">Indiana</option>
                    <option value="IA">Iowa</option>
                    <option value="KS">Kansas</option>
                    <option value="KY">Kentucky</option>
                    <option value="LA">Louisiana</option>
                    <option value="ME">Maine</option>
                    <option value="MD">Maryland</option>
                    <option value="MA">Massachusetts</option>
                    <option value="MI">Michigan</option>
                    <option value="MN">Minnesota</option>
                    <option value="MS">Mississippi</option>
                    <option value="MO">Missouri</option>
                    <option value="MT">Montana</option>
                    <option value="NE">Nebraska</option>
                    <option value="NV">Nevada</option>
                    <option value="NH">New Hampshire</option>
                    <option value="NJ">New Jersey</option>
                    <option value="NM">New Mexico</option>
                    <option value="NY">New York</option>
                    <option value="NC">North Carolina</option>
                    <option value="ND">North Dakota</option>
                    <option value="OH">Ohio</option>
                    <option value="OK">Oklahoma</option>
                    <option value="OR">Oregon</option>
                    <option value="PA">Pennsylvania</option>
                    <option value="RI">Rhode Island</option>
                    <option value="SC">South Carolina</option>
                    <option value="SD">South Dakota</option>
                    <option value="TN">Tennessee</option>
                    <option value="TX">Texas</option>
                    <option value="UT">Utah</option>
                    <option value="VT">Vermont</option>
                    <option value="VA">Virginia</option>
                    <option value="WA">Washington</option>
                    <option value="WV">West Virginia</option>
                    <option value="WI">Wisconsin</option>
                    <option value="WY">Wyoming</option>
                  </select></td>
              </tr>
              <tr> 
                <td><div align="right">Zip: </div></td>
                <td><input name="zip" type="text">
                  <BR></td>
              </tr>
            </table>
            <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
            <input type="submit" name="Submit" value="Submit"></div>
            </form></div> 
      <td valign="top" align="right" width="120"> 
        <!--SIDE BANNER ADS-->
        <div class="banners-side"> 
          <?php include('banners-side.php'); ?>
        </div>
        <!--END-->
      </td>
      </tr>
      <tr> 
        <td width="660"> <div align="center"> 
            <form name="form1" method="post" action="admin_menu.php">
              <?php 
					  print ('<input type="hidden" name="login" value="'.$login.'">');
print ('<input type="hidden" name="password" value="'.$password.'">');
					  ?>
              <input type="submit" name="Submit2" value="Back to Admin Menu">
            </form>
          </div></td>
        <td width="120"> </td>
      </tr>
    </table>
  </div>
  <div class="footer"> 
    <?php include('footer.php'); ?>
  </div>
</div>
</div>
</body>
</html>
