<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

function cl_get_total_users()
{
	global $db, $cl;

	$db  = $db->where('active', array('1', '2'), 'IN');
	$qr  = $db->getValue(T_USERS, 'COUNT(*)');
	$num = 0;

	if (is_posnum($qr)) {
		$num = $qr;
	}

	return $num;
}
