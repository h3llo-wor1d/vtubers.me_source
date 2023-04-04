<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

$provider     = ((empty($provider)) ? "None" : $provider);
$oauth_config = array(
	"callback"       => cl_link(cl_strf("oauth/%s", strtolower($provider))),
	"providers"      => array(
		"Google"     => array(
			"enabled" => true,
			"keys"    => array(
				"id"     => $cl['config']['google_api_id'],
				"secret" => $cl['config']['google_api_key']
			),
		),
		"Facebook" => array(
			"enabled" => true,
			"keys"    => array(
				"id" => $cl['config']['facebook_api_id'],
				"secret" => $cl['config']['facebook_api_key']
			),
			"scope" => "email",
			"trustForwarded" => false
		),
		"Twitter" => array(
			"enabled" => true,
			"keys" => array(
				"key" => $cl['config']['twitter_api_id'],
				"secret" => $cl['config']['twitter_api_key']
			),
			"includeEmail" => true
		),
		"Twitch" => array(
			"enabled" => true,
			"keys" => array(
				"key" => $cl['config']['twitch_api_id'],
				"secret" => $cl['config']['twitch_api_key']
			),
			"includeEmail" => true
		),
	),
	"debug_mode" => false,
	"debug_file" => "",
);
