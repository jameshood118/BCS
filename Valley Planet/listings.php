<?php

require 'global.php';
require 'displaylib.php';

if (isset($_REQUEST['id'])) {
	$row=$db->fetch_row("select * from listings where id='{$_REQUEST['id']}'");
	foreach($row as $var => $value) {
		$smarty->assign($var,$value);	
	}
	$smarty->display('listingpopup.tpl');
	exit;
}


while ($test=$db->fetch_row("select catid, count(id) as catcount from listings group by catid order by catid")) {
	if ($test['catcount']=='') $test['catcount']=0;
	$catcounts[$test['catid']]=$test['catcount'];
	$smarty->assign('catcounts',$catcounts);
}
while ($row=$db->fetch_row("select * from listing_categories order by listing_categories.catorder")) {
	foreach($row as $var => $value) {
		$smarty->assign($var,$value);	
	}
	$listingcategorylinks.=$smarty->fetch('listingscategorylink.tpl');
}

$smarty->assign('listingcategorylinks',$listingcategorylinks);

if (isset($_REQUEST['catid'])) {

	$category=$db->fetch_row("SELECT category from listing_categories where catid='{$_REQUEST['catid']}'");
	$smarty->assign('breadcrumbcat',$category['category']);

	//do paging
	$smarty->assign('linkappend',"&catid={$_REQUEST['catid']}");

	$limit = 7;
	!isset($_REQUEST['offset']) ? $offset=0 : $offset=$_REQUEST['offset'];
	
	$numrec=$db->num_rows("select * from listings where catid='{$_REQUEST['catid']}' order by name");
	
	//calc num pages
	$numpage=ceil($numrec/$limit);
	

	if ($numpage!=1) {
		$smarty->assign_by_ref('i',$i);
		$smarty->assign_by_ref('offset',$newoff);

		for ($i=1;$i<=$numpage;$i++) {
			if ((($i-1)*$limit)==$offset) {
				$paging .= $smarty->fetch('page_nolink.tpl');
			} else {
				$newoff=($i-1)*$limit;
				$paging .= $smarty->fetch('page_link.tpl');
			}
		}

		$smarty->assign('paging',$paging);
		$i=0;
	}

	$start=time()-$_1day;
	$end=time()+$_1day*1000;
	while ($row=$db->fetch_row("select listings.*,count(events.eventid) as events from listings LEFT JOIN events on listings.id=events.listingid where listings.catid='{$_REQUEST['catid']}' group by listings.id order by listings.name limit $offset,$limit")) {
		foreach($row as $var => $value) {
			$smarty->assign($var,$value);	
		}
		$listings.=$smarty->fetch('listingblock.tpl');
	}

	$smarty->assign('listings',$listings);
}

//top banner
    if (@include(getenv('DOCUMENT_ROOT').'/openads/phpadsnew.inc.php')) {
        if (!isset($phpAds_context)) $phpAds_context = array();
        $phpAds_raw = view_raw ('zone:5', 0, '', '', '0', $phpAds_context);
    }
    
$smarty->assign('banner',$phpAds_raw['html']);

//side banner 1

    if (@include(getenv('DOCUMENT_ROOT').'/openads/phpadsnew.inc.php')) {
        if (!isset($phpAds_context)) $phpAds_context = array();
        $phpAds_raw = view_raw ('zone:6', 0, '', '', '0', $phpAds_context);
    }
$smarty->assign('sidebanner1',$phpAds_raw['html']);

//side banner 2

    if (@include(getenv('DOCUMENT_ROOT').'/openads/phpadsnew.inc.php')) {
        if (!isset($phpAds_context)) $phpAds_context = array();
        $phpAds_raw = view_raw ('zone:7', 0, '', '', '0', $phpAds_context);
    }
    
$smarty->assign('sidebanner2',$phpAds_raw['html']);




//display page
$smarty->assign('page',$smarty->fetch('listings.tpl'));
$smarty->display('index.tpl');