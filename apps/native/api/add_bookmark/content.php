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
    $post_id   = fetch_or_get($_POST['post_id'], 0);
    $post_data = cl_raw_post_data($post_id);

    if (not_empty($post_data)) {
        if (cl_has_saved($me['id'], $post_id) != true) {
            cl_db_insert(T_BOOKMARKS, array(
                'publication_id' => $post_id,
                'user_id'        => $me['id'],
                'time'           => time()
            ));

            $data['code']    = 200;
            $data['message'] = "";
            $data['data']    = array(
                "bookmark"   => true
            );
        } else {
            cl_db_delete_item(T_BOOKMARKS, array(
                'publication_id' => $post_id,
                'user_id'        => $me['id']
            ));

            $data['code']    = 200;
            $data['message'] = "";
            $data['data']    = array(
                "bookmark"   => false
            );
        }
    } else {
        $data['code']    = 400;
        $data['message'] = "Post id is missing or invalid";
        $data['data']    = array();
    }
}
