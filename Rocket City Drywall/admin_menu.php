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
      <div id="header-img"> <img src="images/collage1.jpg"/> </div>
      <!--menu-->
      <div id="menu"> 
        <?php include('menu.php'); ?>
      </div>
      <!--end menu-->
      <div id="feature">
	  <p class="feature-title">Admin Page</p> 
		<?php include('account_info.php'); ?>
      </div>
    </div>
    <!-- End Header -->
    <!-- START CONTENT -->
    <div id="content"> 
      <div id="body-admin"> 
        <p class="text-admin">
		
					<form name="form1" method="post" action="admin_talkbacks.php">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit" value="Admin Talkbacks">
                  </form>
				  
				  				<form name="form2" method="post" action="admin_mailing.php">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit" value="Admin Mailing List">
                  </form>

							<form name="form3" method="post" action="admin_products.php">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit" value="Admin Products">
                  </form>
				  		<form name="form4" method="post" action="admin_staff.php">
                    <input type="hidden" value="<?php echo $login?>" name="login">
                    <input type="hidden" value="<?php echo $loginpass?>" name="password">
                    <input type="submit" name="Submit" value="Admin Staff">
                  </form>
				                       <form name="form5" method="post" action="admin.php">
                    <input type="submit" name="Submit4" value="Logout">
                  </form>
				  </p>
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
    </div>
    <!-- END footer -->
  </div>
<!-- END WRAPPERfooter -->

</div> 
<!-- END WRAPPER -->

</body>
</html>
