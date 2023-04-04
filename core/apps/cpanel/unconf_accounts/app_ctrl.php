<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

function cl_get_unconfirmed_accounts()
{
	global $db;

	$db = $db->where("time", (time() - 604800), "<");
	$qr = $db->getValue(T_ACC_VALIDS, "COUNT(*)");

	if (is_posnum($qr)) {
		return $qr;
	}

	return 0;
}
