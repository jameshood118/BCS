<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Valley Planet - Contact Us</title>
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

<style type="text/css">
<!--
.featurelinks {
	font-weight: bold;
	color: #ffc600;
	font-style: normal;
	text-decoration: none;
}
-->
</style>
<style type="text/css">
<!--
.category_titles {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 115%;
	font-weight: bold;
	color: #000;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.listing_names {
	font-weight: bold;
	color: #FFFFFF;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.listing_urls {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 90%;
	font-weight: bold;
	color: #669900;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}

.normal {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12;
	font-weight: normal;
	color: #FFFFFF;
	font-style: normal;
	text-decoration: none;
	decoration: none;
}
-->
</style>
<script type="text/javascript" src="TypingText.js">
/****************************************************
* Typing Text script- By Twey @ Dynamic Drive Forums
* Visit Dynamic Drive for this script and more: http://www.dynamicdrive.com
* This notice MUST stay intact for legal use
****************************************************/
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
    <div class="body"> 
      <table style="margin-left:70px;" border=0 cellpadding=4 cellspacing=0>
        <tr> 
          <!--Body Text-->
          <td valign="top" width="300" style="padding-right:10px;"> <p class="title">Contact 
              Us</p>
            <p class="text"> 
              <!-- CONTACT FORM -->
              <?php 
	$emptyfields=$_GET['emptyfields'];
	if ($emptyfields=="true") {
	print ('<font color=red>ALL FIELDS ARE REQUIRED. PLEASE TRY AGAIN.</font><br>');
	}?>
            <form action="sendmail.php" method="post">
              <p class="form-submit" style="padding-bottom:5px;"> 
                <select name="department" id="select">
                  <option value="Information" selected>General Information</option>
                  <option value="The Deep End">The Deep End</option>
                  <option value="Opinions">Opinions</option>
                  <option value="Freelance">Freelance</option>
                  <option value="Ad Sales">Ad Sales</option>
                  <option value="Listings">Listings</option>
                  <option value="Calendar">Calendar</option>
                  <option value="Classifieds">Classifieds</option>
                  <option value="Web Questions">Web Questions</option>
                </select>
              </p>
              <p class="form"> 
                <label for="name">Name:</label>
                <input name="name" type="text" size="30" maxlength="50">
              </p>
              <p class="form"> 
                <label for="phone">Phone:</label>
                <input name="phone" type="text" size="30" maxlength="50">
              </p>
              <p class="form"> 
                <label for="email">Email:</label>
                <input name="email" type="text" size="30" maxlength="50">
              </p>
              <p class="form"> 
                <label for="comments">Comments:</label>
                <textarea name="comments" cols="45" rows="5"></textarea>
              </p>
              <p class="form-submit"> <font style="color:#996699;font-style:italic;">All 
                fields are required.</font> </p>
              <div class="form-submit"> 
                <p class="submit"> 
                  <input type="submit" name="send" value="Submit">
              </div>
            </form>
            <!-- end form --></p>
            <?php include('address_include.php'); ?> <?php include('contacts_include.php'); ?> </td>
          <td valign="top" width="300" style="padding-right:30px;"> <p class="title">&nbsp;</p>
            <p style="padding-top:40px;padding-bottom:10px;"> Freelance writers 
              and artists are encouraged to write to us using the contact form 
              above or by emailing us at <a href="mailto:freelance@valleyplanet.com">freelance@valleyplanet.com</a>. 
            </p>
            <p> The Valley Planet is distributed FREE at locations in Huntsville, 
              Madison, Scottsboro, Athens, Decatur, Hampton Cove and Guntersville. 
              If you'd like to have the Valley Planet available to your customers, 
              give us a call at (256) 533-4613 or email us using the contact form 
              above for "General Information", or at <a href="mailto:info@valleyplanet.com">info@valleyplanet.com</a>. 
            </p>
            <p class="text" style="text-align:center;padding-top:45px;">  
              <iframe width="300" height="300" frameborder="2" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;oe=UTF8&amp;msa=0&amp;msid=107495142119788572372.00045609d6f4c8f3af7fa&amp;ll=34.728477,-86.515582&amp;spn=0.847836,0.968976&amp;output=embed"></iframe>
              <br />
               <br/>
              <small>View <a href="http://maps.google.com/maps/ms?ie=UTF8&amp;hl=en&amp;oe=UTF8&amp;msa=0&amp;msid=107495142119788572372.00045609d6f4c8f3af7fa&amp;ll=34.728477,-86.515582&amp;spn=0.847836,0.968976&amp;source=embed" target="_blank" style="color:#0000FF;text-align:left">Valley 
              Planet Distribution</a> in a larger map</small> <br/>
            </p></td>
          <td valign="top" width="120"> 
            <!--SIDE BANNER ADS-->
            <div class="banners-side"> 
              <?php include('banners-side.php'); ?>
            </div>
            <!--END-->
          </td>
        </tr>
      </table></p>
      </div>
    <div class="footer"> 
      <?php include('footer.php'); ?>
    </div>
  </div>
</div>
</body>
</html>