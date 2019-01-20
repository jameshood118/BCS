<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>

<?php

//include slideshow.php to access the Insert_Slideshow function
include "slideshow.php";

//insert the slideshow.swf flash file into the web page
//tell slideshow.swf to get the slideshow's data from sample.php created in the first step
//set the slideshow's width to 320 pixels and the height to 240
echo Insert_Slideshow ( "slideshow.swf", "sample.php", 320, 240 );

?>


</body>
</html>
