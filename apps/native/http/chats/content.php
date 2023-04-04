<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

if (empty($cl["is_logged"])) {
	cl_redirect("guest");
} else {
	require_once(cl_full_path("core/apps/chat/app_ctrl.php"));

	$cl["page_title"] = cl_translate("Messages");
	$cl["page_desc"]  = $cl["config"]["description"];
	$cl["page_kw"]    = $cl["config"]["keywords"];
	$cl["pn"]         = "chat";
	$cl["sbr"]        = true;
	$cl["sbl"]        = true;
	$cl["chats"]      = cl_get_chats(array("user_id" => $me['id']));
	$cl["http_res"]   = cl_template("chats/content");
}
