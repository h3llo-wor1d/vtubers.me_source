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
	cl_db_delete_item(T_SESSIONS, array(
		"user_id"  => $me["id"],
		"platform" => "mobile_ios"
	));

	cl_db_delete_item(T_SESSIONS, array(
		"user_id"  => $me["id"],
		"platform" => "mobile_android"
	));

	$data         = array(
		'valid'   => true,
		'code'    => 200,
		'message' => 'Signout successful',
		'data'    => array()
	);
}
