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
      <div id="header-img"> <img src="images/collage2.jpg"/> </div>
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
        <p class="title">About Us</p>
      </div>
      <div id="sidebar"> 
        <p class="sublink-title">About Us</p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes1');" target="_self">Company 
          History</a></p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes2');" target="_self">Philosophy 
          / Values</a></p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes3');" target="_self">Our 
          Staff</a></p>
        <p class="sublink"><a href="javascript:showonlyone('newboxes4');" target="_self">Policies</a></p>
      </div>
      <div id="body"> 
        <!-- company history -->
        <div name="newboxes" id="newboxes1" style="display:block;"> 
          <p class="subtitle">Company History</p>
          <p class="text">Rocket City Drywall was established in 1985 by Charles 
            and Jewell Stanley.</p>
          <p class="text">Like many local building suppliers, Charles Stanley 
            began his career in the building industry at Moore Handley in 1961. 
            Straying from the footsteps of his older brothers and sisters, Charlie 
            decided against working for the family farm in Albertville, AL and 
            took a job straight out of high school sweeping floors for Moore-Handley. 
            Over the next 25 years Charlie climbed the company ladder and eventually 
            managed his own store in Tennessee. </p>
          <p class="text">Over the years, larger corporate building material suppliers 
            began to monopolize the market, draining business from smaller companies 
            such as Moore-Handley (now operating under Home Crafters). Charlie 
            recognized the market for a specialized supplier, however, and his 
            experience particularly with drywall materials led him to open Rocket 
            City Drywall &amp; Supply in 1985. </p>
          <p class="text">Charlie and his wife Jewell rented their first 5000 
            sq ft warehouse on Church Street in Huntsville near the downtown train 
            depot. Charlie made his first delivery on their only truck with drywall 
            he borrowed from Home Crafters. Charlie and Jewell built their business 
            from the ground up on referrals and a reputation of unbeatable service. 
            They added shingles to their inventory in 1988 and Rocket City Drywall 
            &amp; Supply is now one of the leading distributors for Atlas Roofing. 
          </p>
          <p class="text">Three generations and nearly 25 years from its opening 
            day, the company remains highly competitive and now operates from 
            two locations with over 40,000 sq ft of covered warehouse space. Most 
            importantly, we employ 20+ local men and women within the industry 
            they love. Our drivers all have at least a class B license, and we 
            even have 2 with a class A. Like many of our commercial customers, 
            we are proud members of the Huntsville / Madison County Builders Association 
            and have been for years.</p>
          <p class="text">If you or someone you know is a contractor, or just 
            needs some drywall or shingles for a one time job, give us a call 
            and see if we can put the benefit of our 30 years of experience to 
            work for you.</p>
        </div>
        <!--end company history-->
        <!-- philosophy/values -->
        <div name="newboxes" id="newboxes2" style="display:none;"> 
          <p class="subtitle">Philosophy &amp; Values</p>
          <p class="text">At Rocket city Drywall, our customers find a different 
            kind of commercial and residential materials supplier. We take pride 
            in remembering your face, not just your name. Since the local ecconomy 
            supports us, we feel an obligation to return the favor. As a result, 
            when a lot of our competitors had problems with faulty imported Chinese 
            drywall, we were had nothing to worry about. Shipping construction 
            materials across the pacific ocean instead of buying them right here 
            in the USA never made a lot of sense to us, anyway.</p>
          <p class="text">While drywall is in our name, one thing a lot of people 
            may not know is that nearly half our business actually comes from 
            roofing shingles. We buy our roofing materials mostly from Atlas Roofing 
            - anothe great American company. Our shingles all come with at least 
            a 25 year warranty - and many come with 35 year or lifetime warranties.</p>
          <p class="text">If you are a homeowner, quality materials and excellent 
            pricing is only half the battle when it comes to drywall and roofing 
            projects. The other, more important half is the contractor you will 
            be trusting to install those materials. At Rocket City Drywall, we 
            supply some of the best and most well-known craftsman in the business 
            and while we won't play favorites and tell you who we think aught 
            to do your project for you, we do offer both our customers and contractors 
            a place to tell people about their job or their services. Feel free 
            to check out our Customer Talkback page and browse the listings or 
            even post your own! </p>
        </div>
        <!--end philosophy-->
        <!-- Our Staff -->
        <div name="newboxes" id="newboxes3" style="display:none;"> 
          <p class="subtitle">Our Staff</p>
          <p class="text"> 
          <div class="staff"> 
          <?php 
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "staff" ;

$show_all = "SELECT * FROM $table ORDER by Idnum";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());
	

print ('<table width=600>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$title = $row[ "Title" ]."";
$bio = $row[ "Bio" ]."";

print ('<tr><td width="200"><HR>');
print ('<strong>Name: </strong>'.$name.' | ');
print ('<strong>Job Title: </strong>'.$title.'<BR>');
print ('<HR></tr>');
print ('<tr><td width="84"><img src="images/staff/thumbs/'.$Idnum.'.jpg" align="left"></a>'); 
print ('<strong>Bio: </strong>'.$bio.'<BR>');
print ('<HR>');
print ('</td>');

$number=$number+1;

if ($number>0){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>
          </div></p>
          </div>
        <!--end Staff-->
        <!-- Shipping Policy -->
        <div name="newboxes" id="newboxes4" style="display:none;"> <span id="links" style="text-align:center;font-size:80%;"><a href="#shipping">Shipping 
          Policy</a> &bull; <a href="#returns">Return Policy</a> &bull; <a href="#privacy">Privacy 
          Policy</a> &bull; <a href="#talkback">Talkback Policy</a> </span> 
          <p class="subtitle" id="shipping">Shipping Policy</p>
          <p class="text"> <strong>What sorts of things do you ship?</strong> 
            <br/>
            Here at Rocket City Drywall, we ship the following products: drywall, 
            drywall accessories, drywall tools, Atlas roofing and roofing accessories, 
            and Dietrich ULTRASteel metal framing.</p>
          <p class="text"> <strong>When do you ship orders?</strong> <br/>
            We require approximately two business days prior notice to guarantee 
            shipment on a requested date. However, orders can be worked in as 
            early as same-day delivery <strong>if the current schedule allows</strong>. 
            Orders may be scheduled as far in advance as the customer requests. 
            Non-stock items or large orders may require more notice.</p>
          <p class="text"> <strong>Where do you ship to?</strong> <br/>
            We deliver to most areas in Northern and Eastern Alabama, as well 
            as parts of Tennessee. A sales representative should be contacted 
            for delivery pricing outside of Madison and Marshall County.</p>
          <p class="text"> <strong>Which shipping methods do you use?</strong> 
            <br/>
            We use boom trucks, moffet trucks, flat beds -- whatever it takes 
            to make the most efficient delivery and meet the customers needs!</p>
          <p class="text"> <strong>What are your shipping rates?</strong> <br/>
            Shipping rates may vary. A sales representative should be contacted 
            for a <strong>free project estimate</strong>. </p>
          <p class="text"> <strong>In-store Pick-up Option:</strong> <br/>
            We sell to both contractors and the public and materials may be picked 
            up in store. Additional discounts do not apply.</p>
          <br/>
          <span style="float:right;font-size:80%;"><a href="#links">Back to top.</a></span> 
          <hr/>
          <span style="clear:both;">&nbsp;</span> <br/>
          <!-- Return Policy -->
          <p class="subtitle" id="returns">Return Policy</p>
          <p class="text">We make every effort to get it right the first time, 
            but unfortunately, sometimes you're going to need to return a product. 
            Here are some instructions when returning something to Rocket City 
            Drywall (applies to in-store returns, as well):</p>
          <p class="text"> <strong>What can be returned?</strong> <br/>
            Any materials that have been unopened or undamaged may be returned 
            for a refund. All checks written to Rocket City Drywall have a 10 
            day hold, after which a refund may be issued to the customer. </p>
          <p class="text"> <strong>When do items need to be returned by?</strong> 
            <br/>
            There is no time limit on returned items, as long as the materials 
            are in re-sellable condition and the original ticket/payment may be 
            located. </p>
          <p class="text"> <strong>Where are items returned to?</strong> <br/>
            Materials may be returned to either location, or Rocket City Drywall 
            will pick up left over materials for a small trip fee. If the materials 
            were shipped based off of our estimate, the trip fee will be waived. 
          </p>
          <p class="text"> <strong>Is a receipt required?</strong> <br/>
            The original receipt will speed up the return process. However, all 
            computer receipts are kept on file and can be located. </p>
          <p class="text"> <strong>What is your shipping policy on returns?</strong> 
            <br/>
            Shipping rates are non-refundable post-delivery. Shipping on a return 
            is waived only if shipped off of Rocket City Drywall's estimate. </p>
          <p class="text"> <strong>How is the customer credited on a return?</strong> 
            <br/>
            All credits are refunded from the Huntsville location. <br/>
            If the original payment was by: <br/>
            <strong>Credit Card</strong> - the credit is returned to the original 
            card. May take several days for the credit to appear. <br/>
            <strong>Check</strong> - the credit will be returned via cash or check 
            10 days after the original check was deposited. <br/>
            <strong>Cash</strong> - the credit will be immediately returned by 
            cash or check. </p>
          <br/>
          <span style="float:right;font-size:80%;"><a href="#links">Back to top.</a></span> 
          <hr/>
          <span style="clear:both;">&nbsp;</span> <br/>
          <!-- PRIVACY Policy -->
          <p class="subtitle" id="privacy">Privacy Policy</p>
          <p class="text"> Rocket City Drywall is committed to protecting your 
            privacy. We use the information we collect on the site to enhance 
            your overall experience. We do not sell, trade, or rent your personal 
            information to others. <br/>
            <br/>
            <span style="font-style:italic;">Your Consent</span><br/>
            By using our Web site, you consent to the collection and use of this 
            information by Rocket City Drywall &amp; Supply. If we decide to change 
            our privacy policy, we will post those changes on this page so that 
            you are always aware of what information we collect, how we use it, 
            and under what circumstances we disclose it. </p>
          <p class="text">To view our full Privacy Policy, please <a href="privacypolicy.pdf" target="_blank">click 
            here</a>.</p>
          <br/>
          <span style="float:right;font-size:80%;"><a href="#links">Back to top.</a></span> 
          <hr/>
          <span style="clear:both;">&nbsp;</span> <br/>
          <!-- Talkback Policy -->
          <p class="subtitle" id="talkback">"Talkback" Policy</p>
          <p class="text"> Rocket City Drywall's Talkback Feature offers opportunities 
            for meaningful interaction where users can share comments and feedback 
            about our services, and also knowledge, experiences, and other helpful 
            information. Since most of the interactions are public, the experience 
            is best when people follow certain guidelines. Here is some helpful 
            advice: </p>
          <p class="text"> <strong>Use "Netiquette"</strong>: <a href="http://en.wikipedia.org/wiki/Netiquette" target="_blank">Netiquette</a> 
            is a set of core guidelines to help the cyberspace community behave 
            productively while online. Since expression, gestures, and voice tone 
            are all invisible to members, it’s helpful to understand basic online 
            etiquette. </p>
          <p class="text"> <strong>Be Succinct</strong>: Stay on topic and collect 
            your thoughts before communicating them publicly in writing. If your 
            comments are off topic, you may wish to indicate this early in your 
            message or perhaps the message title. </p>
          <p class="text"> <strong>SPAM</strong>: Don't "spam" the boards with 
            multiple postings. Inappropriate messages, like advertising unproven 
            “miracle cures” or products for sale will be removed. </p>
          <p class="text"> <strong>Respect Others</strong>: This is really the 
            bottom line. “Do unto others as you would have them do unto you.” 
            This includes respecting their opinions - even though they may differ 
            from your own - refraining from using profanity, or engaging in conduct 
            that would be deemed inappropriate in real-life, face-to-face situations. 
          </p>
          <p class="text"> <strong>Contacting Rocket City Drywall</strong>: If 
            you have questions or concerns about the ACS community guidelines, 
            you can <a href="contact.php" target="_self">contact us</a>.</p>
        </div>
        <!--end return policy-->
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
