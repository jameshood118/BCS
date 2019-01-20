<p class="footer-links" align="center">
<a href="businesslistings.php">Business Listings</a>
&bull;
<a href="classifieds.php">Classifieds</a>
&bull;
<a href="eventcalendar.php">Event Calendar</a>
&bull;
<a href="musiccalendar.php">Music Calendar</a>
&bull;
<a href="gasprices.php">Gas Prices</a>
&bull;
<a href="horoscopes.php">Horoscopes</a>
&bull;
<a href="lottery.php">Lottery</a>
&bull;
<a href="movietimes.php">Movie Times</a>
&bull;
<a href="weather.php">Weather</a>
</p>
<p class="footer-text" style="float:right; text-align:right;">
<?php 

$title_of_company="Valley Planet";

?>
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
?>&copy; <?php echo autoUpdatingCopyright(2009);?> <?php echo $title_of_company;?>. All Rights Reserved.
<br/>
Site By<a href="http://www.bjorkcs.com"> Bjork Creative Services</a></p>


<p class="footer-text">
<a href="admin.php">Admin</a>
</p>
