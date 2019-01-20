<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

 <?php 
				  
$host = "10.6.166.53" ;
$user = "rcdrywal" ;
$pass = "Drywall1" ;
$db = "rcdrywal" ;
$table = "staff" ;

$show_all = "SELECT * FROM $table ORDER by Idnum";


mysql_connect ($host,$user,$pass) or die ( mysql_error ());
mysql_select_db ($db)or die ( mysql_error ());
$result = mysql_query ($show_all) or die ( mysql_error ());
	

print ('<table width=600>');

while ($row = mysql_fetch_array ($result))

{

$Idnum = $row[ "Idnum" ]."";
$name = $row[ "Name" ]."";
$title = $row[ "Title" ]."";
$bio = $row[ "Bio" ]."";

print ('<tr><td width="200"><HR>');
print ('<strong>Name: </strong>'.$name.' | ');
print ('<strong>Job Title: </strong>'.$title.'<BR>');
print ('<HR></tr>');
print ('<tr><td width="84"><img src="images/staff/thumbs/'.$Idnum.'.jpg" align="left"></a>'); 
print ('<strong>Bio: </strong>'.$bio.'<BR>');
print ('</td>');

$number=$number+1;

if ($number>0){
print ('</tr>');
$number=0;
}


}
print ('</table>');
///end show menu items
?>

</body>
</html>
