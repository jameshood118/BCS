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
      <div id="submenu"> <a href="javascript:showonlyone('newboxes1');"></a>&nbsp; </div>
      <div name="newboxes" id="newboxes1" style="display:none;"> 
        <p class="title">Who We Are</p>
        <div class="body"> 
          <p class="text">  </p>
        </div>
      </div>
      <div name="newboxes" id="newboxes2" style="display:none;"> 
        <p class="title"></p>
        <div class="body"> 
          <p class="text"></p>
          <p class="text">&nbsp;</p>
          <p class="text">&nbsp;</p>
        </div>
      </div>
      <div name="newboxes" id="newboxes3" style="display:block;"> 
        <p class="title">Company History</p>
        <div class="body"> 
          <p class="text">Before launching Bjork Creative Services, Jonathan 
            Bjork was the Director of Multi-media Development at DGA Multimedia, 
            a company devoted to servicing the high-tech industry surrounding 
            Marshall Spaceflight Center and Redstone Arsenal. He specialized in 
            presenting abstract concepts and theoretical systems in a simple, 
            uncomplicated, and understandable manner to professionals and laymen 
            alike.</p>
          <p class="text"> When he founded Bjork Creative Services, Jonathan utilized 
            this same skill in the world of web design. He recognized a disturbing 
            trend: small-to-mid-sized companies were losing their identities on 
            the web due to poorly designed web sites. Because cost is often a 
            factor, content and presentation were sacrificed in favor of affordability. 
          </p>
          <p class="text"> Bjork Creative Services resolves this problem. </p>
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
