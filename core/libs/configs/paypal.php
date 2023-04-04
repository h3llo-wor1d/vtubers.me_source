<?php
# @*************************************************************************@
# @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)           @
# @ Copyright (c) 2020 - 2022                                               @
# @*************************************************************************@

require_once(cl_full_path('core/libs/paypal/vendor/autoload.php'));

$paypal_conf = array(
	"secret_key"      => $cl['config']['paypal_api_key'],
	"publishable_key" => $cl['config']['paypal_api_pass']
);

$paypal_creds = new \PayPal\Auth\OAuthTokenCredential($cl['config']['paypal_api_key'], $cl['config']['paypal_api_pass']);
$paypal       = new \PayPal\Rest\ApiContext($paypal_creds);

$paypal->setConfig(array(
	'mode' => $cl['config']['paypal_mode']
));
