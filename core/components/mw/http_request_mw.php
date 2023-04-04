<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

$cl['follow_suggestion'] = cl_get_follow_suggestions(5);
$cl['hot_topics']        = cl_get_hot_topics(15);
$cl['visitor_uniqid']    = null;

if (empty($_COOKIE['visid'])) {
	$cl_unid_hash = sha1(rand(11111, 99999)) . time() . md5(microtime());

	setcookie("visid", $cl_unid_hash, strtotime("+ 1 year"), '/') or die('unable to create cookie');
} else {
	$cl['visitor_uniqid'] = $_COOKIE['visid'];
}
