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
      <div class="core">
	            <p class="text" style="padding-top:10px;"> 
              <!-- CONTACT FORM -->
			  
			              <?php 
	$emptyfields=$_GET['emptyfields'];
	if ($emptyfields=="true") {
	print ('<font color=red>ALL FIELDS ARE REQUIRED. PLEASE TRY AGAIN.</font><br>');
	}
	?>
            <form action="sendmail.php" method="post">
              <p class="form-submit" style="padding-bottom:5px;"> 
                <select name="department" id="select">
                  <option value="" selected>Select a Query</option>
				   <option value="Fighter Information">Fighter Information</option>
				    <option value="Girl Information">Girl Information</option>
					<option value="Event Information">Event Information</option>
					<option value="General Information">General Information</option>
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
              <p class="form-submit"> <font style="color:#000;font-style:italic;">All 
                fields are required.</font> </p>
              <div class="form-submit"> 
                <p class="submit"> 
                  <input type="submit" name="send" value="Submit">
              </div>
            </form>
            <!-- end form --></p>
      <!--end core--></div>
      <!--end div2--></div>
<!--end content--></div>
       
    <div id="div1">
	<p class="title-sidebar1">Contact Info</p>
	<p class="text3">
	<strong>Scott</strong> 256-656-9485<br/>
	<strong>Lee</strong> 256-759-1053<br/>
	<strong>Julian</strong> 256-759-2233<br/>
	</span>
    <!--end div1--></div>

  <div id="div3"> 
    <div class="core">
	<p class="title3" style="padding-bottom:10px;">Contact Info
	<br/><br/>
	</p>
    <!--end core--></div>
    <!--end div3--></div>
    
  	<div class="footer"> 
	<?php include('footer.php'); ?>
 	<!--end footer--></div>

<!--end invis--></div>


</body>
</html>
