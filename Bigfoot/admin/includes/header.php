<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
<link rel="stylesheet" type="text/css" href="sample.css" />
<script src="swfobject.js" type="text/javascript"></script>

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
	
<!--
<script type="text/javascript" src="popup-window.js"></script>

<style type="text/css">
#admin-button input {
	background:url('images/admin-bg.jpg') no-repeat center;
	width:90;
	height:25px;
	border:2px outset #000;
	}
	
</style>
-->

</head>

<body>
<div id="invis"> 

<!--
<div style="position:absolute;top:10px;left:10px;">
<form action="" onsubmit="return false;">
<div id="admin-button"><input type="button" value="Site Admin"
       onclick="popup_show('popup', 'popup_drag', 'popup_exit', 'mouse',  -10, -10);" /></div>

</form>

<div class="sample_popup" id="popup" style="display: none;">

<div class="menu_form_header" id="popup_drag">
<img class="menu_form_exit"   id="popup_exit" src="images/form_exit.png" alt="" />
&nbsp;&nbsp;&nbsp;Login
</div>

<div class="menu_form_body">
<form name="form1" method="post" action="admin/admin_menu.php">
<p style="padding-top:5px; font-size:10px;">Admin Login:   <input name="login" type="text"  onfocus="select();" class="field" ></p>
<p style="padding-top:5px; font-size:10px;">Password:<input name="password" type="password" onfocus="select();" class="field" ></p>
<br/>
<p class="submit"><input type="submit" name="submit" value="Submit"></p>
</form>
</div>

</div>
</div>
-->

  <div id="header">
  <div class="bg-img"> 
	<!--end header img--></div>
  <!--end header--></div>
  <div id="wrapper">