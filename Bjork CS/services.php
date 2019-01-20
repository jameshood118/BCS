<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Bjork Creative Services</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
<script language="JavaScript" type="text/JavaScript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>

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

<body onLoad="MM_preloadImages('images/menu/home-hover.png','images/menu/about-hover.png','images/menu/services-hover.png','images/menu/portfolio-hover.png','images/menu/contact-hover.png')">
<div id="invis"> 
  <div id="logo"><img src="images/logo.png" width="324" height="356" alt="BCS Logo 2009" border="0"/></div>
  <div id="header"> 
    <div class="admin"> 
      <?php include("admin.php"); ?>
    </div>
    <?php include("menu.php"); ?>
  </div>
  <div id="content"> 
    <div class="wrapper"> 
      <div id="submenu"> <a href="javascript:showonlyone('newboxes1');">What We 
        Offer</a> &bull; <a href="javascript:showonlyone('newboxes2');">Our Process</a> 
      </div>
      <div name="newboxes" id="newboxes1" style="display:block;"> 
        <p class="title">What We Offer</p>
        <div class="body"> 
<p style="float:right;padding-right:40px;"><img src="images/globe.jpg" alt="Globe" border="0" width="140"/></p>
          <p class="subtitle">Basic Site Design</p>
          <p class="text"> Many companies confuse the concepts of design and development, 
            not realizing that they are very different. Bjork Creative Services 
            ensures that the critical elements of design are used to transform 
            your website from dull to dynamic!<br/>
            <br/>
            <strong>Basic Site Design includes:</strong><br/>
            &bull; showcasing your company logo <br/>
            &bull; continuity between pages <br/>
            &bull; coordinating color schemes <br/>
            &bull; style to match your company's identity <br/>
            &bull; creative graphics customized for the look of your business 
          </p>
          <div style="clear:both;"></div>
<p style="float:right;padding-right:40px;"><img src="images/time.jpg" alt="Maintenance & Support" border="0" width="120"/></p>
          <p class="subtitle" style="padding-top:10px;">Maintenance &amp; Support</p>
          <p class="text"> Unlike many of our competitors, Bjork Creative Services 
            does not charge a maintenance fee just for your website to exist. 
            We prefer to charge our customers when, and only when, we actually 
            do something to your site. We work when you work, so call us any time 
            for your maintenance and support needs!</p>
          <p class="text"> Remember, a fresh and regularly-updated website is 
            the key to gaining repeat-business. Your website should serve as a 
            tool to keep your customers informed about what products and services 
            you offer at the time you offer them.</p>
          <p class="text"> Bjork Creative Services provides and inexpensive update 
            and improvement service to enable your business to efficiently reach 
            your customer base.</p>
          <div style="clear:both;"></div>
		  
<p style="float:right;padding-right:40px;"><img src="images/flash.jpg" alt="Flash Content" border="0" width="140"/></p>
          <p class="subtitle" style="padding-top:10px;">Flash Content</p>
          <p class="text" style="font-style:italic;">What is Flash?</p>
          <p class="text"> Flash is the industry standard tool for creating high-impact, 
            rich Web content.</p>
          <p class="text"> Bjork Creative Services can use this tool to create 
            designs that accent your site, make high resolution animated graphics, 
            or to generate complex applications.</p>
          <p class="text"> Use of Flash in your homepage header comes as part 
            of our standard package.</p>
          <p class="text"> If you want an <span style="font-style:italic;">extra 
            competitive advantage</span>, Bjork Creative Serivces offers an additional 
            custom Flash-Development service to give your web presence an edge.</p>
          <div style="clear:both;"></div>
<p style="float:right;padding-right:40px;"><img src="images/eCommerce.jpg" alt="E-Commerce" border="0" width="120"/></p>
          <p class="subtitle" style="padding-top:10px;">E-Commerce</p>
          <p class="text"> Your company can do more than just exist on the web 
            - you can do real business, as well! Our interactive E-Commerce and 
            Catalog services provides your company and immediate point-of-sale 
            capability, proven to increase sales. Showcasing your wares and accepting 
            credit cards are a must for any serious business with a website.</p>
          <p class="text"> Multiple options are available: <br/>
            &bull; <strong>Database Upload Service</strong> <br/>
            The control is in your hands! You manage the products and services 
            directly yourself. </p>
          <p class="text"> &bull; <strong>Database Population Service</strong> 
            <br/>
            We manage your database for you so that you don't have to worry about 
            it. </p>
			          <div style="clear:both;"></div>
        </div>
      </div>
      <div name="newboxes" id="newboxes2" style="display:none;"> 
        <p class="title" style="padding-top:20px;">Our Process</p>
        <div class="body"> 
          <p style="float:right;padding-right:40px;"><img src="images/domain.jpg" alt="Domain Hosting" border="0" width="120"/></p>
          <p class="subtitle" style="">Domain Hosting</p>
          <p class="text"> Bjork Creative Services is in business to build websites, 
            not host them. However, at the same time, we deal with hosting and 
            domain registration every day and have developed a service that can 
            relieve you of the headache while saving you money, even if we did 
            not develop your current site.</p>
          <div style="clear:both;"></div>
          <p style="float:right;padding-right:50px;"><img src="images/paint.jpg" alt="Graphic Design" border="0" width="100"/></p>
          <p class="subtitle" style="">Graphic Design</p>
          <p class="text"> Once you have decided on the web package that suits 
            your needs, our Layout and Design Specialists will go to work putting 
            together a graphics scheme that will capture the heart and pulse of 
            your organization. </p>
          <div style="clear:both;"></div>
          <p style="float:right;padding-right:50px;padding-top:20px;"><img src="images/code.jpg" alt="Website Development" border="0" width="100"/></p>
          <p class="subtitle" style="">Website Development</p>
          <p class="text"> Once you have approved a theme, creation of the real 
            website begins! Our expert web developers will combine their technical 
            expertise using HTML, PHP, SQL, Java and Flash to implement a website 
            that is both powerful and relevant to your needs. </p>
          <div style="clear:both;"></div>
          <p style="float:right;padding-right:40px;padding-top:40px;"><img src="images/check.jpg" alt="In-Person Approval" border="0" width="120"/></p>
          <p class="subtitle" style="">In-Person Approval</p>
          <p class="text"> Now that the first draft of your site is complete, 
            check it out and see what you think! If you would like us to make 
            changes, this is the time to make them. </p>
          <p class="text"> Remember, there is no such thing as a "Professional 
            Ego" in this business. If you don't like something, we'll fix it!</p>
			          <div style="clear:both;"></div>
          <p class="text"> Congratulations! You've crossed the finished line and 
            joined the ranks of companies with professional websites!</p>
			          <div style="clear:both;"></div>
        </div>
      </div>
      <div class="push"></div>
    </div>
    <div class="footer"> 
      <?php include("footer.php"); ?>
    </div>
  </div>
</div>
</body>
</html>
