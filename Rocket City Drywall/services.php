<html>
<head>
<title>Rocket City Drywall | Huntsville, Alabama</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>

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

<div id="wrapper">
  <div id="container"> 
    <!-- Header -->
    <div id="header"> 
      <div id="header-img"> <img src="images/collage4.jpg"/> </div>
      <!--menu-->
      <div id="menu"> 
        <?php include('menu.php'); ?>
      </div>
      <!--end menu-->
      <div id="feature">
	  <?php include('email_list.php'); ?>
      </div>
    </div>
    <!-- End Header -->
    <!-- START CONTENT -->
    <div id="content"> 
      <div id="titlebar"> 
        <p class="title">Our Services</p>
      </div>
      <div id="sidebar"> 
        <p class="sublink-title">Our Services</p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes1');" target="_self">Commercial</a></p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes2');" target="_self">Residential</a></p>
      </div>
      <div id="body"> 
        <!-- commercial -->
        <div name="newboxes" id="newboxes1" style="display:block;"> 
          <p class="subtitle">Commercial</p>
          <p class="text">
		  At Rocket City Drywall, we believe in working hard to build something together. We have an excessive dedication to our customers and to the quality of our products. We offer only services and products of the highest caliber; nothing less will do. We also have the most competitive prices in North Alabama on shingles, along with very competitive prices on drywall -- even though we use higher quality materials than most!
		  </p><p class="text">Two examples of products that meet our high standards: we supply <a href="http://www.dietrichindustries.com/ultrasteel/menu.asp" target="_blank">Dietrich Ultrasteel</a>  Steel Framing Surfaces and <a href="http://www.certainteed.com" target="_blank">Certainteed</a> Ceiling Tiles and Grids.</p>
		  <p class="text">
		  <strong>For our Commercial customers, we offer the following</strong>:
		  <br/><br/>
		  &bull; Free onsite estimates!  
		  <br/><br/>
		  &bull; Credit lines (not available for all commercial accounts).  <span style="font-style:italic;">Credit application approval required.</span>
		  <br/><br/>
		  &bull; Same-day finish ups when called in by 10 am.  
		  <br/><br/>
		  &bull; Business Referrals.
		  <br/><br/>
		  &bull; We also offer in-home stocking of drywall (as opposed to dropping it off curbside, like most of our competitors). 
		  </p>
		  <p class="text">
		   ** Anything out of stock can be delivered in 10 business days for commercial jobs, so you can be secure in knowing your supplies will arrive in plenty of time! **
		  </p>
		  <p class="text"><a href="contact.php" target="_self">Contact us</a> for more information, or for a <strong>free estimate</strong>!</p>
        </div>
        <!--end com-->
        <!-- residential-->
        <div name="newboxes" id="newboxes2" style="display:none;"> 
          <p class="subtitle">Residential</p>
          <p class="text">
		  Our driving motivation when working with our customers is, "How can we help you?" Here at Rocket City Drywall, we believe in building honest and trusting relationships with our customers and showing them that we are in this business to serve. For us, no job is too big or too small!</p>
		  <p class="text">Our prices match our motivation to help our customers, having the most competitive prices in North Alabama on shingles, along with very competitive prices on drywall -- even though we use higher quality materials than most! Two examples of products that meet our high standards: we supply <a href="http://www.dietrichindustries.com/ultrasteel/menu.asp" target="_blank">Dietrich Ultrasteel</a>  Steel Framing Surfaces and <a href="http://www.certainteed.com" target="_blank">Certainteed</a> Ceiling Tiles and Grids.</p>
		  <p class="text">
		  <strong>Services we offer to Residential customers include:</strong>
		  <br/><br/>
		  &bull; Free onsite estimates
		  <br/><br/>
		  &bull; Specialized guidance on material needs and options
		  <br/><br/>
		  &bull; In-home stocking of drywall (as opposed to dropping it off curbside, like most of our competitors)
		  <br/><br/>
		  &bull; Same-day finishup when you call in by 10am!
		  </p>
		  <p class="text">We won't try to sell you material you don't need, and we always give our best price up front, which puts us leagues ahead of our competitors. <a href="contact.php" target="_self">Contact us</a> for more information, or for a <strong>free estimate</strong>, and let us prove to you why we are the best option for your needs!</p>

        </div>
        <!--end res -->
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
      <div class="admin"> 
        <?php include('admin.php'); ?>
      </div>
    </div>
    <!-- END footer -->
  </div>
<!-- END WRAPPERfooter -->

</div> 
<!-- END WRAPPER -->

</body>
</html>
