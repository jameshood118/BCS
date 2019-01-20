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
	  <?php include('email_list.php'); ?>
      </div>
    </div>
    <!-- End Header -->
    <!-- START CONTENT -->
    <div id="content"> 
      <div id="titlebar">
        <p class="title">Rocket City Drywall - Family Owned and Operated Since 1985</p>
      </div>
      <div id="sidebar">
        <p class="sublink-title">Get a Pre-Estimate!</p>
        <!-- start Pre-Estimate FORM -->
        <FORM ENCTYPE="multipart/form-data" ACTION="sendmail.php" METHOD=POST>
          <table width="255" border="0" cellspacing="0" cellpadding="2">
            <tr> 
              <td width="60" style="padding-left:30px;">Name:</td>
              <td><input name="name" size="15" type="text" id="name"></td>
            </tr>
            <tr> 
              <td style="padding-left:30px;">Phone<br/>
                Number:</td>
              <td> <input name="phone" size="15" type="text" id="phone"></td>
            </tr>
            <tr> 
              <td style="padding-left:30px;">Email:</td>
              <td> <input name="email" size="15" type="text" id="email"> </td>
            </tr>
            <tr> 
              <td  style="padding-left:30px;" valign="bottom"> Subject: </td>
              <td align="left"> <select name="category">
                  <option></option>
                  <option>Drywall Inquiry</option>
                  <option>Roofing Inquiry</option>
                  <option>Other</option>
                </select> 
				</td>
            </tr>
            <tr> 
              <td style="padding-left:30px;padding-top:5px;"  valign="top">Message:</td>
              <td><textarea name="message" cols="7" rows="3" wrap="VIRTUAL"></textarea></td>
            </tr>
            <tr> 
			  <td></td>
              <td align="left" style="padding-top:10px;"> 
                <input class="submit" type="submit" name="Submit" value="Send Form"> 
              </td>
            </tr>
          </table>
        </form>
	  </div>
      <div id="body"> 
        <p class="subtitle">We Build Relationships, Not Just Customers.</p>
        <p class="text"> In an industry where the bottom line and massive distributorships 
          dominate the national landscape, there is a reason why so many contractors 
          in north Alabama and southern Tennessee are so loyal to locally owned 
          and operated Rocket City Drywall. Sure, our well below average pricing 
          is one reason, but discounting only gets you so far these days. Our 
          customers and contractors establish long term relationships with us 
          mainly because we see ourselves as part of their community. We believe 
          that providing excellent customer service is not just good business, 
          it's good manners as well.</p>
        <p class="text"> Rocket City Drywall offers some of the best drywall and shingles known to man, 
		and we do so at a price that wont break the bank. After all, most of our customers are locally owned and operated too -
		 and anything we can do to support our local ecconomy is a good thing. </p>
        <p class="text"> We look forward to serving you and your drywall needs today and for many years to come. </p>
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
