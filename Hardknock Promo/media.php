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
    
    <div id="div2"> 
    <p class="title">
    <span style="float:right;font-size:75%;padding-top:2px;padding-right:10px;">
    <a href="javascript:showonlyone('newboxes1');">Videos</a> 
    &bull; 
    <a href="javascript:showonlyone('newboxes2');">Images</a>
    </span>
    Media
    </p>
    
    <div class="core">
    	
    <div name="newboxes" id="newboxes1" style="display:block;">
    <p class="subtitle" style="color:#ccc;">Videos</p>
    <p class="text" style="color:#ccc;">
	Content Here
	</p>
    </div>

    <div name="newboxes" id="newboxes2" style="display:none;">
    <p class="subtitle" style="color:#ccc;">Images</p>
    <p class="text" style="color:#ccc;">
	Content Here
	</p>
    </div>
    
      <!--end core--></div>
      <!--end div2--></div>
<!--end content--></div>
       
    <div id="div1">
    <!--end div1--></div>

  <div id="div3"> 
    <div class="core">
	<p class="title3">Title</p>
	<p class="text3">
	</p>
    <!--end core--></div>
    <!--end div3--></div>
    
  	<div class="footer"> 
	<?php include('footer.php'); ?>
 	<!--end footer--></div>

<!--end invis--></div>


</body>
</html>
