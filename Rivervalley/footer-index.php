<table width="960" height="150" align="center" cellpadding="0" cellspacing="0" style="background:url('images/new-items/new-items.png') no-repeat top center;">
<tr>
<td width="205" height="116">&nbsp;</td>

<td width="110" valign="bottom">
<img src="images/new-items/thumb1.png" alt="" border="0" width="110" />
</td>
<td width="110" valign="bottom">
<img src="images/new-items/thumb2.png" alt="" border="0" width="110" />
</td>
<td width="110" valign="bottom">
<img src="images/new-items/thumb3.png" alt="" border="0" width="110" />
</td>
<td width="110" valign="bottom">
<img src="images/new-items/thumb4.png" alt="" border="0" width="110" />
</td>
<td width="110" valign="bottom">
<img src="images/new-items/thumb5.png" alt="" border="0" width="110" />
</td>

<td width="205">&nbsp;</td>
</tr>

<tr>
<td colspan="7" height="34" align="center" valign="bottom" style="text-align:center;font-size:8pt;">


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
&copy; <?php echo autoUpdatingCopyright(2009);?> Bjork Creative Services. All Rights Reserved. | Site By<a href="http://www.bjorkcs.com"> Bjork Creative Services</a>
</td></tr>
</table>