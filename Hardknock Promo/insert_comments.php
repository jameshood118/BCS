<HTML><BODY><?php
$blogid=$_POST['blogid']; 
$author=$_POST [ "author" ];
$email=$_POST [ "email" ];
$comment=$_POST [ "comment" ];
$timestamp = date("Y-m-d-h:i:s:u");


$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "blogcomments" ;

$show_all = "SELECT * FROM $table Order by Comment_ID";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$comment_id = $row[ "Comment_ID" ]."";

}
$new_comment_id=$comment_id+1;

mysql_query("INSERT into $table (Comment_ID, Blogid, Author, Email, Comment, Timestamp) 
Values ('$new_comment_id', '$blogid', '$author','$email','$comment', '$timestamp')") or die(mysql_error());

///end update database

$host = "10.6.186.43" ;
$user = "hardknockpromo" ;
$pass = "Cagefight1" ;
$db = "hardknockpromo" ;
$table = "mailinglist" ;

$show_all = "SELECT * FROM $table";

mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());

while ($row = mysql_fetch_array ($result))
{

$Idnum = $row[ "Idnum" ]."";

}
$new_Idnum_num=$Idnum+1;

$sql = mysql_query("SELECT email FROM $table WHERE email = '$email'") or die ("query 1: " . mysql_error());
$mysql_num = mysql_num_rows($sql);

if ($mysql_num >= 1)
{
echo 'Email already exists, Skipping';
}
else
{

mysql_query("INSERT into $table (Idnum, Name, Email) Values ('$new_Idnum_num', '$author','$email')") or die(mysql_error());} 

?>

<form name="return" method="post" action="blog.php">
</form>
<script language="javascript" type="text/javascript">
document.forms['return'].submit();
</script>

</BODY></HTML>