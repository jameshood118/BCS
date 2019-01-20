<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="styles.php" rel="stylesheet" type="text/css">
<title>Ayers Farm | About Us</title>


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
<?php

echo '<script type=text/javascript>var fadeimages=new Array()</script>';

$menulabel=0;
$path = "images/winter/";
$dir_handle = opendir($path) or die("Unable to open directory $path");

while ($file = readdir($dir_handle)) {
$filetyp = substr($file, -3);
if ($filetyp == 'gif' OR $filetyp == 'jpg') {

$name=$file;

// fadeimages2[2]=["images/Snorkeling1.jpg", "http://www.javascriptkit.com", "_new"] //image with link and target syntax

echo '<script type=text/javascript>fadeimages['.$menulabel.']=["images/winter/'.$name.'", "", ""]</script>';

$menulabel=$menulabel+1;
}

}



echo '<script type=text/javascript>var fadeimages2=new Array()</script>';

$menulabel=0;
$path2 = "images/spring/";
$dir_handle2 = opendir($path2) or die("Unable to open directory $path");

while ($file = readdir($dir_handle2)) {
$filetyp = substr($file, -3);
if ($filetyp == 'gif' OR $filetyp == 'jpg') {

$name=$file;

// fadeimages2[2]=["images/Snorkeling1.jpg", "http://www.javascriptkit.com", "_new"] //image with link and target syntax

echo '<script type=text/javascript>fadeimages2['.$menulabel.']=["images/spring/'.$name.'", "", ""]</script>';

$menulabel=$menulabel+1;
}

}

echo '<script type=text/javascript>var fadeimages3=new Array()</script>';

$menulabel=0;
$path3 = "images/summer/";
$dir_handle3 = opendir($path3) or die("Unable to open directory $path");

while ($file = readdir($dir_handle3)) {
$filetyp = substr($file, -3);
if ($filetyp == 'gif' OR $filetyp == 'jpg') {

$name=$file;

// fadeimages2[2]=["images/Snorkeling1.jpg", "http://www.javascriptkit.com", "_new"] //image with link and target syntax

echo '<script type=text/javascript>fadeimages3['.$menulabel.']=["images/summer/'.$name.'", "", ""]</script>';

$menulabel=$menulabel+1;
}

}

echo '<script type=text/javascript>var fadeimages4=new Array()</script>';

$menulabel=0;
$path4 = "images/fall/";
$dir_handle4 = opendir($path4) or die("Unable to open directory $path");

while ($file = readdir($dir_handle4)) {
$filetyp = substr($file, -3);
if ($filetyp == 'gif' OR $filetyp == 'jpg') {

$name=$file;

// fadeimages2[2]=["images/Snorkeling1.jpg", "http://www.javascriptkit.com", "_new"] //image with link and target syntax

echo '<script type=text/javascript>fadeimages4['.$menulabel.']=["images/fall/'.$name.'", "", ""]</script>';

$menulabel=$menulabel+1;
}

}
?>


<script type="text/javascript">
      
/***********************************************
* Ultimate Fade-In Slideshow (v1.51): © Dynamic Drive (http://www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit http://www.dynamicdrive.com/ for this script and 100s more.
***********************************************/

 
var fadebgcolor="white"

////NO need to edit beyond here/////////////
 
var fadearray=new Array() //array to cache fadeshow instances
var fadeclear=new Array() //array to cache corresponding clearinterval pointers
 
var dom=(document.getElementById) //modern dom browsers
var iebrowser=document.all
 
function fadeshow(theimages, fadewidth, fadeheight, borderwidth, delay, pause, displayorder){
this.pausecheck=pause
this.mouseovercheck=0
this.delay=delay
this.degree=10 //initial opacity degree (10%)
this.curimageindex=0
this.nextimageindex=1
fadearray[fadearray.length]=this
this.slideshowid=fadearray.length-1
this.canvasbase="canvas"+this.slideshowid
this.curcanvas=this.canvasbase+"_0"
if (typeof displayorder!="undefined")
theimages.sort(function() {return 0.5 - Math.random();}) //thanks to Mike (aka Mwinter) :)
this.theimages=theimages
this.imageborder=parseInt(borderwidth)
this.postimages=new Array() //preload images
for (p=0;p<theimages.length;p++){
this.postimages[p]=new Image()
this.postimages[p].src=theimages[p][0]

}
 
var fadewidth=fadewidth+this.imageborder*2
var fadeheight=fadeheight+this.imageborder*2
 
if (iebrowser&&dom||dom) //if IE5+ or modern browsers (ie: Firefox)
document.write('<div id="master'+this.slideshowid+'" style="position:relative;width:'+fadewidth+'px;height:'+fadeheight+'px;overflow:hidden;"><div id="'+this.canvasbase+'_0" style="position:absolute;width:'+fadewidth+'px;height:'+fadeheight+'px;top:0;left:0;filter:progid:DXImageTransform.Microsoft.alpha(opacity=10);opacity:0.1;-moz-opacity:0.1;-khtml-opacity:0.1;background-color:'+fadebgcolor+'"></div><div id="'+this.canvasbase+'_1" style="position:absolute;width:'+fadewidth+'px;height:'+fadeheight+'px;top:0;left:0;filter:progid:DXImageTransform.Microsoft.alpha(opacity=10);opacity:0.1;-moz-opacity:0.1;-khtml-opacity:0.1;background-color:'+fadebgcolor+'"></div></div>')
else
document.write('<div><img name="defaultslide'+this.slideshowid+'" src="'+this.postimages[0].src+'"></div>')
 
if (iebrowser&&dom||dom) //if IE5+ or modern browsers such as Firefox
this.startit()
else{
this.curimageindex++
setInterval("fadearray["+this.slideshowid+"].rotateimage()", this.delay)
}
}

function fadepic(obj){
if (obj.degree<100){
obj.degree+=10
if (obj.tempobj.filters&&obj.tempobj.filters[0]){
if (typeof obj.tempobj.filters[0].opacity=="number") //if IE6+
obj.tempobj.filters[0].opacity=obj.degree
else //else if IE5.5-
obj.tempobj.style.filter="alpha(opacity="+obj.degree+")"
}
else if (obj.tempobj.style.MozOpacity)
obj.tempobj.style.MozOpacity=obj.degree/101
else if (obj.tempobj.style.KhtmlOpacity)
obj.tempobj.style.KhtmlOpacity=obj.degree/100
else if (obj.tempobj.style.opacity&&!obj.tempobj.filters)
obj.tempobj.style.opacity=obj.degree/101
}
else{
clearInterval(fadeclear[obj.slideshowid])
obj.nextcanvas=(obj.curcanvas==obj.canvasbase+"_0")? obj.canvasbase+"_0" : obj.canvasbase+"_1"
obj.tempobj=iebrowser? iebrowser[obj.nextcanvas] : document.getElementById(obj.nextcanvas)
obj.populateslide(obj.tempobj, obj.nextimageindex)
obj.nextimageindex=(obj.nextimageindex<obj.postimages.length-1)? obj.nextimageindex+1 : 0
setTimeout("fadearray["+obj.slideshowid+"].rotateimage()", obj.delay)
}
}
 
fadeshow.prototype.populateslide=function(picobj, picindex){
var slideHTML=""
if (this.theimages[picindex][1]!="") //if associated link exists for image
slideHTML='<a href="'+this.theimages[picindex][1]+'" target="'+this.theimages[picindex][2]+'">'
slideHTML+='<img src="'+this.postimages[picindex].src+'" border="'+this.imageborder+'px">'
if (this.theimages[picindex][1]!="") //if associated link exists for image
slideHTML+='</a>'
picobj.innerHTML=slideHTML
}
 
 
fadeshow.prototype.rotateimage=function(){
if (this.pausecheck==1) //if pause onMouseover enabled, cache object
var cacheobj=this
if (this.mouseovercheck==1)
setTimeout(function(){cacheobj.rotateimage()}, 100)
else if (iebrowser&&dom||dom){
this.resetit()
var crossobj=this.tempobj=iebrowser? iebrowser[this.curcanvas] : document.getElementById(this.curcanvas)
crossobj.style.zIndex++
fadeclear[this.slideshowid]=setInterval("fadepic(fadearray["+this.slideshowid+"])",50)
this.curcanvas=(this.curcanvas==this.canvasbase+"_0")? this.canvasbase+"_1" : this.canvasbase+"_0"
}
else{
var ns4imgobj=document.images['defaultslide'+this.slideshowid]
ns4imgobj.src=this.postimages[this.curimageindex].src
}
this.curimageindex=(this.curimageindex<this.postimages.length-1)? this.curimageindex+1 : 0
}
 
fadeshow.prototype.resetit=function(){
this.degree=10
var crossobj=iebrowser? iebrowser[this.curcanvas] : document.getElementById(this.curcanvas)
if (crossobj.filters&&crossobj.filters[0]){
if (typeof crossobj.filters[0].opacity=="number") //if IE6+
crossobj.filters(0).opacity=this.degree
else //else if IE5.5-
crossobj.style.filter="alpha(opacity="+this.degree+")"
}
else if (crossobj.style.MozOpacity)
crossobj.style.MozOpacity=this.degree/101
else if (crossobj.style.KhtmlOpacity)
crossobj.style.KhtmlOpacity=this.degree/100
else if (crossobj.style.opacity&&!crossobj.filters)
crossobj.style.opacity=this.degree/101
}
 
 
fadeshow.prototype.startit=function(){
var crossobj=iebrowser? iebrowser[this.curcanvas] : document.getElementById(this.curcanvas)
this.populateslide(crossobj, this.curimageindex)
if (this.pausecheck==1){ //IF SLIDESHOW SHOULD PAUSE ONMOUSEOVER
var cacheobj=this
var crossobjcontainer=iebrowser? iebrowser["master"+this.slideshowid] : document.getElementById("master"+this.slideshowid)
crossobjcontainer.onmouseover=function(){cacheobj.mouseovercheck=1}
crossobjcontainer.onmouseout=function(){cacheobj.mouseovercheck=0}
}
this.rotateimage()
}

</script>
	
<style type="text/css">
.bottom A:link {text-decoration:underline; color:blue;}
.bottom A:visited {text-decoration:underline; color:blue;}
.bottom A:active {text-decoration:underline; color:blue;}
.bottom A:hover {text-decoration:underline; font-weight:bold; color:blue;}
</style>
	
</head>

<body>

<div id="menu"> 
  <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="225" height="241">
    <param name="movie" value="flash/menu.swf" />
    <param name="quality" value="high" />
    <param name="wmode" value="transparent" />
    <param name="bgcolor" value="#ffffff" />
    <embed src="flash/menu.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="225" height="241" name="menu"></embed> 
    <!--[if IE ]>
        <object type="application/x-shockwave-flash" data="flash/menu.swf" width="225" height="241">
		<param name="movie" value="flash/menu.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" />
				<embed src="flash/menu.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="225" height="241" name="menu"></embed>
        <!--<![endif]-->
    <p>Alternative content</p>
    <!--[if IE ]>
        </object>
        <!--<![endif]-->
  </object>
</div>

<div id="content"> 
  <div class="top"> 
    <p style="height:10px;">&nbsp;</p>
    <p class="title">About Us</p>
  </div>
  <div class="middle"> 
    <div name="newboxes" id="newboxes3" style="display:none;"> 
      <p class="subtitle">Images</p>
      <p class="text"> 
        <?php
$dir = "images/slides/";

$dh = opendir($dir);

while (($file = readdir($dh)) !== false) {
        if ($file<>"." and $file<>"..") {
		$filelist=$filelist.$file."|";
		$counter=$counter+1;
		
		}
		
}

closedir($dh);
?>
        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="300">
          <param name="movie" value="flash/slides.swf?filelist=<?php echo $filelist?>" />
          <param name="quality" value="high" />
          <param name="wmode" value="transparent" />
          <param name="bgcolor" value="#ffffff" />
          <embed src="flash/slides.swf?filelist=<?php echo $filelist?>" quality="high" wmode="transparent" bgcolor="#ffffff" width="400" height="300" name="fader"></embed> 
          <!--[if IE ]>
        <object type="application/x-shockwave-flash" data="flash/menu.swf" width="400" height="300">
		<param name="movie" value="flash/fader.swf" /><param name="quality" value="high" /><param name="wmode" value="transparent" /><param name="bgcolor" value="#ffffff" />
				<embed src="flash/fader.swf" quality="high" wmode="transparent" bgcolor="#ffffff" width="400" height="300" name="fader"></embed>
        <!--<![endif]-->
          <p>Alternative content</p>
          <!--[if IE ]>
        </object>
        <!--<![endif]-->
        </object>
      </p>
    </div>
    <div name="newboxes" id="newboxes1" style="display:block;"> 
      <p class=subtitle>Company Information</p>
      <p class=text>Ayers Farm is a family owned and operated business. We have 
        supplied the residents of Huntsville with farm-fresh produce for over 
        30 years! We strive to give the freshest produce available to our customers 
        - some produce is even picked on the very day of its sale. During the 
        months of May through October, on every Monday, Wednesday and Friday, we travel 
        to Ethridge, Tennessee. There, we visit the Amish community to buy fresh 
        produce that they have grown specifically for the residents of Huntsville. 
        The produce we purchase is available for sale on Tuesdays, Thursdays and 
        Saturdays at our Market.</p>
      <p class=text>In addition to our fresh produce, we carry a full line of 
        canned fruits and jellies. Many of our jellies are available in sugar-free 
        varieties! In addition, we create special, fully-customizable Fruit Baskets. 
        Each basket is always made to order, always handpicked for freshness, 
        and NEVER pre-packaged. We ask that you call in to place an order for 
        your Fruit Basket so that it will be made to your specifications. Prices 
        for baskets range from $27.50 to $65.00 and delivery to Huntsville Hospital 
        is free.</p>
      <p class=text>We accept Visa and Master Card.</p>
    </div>
    <div name="newboxes" id="newboxes2" style="display:none;"> 
      <p class=subtitle>The Owner</p>
      <p class=text> 
        <center>
          <img src="images/founder.jpg" width=250 height=300 border=1/> 
          <center>
            <br/>
            <br/>
            Susan Ayers-Kelley, Owner 
          </center>
        </center>
      </p>
    </div>
    <div name="newboxes" id="newboxes4" style="display:none;"> 
      <p class=subtitle>Spring</p>
      <p class="text" style="text-align:center;font-size:75%"><img src="images/spring1.jpg" />


      </p>
      <p class=text> In the spring, Ayers Farm has a full line of bedding, vegetable 
        and potted plants! We specialize in ferns and have been doing so for the 
        past 30 years. All of our ferns are grown locally. We also carry the Kimberly 
        Queen ferns that can take full sun. We have wonderful Geraniums and Bougainvilleas! 
      </p>
      <p class=text> We are very knowledgeable when it comes to planting and the 
        care of plants, so if you need any help please do not hesitate to ask. 
        Come see us and you will be surprised at our array of plants that are waiting for your home!</p>
		
		<center><script type="text/javascript">
//new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
new fadeshow(fadeimages2, 400, 300, 1, 3000, 1, "R")
 
</script> </center> 
    </div>
    <div name="newboxes" id="newboxes5" style="display:none;"> 
      <p class=subtitle>Summer</p>
      <p class="text" style="text-align:center;font-size:75%"><img src="images/summer1.jpg" />
      </p>
      <p class=text> Summer is the time for FRESH vegetables, straight from the 
        Amish in the hills of Tennessee to our own backyard. We gather fresh produce 
        daily to bring it to your table. We carry a full line of produce year-round, 
        but during the summer it is a plethora of homegrown goodness. The 
        Amish produce is organic, which is a type farming that has long been forgotten. 
        Stop by today and take a look around -- you’ll love what you see. See 
        you there! </p> 
		<center><script type="text/javascript">
//new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
new fadeshow(fadeimages3, 400, 300, 1, 3000, 1, "R")
 
</script> </center> 
    </div>
    <div name="newboxes" id="newboxes6" style="display:none;"> 
      <p class=subtitle>Fall</p>
      <p class="text" style="text-align:center;font-size:75%"><img src="images/fall1.jpg" />
      </p>
      <p class=text> Fall is a beautiful time at Ayers Farm, with wonderful fun 
        colors in the enormous MUMS! We also have wheat straw, corn stalks, Indian 
        corn, and pumpkins, pumpkins, and more pumpkins! We have any size pumpkin 
        you could want, from the biggest of big to the smallest of small. We also 
        carry loads and loads of apples -- Scott’s Apples are the best in Madison 
        County and we have ’em! Bring the kids out for a fun time during the fall 
        season; take pictures and have fun with us at the Farm. Make sure to check 
        back for any special events that will be posted in the future. </p><center><script type="text/javascript">
//new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
new fadeshow(fadeimages4, 400, 300, 1, 3000, 1, "R")
 
</script> </center> 
    </div>
    <div name="newboxes" id="newboxes7" style="display:none;"> 
      <p class=subtitle>Winter</p>
      <p class="text" style="text-align:center;font-size:75%"> <img src="images/winter1.jpg" />
      </p>
      <p class=text> Christmas Is the most beautiful time at Ayers Farm!! We make 
        hand-made Christmas wreaths and garland. Each wreath is clipped from a 
        tree; then each piece is put together for a special wreath custom-designed 
        just for you!! We do have a large clientele on these wreaths, so if you 
        would like a hand-made wreath, your order must placed no later than <strong>NOV. 
        2, 2009 by 5 p.m</strong>. Call 256-533-5667 to place your order today! 
      <p class=text> We also sell Frazier Fir Christmas trees and will even set 
        them up in your home, if needed. Christmas is such a fun time! We have 
        shared so many Christmases with so many different families, and that is 
        what makes Christmas at Ayers Farm so special. Have a safe and Happy Holiday 
        and a Very Merry Christmas, and God Bless! </p><center><script type="text/javascript">
//new fadeshow(IMAGES_ARRAY_NAME, slideshow_width, slideshow_height, borderwidth, delay, pause (0=no, 1=yes), optionalRandomOrder)
new fadeshow(fadeimages, 400, 300, 1, 3000, 1, "R")
 
</script> </center>
    </div>
  </div>
  <center>
    <center>
      <div class="bottom"> <a href="javascript:showonlyone('newboxes1');">Company</a> 
        &bull; <a href="javascript:showonlyone('newboxes2');">Owner</a> &bull; 
        <a href="javascript:showonlyone('newboxes3');">Images</a> &bull; <a href="javascript:showonlyone('newboxes4');">Spring</a> 
        &bull; <a href="javascript:showonlyone('newboxes5');">Summer</a> &bull; 
        <a href="javascript:showonlyone('newboxes6');">Fall</a> &bull; <a href="javascript:showonlyone('newboxes7');">Winter</a> 
      </div>
      <div id="submenu"> <a href="index.html" target="_self">Home</a> | <a href="about.php" target="_self">About 
        Us</a> | <a href="products.php" target="_self">Products</a> | <a href="contact.html" target="_self">Contact 
        Us</a> | <a href="admin.php" target="_self">Admin</a> </div>
    </center>
  </center>
</div>

</body>
</html>