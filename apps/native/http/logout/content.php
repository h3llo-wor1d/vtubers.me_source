<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

if ($cl['is_logged'] == true) {
	cl_signout_user();
} else {
	cl_redirect('/');
}
