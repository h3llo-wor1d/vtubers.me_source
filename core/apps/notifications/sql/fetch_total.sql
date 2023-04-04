	/*
	// @*************************************************************************@
	// @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)            @
	// @ Copyright (c) 2020 - 2022                                               @
	// @*************************************************************************@
	*/

SELECT COUNT(*) AS total FROM `<?php echo($data['t_notifs']); ?>`
	
	WHERE `recipient_id` = <?php echo($data['user_id']); ?>

	<?php if($data['type'] == "notifs"): ?>
		AND `subject` IN ('reply','subscribe', 'like', 'repost', 'verified', 'visit', 'subscribe_request', 'subscribe_accept', 'ad_approval')
	<?php else: ?>
		AND `subject` = 'mention'
	<?php endif; ?>

	AND `notifier_id` NOT IN (SELECT b.`profile_id` FROM `<?php echo($data['t_blocks']); ?>` b WHERE b.`user_id` = <?php echo($data['user_id']); ?>)