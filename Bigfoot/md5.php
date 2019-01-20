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

    <script type="text/javascript" src="swfobject.js"></script>
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
  <div id="content" style="background:transparent url('images/content-bg-index.jpg') no-repeat top center;"> 
    <div class="wrapper"> 
      <div id="submenu"> &nbsp; </div>
      <div class="body-index"> 
        <div style="padding-left:188px;	width:390px;height:75px;"> </div>
        <p class="text"> 
          <BR>
          <BR>
<?php
$hashtofind=$_POST['hash'];
?>
<form action="" method="post" name="hash dicovery">
Input word to find the hash: <input name="hash" type="text" /><BR>



<input name="Submit" type="submit" value="Uncover" />
<input name="Reset" type="submit" value="Reset" />
</form>
<?php
if ($hashtofind==''){
print ('You Really need to input a value');
exit;
} else {
$hash = md5($hashtofind);
}



?>
<?php if (isset($_POST['Submit'])) { ?>
Hash Discovered! <BR><?php echo $hash ?>
<?php } ?>

<?php if (isset($_POST['Reset'])) { 
unset ($_POST['Submit']);
}?>

        <p style="padding-bottom:20px;"></p></p>
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
