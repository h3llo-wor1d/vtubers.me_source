<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

$ad_id   = fetch_or_get($_GET["ad_id"], false);
$ad_item = cl_get_timeline_ads($ad_id);

if (empty($ad_item)) {
	cl_redirect("404");
} else {
	$cl["page_title"] = cl_translate('Advertisement');
	$cl["page_desc"]  = $cl["config"]["description"];
	$cl["page_kw"]    = $cl["config"]["keywords"];
	$cl["pn"]         = "ad_item";
	$cl["sbr"]        = true;
	$cl["sbl"]        = true;
	$cl["ads_ls"]     = array($ad_item);
	$cl["http_res"]   = cl_template("ad_item/content");
}
