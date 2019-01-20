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
    <p class="title">About Us</p>
    <p class="sublinks"> <a href="javascript:showonlyone('newboxes1');">Company 
      History</a> &bull; <a href="javascript:showonlyone('newboxes2');">Company 
      Policy &amp; Values</a> &bull; <a href="javascript:showonlyone('newboxes3');">Shipping 
      Policy</a> &bull; <a href="javascript:showonlyone('newboxes4');">Return 
      Policy</a> </p>
  </div>

    <div class="body"> 
      <div name="newboxes" id="newboxes1" style="display:block;"> 
        <p class="subtitle">Company History</p>
        <p class="text"> River Valley comfort shoes began as a small business 
          venture by Christopher Gurnee and his wife, Cheryl. Christopher has 
          worked within the shoe industry for over 30 years. He and Cheryl understand 
          the needs of many customers looking for shoes without success, an alarmingly 
          common trend, and decided to open River Valley Comfort Shoes in the 
          hopes of offering customers a better solution to their shoe-shopping 
          needs. Established early in 2009, the store has already grown and flourished, 
          while still maintaining a strong sense of family and tradition.</p>
        <p class="text"> When you walk through the doors at River Valley Comfort 
          Shoes, you will be treated like royalty. The staff will take you under 
          their wing, ensuring a shopping experience that is both comfortable, 
          informative, and, most importantly, <strong>rewarding</strong>! Feel 
          free to <a href="contact.php" target="_same">send us an e-mail</a> or, 
          better yet, stop on by <a href="contact.php" target="_self">the store</a> 
          and meet the family. </p>
      </div>
      <div name="newboxes" id="newboxes2" style="display:none;"> 
        <p class="subtitle">Company Policy &amp; Values</p>
        <p class="text">At River Valley Comfort Shoes, we have a simple philosophy: 
          provide high quality products and service you, our customer, with the 
          highest degree of support and efficiency. We stake our reputation to 
          do our best to operate on the principles and values of honesty, fairness, 
          integrity, passion and commitment and we emphasize the urgency among 
          our company associates in providing products and services that exceed 
          customer expectations. The complete satisfaction of our customers is 
          the driving force of our operation. </p>
        <p class="text"> The most important way that we offer value to our customers? 
          By providing them with high quality products, extraordinary service 
          and a competitive price. We are constantly challenged to improve the 
          value proposition to our customers. After all, we want to establish 
          a relationship with every person who walks through our doors. We don't 
          just want customers - we want people to be so impressed and satisfied 
          with the way we do our business that it keeps them coming back and also 
          sharing our name with their friends and family. This is the way to do 
          business. People want to do business with a person, a face, an identity 
          - not a company. And, we are <strong>much</strong> more than just a 
          company! </p>
      </div>
      <div name="newboxes" id="newboxes3" style="display:none;"> 
        <p class="subtitle">Shipping Policy</p>
        <p class="text"> We typically deliver within 10 business days and use 
          UPS Ground Shipping. Our timeframe does not include weekends and major 
          national holidays. You can expect delivery to be longer or shorter depending 
          on your proximity to our location. </p>
        <p class="text"> Standard shipping rates apply.</p>
        <p class="text"> <strong>Express Orders</strong> <br/>
          For those rush orders, we offer expedited shipping through UPS. (Depends 
          on whether the item is in-stock at time of purchase!) </p>
        <p class="text"> <strong>International Orders</strong> <br/>
          At this time, we ship throughout the Continental U.S. For international 
          orders, please <a href="contact.php">contact us</a>. </p>
        <p class="text"> We also offer in-store pickup.</p>
        <p class="text"> Please <a href="contact.php">contact us</a> if you would 
          like a more exact shipping estimate, or for any other questions.</p>
      </div>
      <div name="newboxes" id="newboxes4" style="display:none;"> 
        <p class="subtitle">Return Policy</p>
        <p class="text"> Being a small family owned shoe store we are very concerned 
          with your overall total satisfaction. We're very aware that you are 
          making a choice to shop with us and that online today there are many 
          great places to shop for shoes. We want you to know that if you are 
          not completely satisfied with your purchase, you may return the merchandise 
          to us within 10 business days, along with the receipt, for a full refund 
          or for an exchange. We ask that the shoe be unworn, in like-new condition.</p>
        <p class="text"> To return an item, simply stop by our store with the 
          required items. We will process your return and credit it in one of 
          the following ways: <br/>
          <br/>
          &bull; <strong>Cash</strong>: If you paid for the item with cash, we 
          will refund your money in cash. <br/>
          &bull; <strong>Credit Card</strong>: If you paid for the item with a 
          debit/credit card, we will refund the amount back onto your card. <font style="font-style:italic;">All 
          internet orders will be refunded this way.</font> <br/>
          &bull; <strong>Check</strong> If you paid by check, and the return is 
          within five business days, we will refund your check. </p>
        <p class="text"> <strong>Shipping Returns</strong> <br/>
          We allow returns on all shipped orders (above conditions apply). Please 
          <a href="contact.php">contact us</a> by phone to set up the return. 
        </p>
      </div>
    </div>
    <!--end body-->
    <div class="push"></div>
  </div>
  <!--end content-->
</div>
<!--end invis-->

  <?php include('footer.php'); ?>
	


</body>
</html>
