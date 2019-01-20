<script language="javascript" type="text/javascript">
function toggleLayer( whichLayer )
{
  var elem, vis;
  if( document.getElementById ) // this is the way the standards work
    elem = document.getElementById( whichLayer );
  else if( document.all ) // this is the way old msie versions work
      elem = document.all[whichLayer];
  else if( document.layers ) // this is the way nn4 works
    elem = document.layers[whichLayer];
  vis = elem.style;
  // if the style.display value is blank we try to figure it out here
  if(vis.display==''&&elem.offsetWidth!=undefined&&elem.offsetHeight!=undefined)
    vis.display = (elem.offsetWidth!=0&&elem.offsetHeight!=0)?'block':'none';
  vis.display = (vis.display==''||vis.display=='block')?'none':'block';
}
</script>



<div class="blog">
<?php 
print ('<div align="center">');
print ('<form action="" method="post" name="blog">');
print ('<select name="show">'); 
print ('<option selected value="Select a Blog to View">Select a Blog to View</option>');
print ('<option value="All">All</option>');



$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "smackblog" ;

$show_all = "SELECT * FROM $table ORDER by Idnum ASC";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$author = $row[ "Author" ]."";
$post_pass = $row[ "Post_pass" ]."";
$email = $row[ "Email" ]."";
$title = $row[ "Title" ]."";
$message = $row[ "Message" ]."";

print ('<option value="'.$Idnum.'">'.$title.'</option>');

}

print ('</select>');
print ('<div class="submit"><input type="submit" name="Submit" value="Show"></div><br/><br/>');
print ('</form></div>');


///end show menu items


$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "smackblog" ;

$show=$_POST['show'];

if ($show<>"All" and $show<>""){
$blogs="Select * from $table WHERE Idnum= '$show'";
} else {
$blogs = "SELECT * FROM $table ORDER by Idnum ASC";}

/* do not delete */

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($blogs) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$author = $row[ "Author" ]."";
$post_pass = $row[ "Post_pass" ]."";
$email = $row[ "Email" ]."";
$title = $row[ "Title" ]."";
$message = $row[ "Message" ]."";

print ('<p class="title-blog">'.$title.'</p>');
print ('<div style="float:right;">');
if(file_exists('images/smackblog/thumbs/'.$Idnum.'.jpg' )){
print ('<a href="images/smackblog/thumbs/'.$Idnum.'.jpg" target=_blank><img src="images/smackblog/thumbs/'.$Idnum.'.jpg" border="0"/></a>');
}else{
echo "";}
print ('</div><p class="text" style="padding:5px"><span style="font-weight:bold;color:#000;">Author: </span>' .$author.'</p>');
print ('<p class="text" style="padding:5px"><span style="font-weight:bold;color:#000;">Email: </span>' .$email.'<br/>');
print ('<p class="text" style="padding:5px;padding-bottom:15px;"><span style="font-weight:bold;color:#000;">Message: </span>' .$message.'<br/></p>');
print ('<div style="clear:right;">&nbsp;</div>');

print ('<div style="float:left;">');
echo "<a href=\"javascript:toggleLayer('comments".$Idnum."');\">View Comments</a>";
print ('</div>');

print ('<div align="right" class="submit"><form name="comments" method="post" action="comments.php">');
print ('<input type="hidden" value='.$Idnum.' name="blogid">');
print ('<input type="submit" name="Submit3" value="Comment" />');
print ('</form></div><div style="clear:left;">');
print ('<hr style="width:100%;"/></div><br/><br/>');

print ('<div name="comments'.$Idnum.'" id="comments'.$Idnum.'" style="display:none">');

$table = "blogcomments";

$blogcomments="Select * from $table WHERE Blogid= '$Idnum'";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result2 = mysql_query ($blogcomments) or die ( mysql_error ());

while ($row2 = mysql_fetch_array ($result2))

{

$comment_id = $row2[ "Comment_ID" ]."";
$blogid = $row2[ "Blogid" ]."";
$author2 = $row2[ "Author" ]."";
$email2 = $row2[ "Email" ]."";
$comment = $row2[ "Comment" ]."";
$timestamp = $row2[ "Timestamp" ]."";

print ('<blockquote><p class="blogcomments">Comments:<br/>');
print ($author2.'<br/>');
print ($email2.'<br/>');
print ($comment.'<br/>');
print ($timestamp.'<br/>');


$number=$number+1;

if ($number>1){
print ('</p></blockquote>');
$number=0;
}

}
echo "<span style='float:right;'><a href=\"javascript:toggleLayer('comments".$Idnum."');\">Hide Comments</a></span>";
print ('</div><div style="clear:right;margin-bottom:20px;"></div>');

}
?>

</div>