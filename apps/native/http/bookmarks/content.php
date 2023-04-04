<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

if (empty($cl['is_logged'])) {
	cl_redirect("guest");
} else {
	require_once(cl_full_path("core/apps/bookmarks/app_ctrl.php"));

	$cl["page_title"] = cl_translate("Bookmarks");
	$cl["page_desc"]  = $cl["config"]["description"];
	$cl["page_kw"]    = $cl["config"]["keywords"];
	$cl["pn"]         = "bookmarks";
	$cl["sbr"]        = true;
	$cl["sbl"]        = true;
	$cl["bookmarks"]  = cl_get_bookmarks($me['id'], 30);
	$cl["http_res"]   = cl_template("bookmarks/content");
}
