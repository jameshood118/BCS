<div class="footer" style="padding-top:4px;	text-align:center; font-family:'Arial', Arial, sans-serif;font-size:75%;color:#ccc;">
<center>
<a href="index.php">Home</a> &bull;
<a href="about.php">About</a>  &bull;
<a href="services.php">Services</a>  &bull;
<a href="portfolio.php">Portfolio</a> &bull;
<a href="contact.php">Contact</a>
<br/>

<?php 
function autoUpdatingCopyright($startYear){
 
    // given start year (e.g. 2004)
    $startYear = intval($startYear);
 
    // current year (e.g. 2007)
    $year = intval(date('Y'));
 
    // is the current year greater than the
    // given start year?
    if ($year > $startYear)
        return $startYear .'-'. $year;
    else
        return $startYear;
}
?>


&copy; <?php echo autoUpdatingCopyright(2009);?> Bjork Creative Services. All Rights Reserved.
<br/>
Site By<a href="http://www.bjorkcs.com"> Bjork Creative Services</a>
</center>
</div>