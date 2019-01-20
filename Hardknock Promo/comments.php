<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Hard Knock Promotions</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<link rel="stylesheet" type="text/css" href="design.css"/>
<script src="swfobject.js" type="text/javascript"></script>

<script language="JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
if (restore) selObj.selectedIndex=0;
}
//-->
</script>
              
</head>

<body>
<div id="invis"> 
  <div id="header"> 
  
  </div>
  
  <div id="content">
  
  <div id="menu">
	<?php include('menu.php'); ?>
    <?php $blogid=$_POST['blogid']; ?>
  </div>
  
  <div id="main">
  	<p style="height:60px;">&nbsp;</p>
	<p class="title">SmackBlog!</p>
	<table>
	<tr>
	<td class="menu" valign="top">
	<!-- DROP DOWN MENU -->
	<p class="subtitle" style="color:#fff;">Create a SmackBlog Comments!</p>
	</td>
	<td class="contents" valign="top">
	
<form action="insert_comments.php" method="post" name="comments">
Author: <input name="author" type="text"><BR>
Email: <input name="email" type="text"><BR>
Comment: <BR><textarea name="comment" cols="10" rows="10"></textarea>
<input type="hidden" value="<?php echo $blogid?>" name="blogid">
<input name="Submit" type="submit" value="Post">

</form>

<?php echo $blogid; ?>
	</td>
	</tr>
	</table>

<!--end body--></div>
	
<!--end content--></div>
      <div class="push"></div>
<!--end invis--></div>
  <div class="footer"> 
<?php include('footer.php'); ?>
  </div>

</body>
</html>
