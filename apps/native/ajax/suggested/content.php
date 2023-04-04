<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

if ($action == 'load_more') {
	$data['err_code'] = "invalid_req_data";
	$data['status']   = 400;
	$offset           = fetch_or_get($_GET['offset'], 0);
	$users_list       = array();
	$html_arr         = array();

	if (is_posnum($offset)) {

		$users_list = cl_get_follow_suggestions(30, $offset);

		if (not_empty($users_list)) {
			foreach ($users_list as $cl['li']) {
				$html_arr[] = cl_template('suggested/includes/list_item');
			}

			$data['status'] = 200;
			$data['html']   = implode("", $html_arr);
		}
	}
}
