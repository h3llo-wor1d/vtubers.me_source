<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

if (empty($cl['is_logged'])) {
	cl_redirect('404');
} else if (empty($me["email_conf_code"])) {
	cl_redirect('404');
}

$cl["page_title"] = cl_translate("Confirm new email");
$cl["page_desc"]  = $cl["config"]["description"];
$cl["page_kw"]    = $cl["config"]["keywords"];
$cl["pn"]         = "confirm_email";
$cl["sbr"]        = true;
$cl["sbl"]        = true;
$cl["http_res"]   = cl_template("confirm_email/content");
