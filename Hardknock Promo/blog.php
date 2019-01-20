<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Hard Knock Promotions</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
<script src="swfobject.js" type="text/javascript"></script>
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
      <div class="core" style="text-align:left;">
		<?php include('blog_data.php'); ?>
	  <!--end core--></div> 
      <!--end div2--></div>
<!--end content--></div>
       
    <div id="div1" style="background:url('images/sidebar1a.jpg') no-repeat top left;padding-top:10px;">
	<div class="core">
	<p class="blog-subtitle">Create a SmackBlog!</p>
	<p style="height:5px">&nbsp;</p>
	<p class="text3">
	<div class="form2" style="font-size:85%;">
<form action="insert_blog.php" method="post" name="blog" enctype="multipart/form-data">
<label for="author" style="color:#ccc;">Author:</label> <input name="author" type="text"><br/>
<label for="password" style="color:#ccc;">Password:</label> <input name="post_pass" type="text"><br/>
<label for="email" style="color:#ccc;">Email:</label> <input name="email" type="text"><br/>
<label for="title" style="color:#ccc;">Title:</label> <input name="title" type="text"><br/>
<label for="message" style="color:#ccc;">Message:</label><br/><textarea name="message" cols="10" rows="10"></textarea><br/>
<label for="image" style="width:125px;color:#ccc;padding-top:5px;padding-bottom:5px;">Upload Image:</label><br/>
<input name="file" type="file" size="12">
<br/><br/>
<div class="submit"><input name="Submit" type="submit" value="Post"></div>
</form>
	</div>
	</p>
	<!--end core--></div>	 
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
