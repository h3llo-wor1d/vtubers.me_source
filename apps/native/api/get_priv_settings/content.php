<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

if (empty($cl['is_logged'])) {
	$data         = array(
		'code'    => 401,
		'data'    => array(),
		'message' => 'Unauthorized Access'
	);
} else {
	$data["code"]    = 200;
	$data["valid"]   = true;
	$data["message"] = "";
	$data["data"]    = array(
		"profile_visibility" => $me["profile_privacy"],
		"contact_privacy"    => $me["contact_privacy"],
		"search_visibility"  => (($me["index_privacy"] == "Y") ? true : false)
	);
}
