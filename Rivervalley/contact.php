<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>River Valley Comfort Shoes</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
    <script type="text/javascript" src="swfobject.js"></script>

</head>

<body>
<div id="invis"> 
  <div id="header" style="z-index:25;"> 
    <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,29,0" width="960" height="350">
      <param name="movie" value="flash/header2.swf">
      <param name="quality" value="high">
      <param name="wmode" value="transparent" />
      <embed src="flash/header2.swf" quality="high" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" type="application/x-shockwave-flash" width="960" height="350"></embed> 
      <!--[if IE ]>

        <object type="application/x-shockwave-flash" data="flash/header2.swf" width="960" height="350">

		<param name="movie" value="flash/header2.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" />

				<embed src="flash/header2.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="960" height="350" name="menu"></embed>

        </object>

        <!--<![endif]-->
    </object>
  </div>
  <!--end header-->
  
    <div id="menu"> 
    <?php include('menu.php'); ?>
  </div>
  <!--end menu-->
    <div id="content"> 
  <div id="title-text"> 
    <p class="title">Contact Us</p>
    <p class="sublinks"> <a href="javascript:showonlyone('newboxes1');">Email 
      Contact Form</a> &bull; <a href="javascript:showonlyone('newboxes2');">Location</a> 
    </p>
  </div>

    <div class="body"> 
      <div  style="float:right;"> 
        <p class="text-contact">
		<table width="275" cellpadding="2" style="text-align:center;">
		  <tr>
		  <td align="center"  style="text-align:center;	color:#993399;">
		  <strong>Store Hours</strong>
		  <br/>
		  Mon-Wed: 10-7
		  <br/>
		  Thurs-Fri: 10-5
		  <br/>
		  Sat-Sun: 10-7
		  <br/>
		  </td>
		  <td  style="text-align:center; color:#993399;" align="center"><strong>Phone</strong>
		  <br/>
		  (256) 852-8822
		  <br/>
		  <strong>Fax</strong>
		  <br/>
		  (256) 852-8823
		  </td>
		  </tr>
		  <tr>
		  <td colspan="2" style="text-align:center; color:#993399;" align="center">
		  <strong>E-mail</strong>
		  <br/>
		  <a href="mailto:cwg@rivervalleycomfortshoes.com">cwg@rivervalleycomfortshoes.com</a>
		  </td>
		  </tr>
		  </table>
		  </p>
      </div>
      <div name="newboxes" id="newboxes1" style="display:block;"> 
        <p class="subtitle">Email Contact Form</p>
        <p class="text"> 
          <?php 
	$emptyfields=$_GET['emptyfields'];
	if ($emptyfields=="true") {
	print ('<font color=red>ALL FIELDS ARE REQUIRED. PLEASE TRY AGAIN.</font><br>');
	}
	?>
        <form class="admin" action="sendmail.php" method="post">
          <select name="department" id="select">
            <option value="Products" selected>Products</option>
            <option value="Comments">Comments</option>
            <option value="Questions">Questions</option>
            <option value="Other">Other</option>
          </select>
          <br/>
          Name: <br/>
          <input name="name" type="text" size="15" maxlength="15">
          <BR/>
          Phone: <br/>
          <input name="phone" type="text" size="15" maxlength="15">
          <BR/>
          Email: <br/>
          <input name="email" type="text" size="30" maxlength="30">
          <BR/>
          Comments:<BR/>
          <textarea name="comments" cols="45" rows="5"></textarea>
          <BR/>
          <br/>
          <INPUT TYPE="submit" NAME="send" VALUE="Submit">
          <BR/>
          <BR/>
          * Required Information 
        </form></p>
        </div>
      <div name="newboxes" id="newboxes2" style="display:none;"> 
        <p class="subtitle">Location</p>
        <p class="text"> 2246 Winchester Rd NE
		<br/>
		Number 312 <br/>
        Huntsville, AL 35811-6802</p>
        <div style="width:100%;padding-top:10px;" align="center"> <a href="http://maps.google.com/maps?oe=utf-8&client=firefox-a&ie=UTF8&q=river+valley+comfort+shoes+huntsville&fb=1&split=1&gl=us&ei=u_V5Sv-jF4rg9QSz9onFBQ&hl=en&cd=1&cid=6188923604547945229&li=lmd&ll=34.818983,-86.490512&spn=0.01027,0.019033&z=16&iwloc=A" target="_blank"> 
          <img src="images/googlemap.jpg" width="475" height="300" alt="Map View of Store" style="border:2px solid #000;" border="0"/> 
          </a><br/>
          <a href="http://maps.google.com/maps?oe=utf-8&client=firefox-a&ie=UTF8&q=river+valley+comfort+shoes+huntsville&fb=1&split=1&gl=us&ei=u_V5Sv-jF4rg9QSz9onFBQ&hl=en&cd=1&cid=6188923604547945229&li=lmd&ll=34.818983,-86.490512&spn=0.01027,0.019033&z=16&iwloc=A" target="_blank"> 
          <font style="font-size:75%;">View Larger Map</font></a> </div>
      </div>
    </div>
    <!--end body-->
    <div class="push"></div>
  </div>
  <!--end content-->
</div>
<!--end invis-->

    <div class="footer"> 
  <div class="just-in2"></div>
    <p class="footer-text">
  <?php include('footer.php'); ?>
  </p>
	</div> 
	


</body>
</html>
