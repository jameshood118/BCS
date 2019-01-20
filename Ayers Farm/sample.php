<?php

//include slideshow.php in your script
include "slideshow.php";

//show the control bar
$slideshow [ 'control' ][ 'bar_visible' ] = "on";

//add slides
for ( $i=0; $i<25; $i++ ){
	$slideshow[ 'slide' ][ $i ] = array ( 'url' => "slideshow/$i.jpg" );
}
							
//build a slideshow using the new variable
Send_Slideshow_Data ( $slideshow );

?>
