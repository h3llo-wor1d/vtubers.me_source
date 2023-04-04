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
    $acc_password = fetch_or_get($_POST['password'], false);

    if (empty($acc_password) || (password_verify($acc_password, $me['password']) != true)) {
        $data['code']    = 400;
        $data['message'] = "Account password is missing or invalid";
        $data['data']    = array();
    } else {
        $data["code"]    = 200;
        $data["message"] = "Account deleted successfully";
        $data["data"]    = array();

        cl_delete_user_data($me['id']);
    }
}
