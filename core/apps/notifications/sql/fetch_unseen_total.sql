	/*
	// @*************************************************************************@
	// @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)            @
	// @ Copyright (c) 2020 - 2022                                               @
	// @*************************************************************************@
	*/

SELECT COUNT(*) AS total FROM `<?php echo($data['t_notifs']); ?>`
	
	WHERE `recipient_id` = <?php echo($data['user_id']); ?>

	AND `status` = '0'

	AND `notifier_id` NOT IN (SELECT b.`profile_id` FROM `<?php echo($data['t_blocks']); ?>` b WHERE b.`user_id` = <?php echo($data['user_id']); ?>)