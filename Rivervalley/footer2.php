<div class="footer2">
<p>
<a href="index.php">Home</a> &bull; <a href="about.php">About Us</a> &bull; <a href="products.php">Products</a> &bull; <a href="contact.php">Contact Us</a> &bull; <a href="admin.php">Admin</a>
</p>

<div>
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
&copy; <?php echo autoUpdatingCopyright(2009);?> Bjork Creative Services. All Rights Reserved. | Site By<a href="http://www.bjorkcs.com"> Bjork Creative Services</a>
</div>

</div>