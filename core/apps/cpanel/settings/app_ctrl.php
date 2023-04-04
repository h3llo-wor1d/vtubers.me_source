<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

function cl_admin_save_config($key = "none", $val = "none")
{
    global $db, $cl;

    if (in_array($key, array_keys($cl['config']))) {
        $db = $db->where('name', $key);
        $qr = $db->update(T_CONFIGS, array(
            'value' => $val
        ));
    } else {
        return false;
    }
}
