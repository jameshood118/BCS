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
      <div id="submenu"> <a href="javascript:showonlyone('newboxes1');">Contact 
        Form</a> &bull; <a href="javascript:showonlyone('newboxes2');">Hours of 
        Operation</a> &bull; <a href="javascript:showonlyone('newboxes3');">Location</a> 
      </div>
      <div name="newboxes" id="newboxes1" style="display:block;">
<p class="text" style="width:575px;text-align:right;padding-left:0px;padding-bottom:0px;"> office | (256) 489-1969 
<br/>
cell | (256) 604-8386
<br/>
email | <a href="mailto:jlbjork@gmail.com">jlbjork@gmail.com</a>
</p> 
        <p class="title">Contact Form</p>
        <div class="body" style="margin-left:188px;text-align:left;"> 
          <p class="text"> 
            <?php 
	$emptyfields=$_GET['emptyfields'];
	if ($emptyfields=="true") {
	print ('<font color=red>ALL FIELDS ARE REQUIRED. PLEASE TRY AGAIN.</font><br>');
	}
	?>
          <form action="sendmail.php" method="post">
            <select name="department" id="select">
              <option value="Information" selected>General Information</option>
              <option value="Graphic Design">Graphic Design</option>
              <option value="Hosting">Hosting</option>
              <option value="Web Development">Web Development</option>
            </select>
            <br/>
            Name*:&nbsp;&nbsp; 
            <input name="name" type="text" size="15" maxlength="15">
            <BR/>
            Phone*:&nbsp; 
            <input name="phone" type="text" size="15" maxlength="15">
            <BR/>
            Email*:&nbsp;&nbsp; 
            <input name="email" type="text" size="30" maxlength="30">
            <BR/>
            Comments*:<BR/>
            <textarea name="comments" cols="45" rows="5"></textarea>
            <BR/>
            <INPUT TYPE="submit" NAME="send" VALUE="Submit">
            <BR/>
            <BR/>
            * Required Information 
          </form>
          <p class="text"> </p>
        </div>
      </div>
      <div name="newboxes" id="newboxes2" style="display:none;"> 
<p class="text" style="width:575px;text-align:right;padding-left:0px;padding-bottom:0px;"> office | (256) 489-1969 
<br/>
cell | (256) 604-8386
<br/>
email | <a href="mailto:jlbjork@gmail.com">jlbjork@gmail.com</a>
</p> 
        <p class="title">Hours of Operation</p>
        <div class="body"> 
          <p class="text"> Hours of Operation: <BR/>
            Monday Through Friday<BR/>
            9am to 6pm CST<BR/>
          </p>
        </div>
      </div>
      <div name="newboxes" id="newboxes3" style="display:none;"> 
<p class="text" style="width:575px;text-align:right;padding-left:0px;padding-bottom:0px;"> office | (256) 489-1969 
<br/>
cell | (256) 604-8386
<br/>
email | <a href="mailto:jlbjork@gmail.com">jlbjork@gmail.com</a>
</p> 
        <p class="title">Location</p>
        <div class="body"> 
          <p class="text"> 
            <iframe style="border:2px solid #000;" width="425" height="350" frameborder="1" bordercolor="#000" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;q=bjork+creative+services+huntsville+al&amp;fb=1&amp;split=1&amp;gl=us&amp;cid=0,0,5691767536999953031&amp;ei=E5pLSrm7CJmxtgeG4YycDQ&amp;ll=34.595386,-86.558607&amp;spn=0.006295,0.006295&amp;iwloc=A&amp;output=embed"></iframe>
          </p>
          <p class="text">&nbsp;</p>
          <p class="text">&nbsp;</p>
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
