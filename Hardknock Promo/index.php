<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Hard Knock Promotions</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
<script src="swfobject.js" type="text/javascript"></script>

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
  <div id="header"> 
    <div id="admin"> 
      <?php include('admin.php'); ?>
    </div>
  </div>
  
    
<div id="content">
    <div id="menu"> 
      <?php include('menu.php'); ?>
    </div>
    
    <div id="div2" style="background:#000;border:0px;"> 
	
    <div id="media">
		<div>
	<object width="500" height="405"><param name="movie" value="http://www.youtube-nocookie.com/v/sl7cheQmCrw&hl=en&fs=1&color1=0x3a3a3a&color2=0x999999&border=1"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube-nocookie.com/v/sl7cheQmCrw&hl=en&fs=1&color1=0x3a3a3a&color2=0x999999&border=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="500" height="405"></embed></object>
		</div>
		<p style="height:20px;">&nbsp;</p>
	<!--Dynamic Divs-->
        <div style="background:#666;border:1px solid #ccc;width:500px;padding-bottom:20px;">
		<div name="newboxes" id="newboxes1" style="display:block;">
        <img src="images/header1.jpg" alt="Tickets Now on Sale!" border="0" width="500"/>
        <!--end newboxes1--></div>
        
        <div name="newboxes" id="newboxes2" style="display:none;">
        <div class="core">
        <p class="text">Text here</p>
        <!--end core--></div>
        <!--end newboxes1--></div>
    <!--end media--></div>

	  <p class="media-links">
      <a href="javascript:showonlyone('newboxes1');">1</a>
      <a href="javascript:showonlyone('newboxes2');">2</a>
      </p>
	  <!--end dynamic divs--></div>
	  
      <!--end div2--></div>
<!--end content--></div>
       
    <div id="div1">
	 <?php include('sidebar1.php'); ?>
      <!--end div1--></div>

  <div id="div3"> 
    <div class="core">
	 <?php include('sidebar2.php'); ?>
    <!--end core--></div>
    <!--end div3--></div>
    
  	<div class="footer">
  	  <?php include('footer.php'); ?>
  	  <!--end footer-->
  	</div>

<!--end invis--></div>


</body>
</html>
