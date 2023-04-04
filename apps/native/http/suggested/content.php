<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

$cl["page_title"] = $cl["config"]["name"];
$cl["page_desc"]  = $cl["config"]["description"];
$cl["page_kw"]    = $cl["config"]["keywords"];
$cl["pn"]         = "suggested";
$cl["sbr"]        = true;
$cl["sbl"]        = true;
$cl["users_list"] = cl_get_follow_suggestions(30);

if (empty($cl["users_list"])) {
	cl_redirect("404");
} else {
	$cl["http_res"] = cl_template("suggested/content");
}
