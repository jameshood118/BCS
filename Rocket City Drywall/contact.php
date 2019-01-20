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
      <div id="header-img"> <img src="images/collage6.jpg"/> </div>
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
        <p class="title">Contact Us</p>
      </div>
      <div id="sidebar"> 
        <p class="sublink-title">Contact Us</p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes1');" target="_self">E-mail 
          Contact Form</a></p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes2');" target="_self">Areas 
          of Operation</a></p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes3');" target="_self">Albertville 
          Location</a></p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes4');" target="_self">Huntsville 
          Location</a></p>
      </div>
      <div id="body"> 
        <!-- contact form -->
        <div name="newboxes" id="newboxes1" style="display:block;"> 
          <p class="subtitle">E-mail Contact Form</p>
          <p class="text"> 
          <form action="sendmail.php" method="post">
            <table>
              <tr> 
                <td width="100">Name:</td>
                <td><input name="name" type="text" size="30"></td>
              </tr>
              <tr> 
                <td>Phone:</td>
                <td><input name="phone" type="text" size="30"></td>
              </tr>
              <tr> 
                <td>Email:</td>
                <td><input name="email" type="text" size="30"></td>
              </tr>
              <tr> 
                <td>Comments:</td>
                <td><textarea name="comments" cols="25" rows="3"></textarea></td>
              </tr>
              <tr> 
                <td colspan="2"></td>
              </tr>
              <tr> 
                <td align="center" colspan="2" style="padding-top:10px;"><INPUT class="submit" TYPE="submit" NAME="send" VALUE="Submit"></td>
              </tr>
              <tr> 
                <td colspan="2" align="center"> </td>
              </tr>
            </table>
          </form></p>
          </div>
        <!--end form-->
        <!-- areas of operation -->
        <div name="newboxes" id="newboxes2" style="display:none;"> 
          <p class="subtitle">Areas of Operation</p>
          <p class="text"> Rocket City Drywall services the following areas: <br/>
            <br/>
            <strong>Tennessee<br/>
            <br/>
            Alabama<br/>
            </strong> <span style="font-style:italic;">Huntsville, Madison County, 
            Limestone County, Marshall County<br/>
            (as far east as) Florence<br/>
            (as far west as) Scottsboro, Albertville, Grant<br/>
            </span> </p>
        </div>
        <!--end operation-->
        <!--locations-->
        <div name="newboxes" id="newboxes3" style="display:none;"> 
          <p class="subtitle">Albertville Location</p>
          <table style="width:100%;">
            <tr> 
              <td style="width:50%;" valign="top"> <p class="text"> 6585 US Highway 
                  431<br/>
                  Albertville, Alabama 35950<br/>
                  <strong>Office:</strong> (256) 894-3300 <br/>
                  <strong>Fax:</strong> (256) 894-3399</p></p>
                <p class="text"><strong>Hours of Operation</strong> 
				<br/>
                Mon through Fri: 7am to 4pm
				<br/>
				<span style="font-style:italic;">closed on Sat &amp; Sun</span>
				</p></td>
              <td style="width:50%;" valign="top"> <iframe width="300" height="300" style="border:2px solid #333;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;client=firefox-a&amp;ie=UTF8&amp;q=rocket+city+drywall+%26+supply+albertville+al&amp;fb=1&amp;split=1&amp;gl=us&amp;cid=3402705450442793088&amp;li=lmd&amp;ll=34.275358,-86.197701&amp;spn=0.005319,0.006437&amp;z=16&amp;iwloc=A&amp;output=embed"></iframe> 
                <br /> <small><a href="http://maps.google.com/maps?hl=en&amp;client=firefox-a&amp;ie=UTF8&amp;q=rocket+city+drywall+%26+supply+albertville+al&amp;fb=1&amp;split=1&amp;gl=us&amp;cid=3402705450442793088&amp;li=lmd&amp;ll=34.275358,-86.197701&amp;spn=0.005319,0.006437&amp;z=16&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View 
                Larger Map</a></small> </td>
            </tr>
          </table>
        </div>
        <div name="newboxes" id="newboxes4" style="display:none;"> 
          <p class="subtitle">Huntsville Location</p>
          <table style="width:100%;">
            <tr> 
              <td style="width:50%;" valign="top"> <p class="text"> 2117 Holmes 
                  Avenue NW<br/>
                  Huntsville, Alabama 35816<br/>
                  <strong>Office:</strong> (256) 536-8150 <br/>
                  <strong>Fax:</strong> (256) 382-0408</p></p>
                <p class="text"><strong>Hours of Operation</strong> <br/>
                Mon through Fri: 7am to 4pm
				<br/>
				<span style="font-style:italic;">
				Sat: closed (or by appointment only)
				<br/>
				Sun: closed</span>
				</p></td>
              <td style="width:50%;" valign="top"> <iframe width="300" height="300" style="border:2px solid #333;" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=2117+holmes+avenue+nw,+huntsville,+al+35816&amp;sll=37.0625,-95.677068&amp;sspn=42.581364,79.013672&amp;ie=UTF8&amp;ll=34.740343,-86.593294&amp;spn=0.021159,0.025749&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe> 
                <br /> <small><a href="http://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=2117+holmes+avenue+nw,+huntsville,+al+35816&amp;sll=37.0625,-95.677068&amp;sspn=42.581364,79.013672&amp;ie=UTF8&amp;ll=34.740343,-86.593294&amp;spn=0.021159,0.025749&amp;z=14&amp;iwloc=A" style="color:#0000FF;text-align:left">View 
                Larger Map</a></small> </td>
            </tr>
          </table>
        </div>
        <!--  end locations-->
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
