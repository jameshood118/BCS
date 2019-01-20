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
    <p class="title">Product Details</p>
  </div>

    <div class="body"> 
      <?php include('view_color.php'); ?>
    </div>
    <!--end body-->
  </div>
  <!--end content-->
  <div class="push"></div>
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
