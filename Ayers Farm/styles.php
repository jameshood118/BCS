<?php header("Content-type: text/css"); ?>
<?php

// Season of year script

$season = date("z");
// Code below is for spring
if ($season <= 172 and $season >= 79) {
$m_season = "background-spring";
} else {
// Code below is for Summer
if ($season <= 263 and $season >= 173) {
$m_season = "background-summer";
} else {
// Code below is for Autumn
if ($season <= 355 and $season >= 264) {
$m_season = "background-fall";
} else {
// Code below is for Winter
$m_season = "background-winter";
}
}
}

// End of season of year
?>
A:link {text-decoration: none; color:#3b2412;}
A:visited {text-decoration: none; color:#3b2412;}
A:active {text-decoration: none; color:#3b2412;}
A:hover {text-decoration:underline overline; color:#3b2412;}



html, body {

background: #E2EF97 url('images/<?php echo $m_season?>.jpg') no-repeat;
        	
margin:0px 0px;
		
		font-family: Arial, san-serif;
		font-size:100%;
		line-height:110%;
		color:#3b2412;

		}
		
#menu {
	position:absolute;
	top:175px;
	left:135px;
	width:225px;
	height:241px;
	z-index:3;
	}

#submenu {
	padding:25px;
	width:475px;
	font-size:80%;
	text-align:center;
	}
	
#content {
	position:absolute;
	background:transparent;
	top:180px;
	left:400px;
	width:525px;
	height:400px;
	z-index:2;
	}

.top {
	width:541px;
	height:50px;
	padding:0px;
	background:#fff url('images/top.jpg') no-repeat top center;
	}

.middle {
	width:525px;
	padding:9px;
	background:transparent url('images/middle.jpg') repeat-y top center;
	}
	
.bottom {
	width:541px;
	height:50px;
	padding:0px;
	background:transparent url('images/bottom.png') no-repeat bottom center;
	font-size:75%;
	text-align:center;
	}
	
.title {
	padding-top:6px;
	padding-left:28px;
	font-family Arial, san-serif;
	font-size:125%;
	font-weight:bold;
	}
	
.subtitle {
	padding-left:25px;
	font-family Arial, san-serif;
	font-size:110%;
	font-weight:bold;
	font-style:italic;
	}

.text {
	padding-left:50px;
	padding-right:35px;
	width:440px;
	text-align:justify;
	font-family Arial, san-serif;
	font-size:90%;
	}
	
.text2 {
	padding-left:50px;
	padding-right:35px;
	text-align:left;
	font-family Arial, san-serif;
	font-size:70%;
	}

#form {
	text-align:center;
		}

