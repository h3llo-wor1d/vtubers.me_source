	/*
	// @*************************************************************************@
	// @ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)            @
	// @ Copyright (c) 2020 - 2022                                               @
	// @*************************************************************************@
	*/

SELECT c.`id` AS offset_id, u.`id`, u.`about`, u.`followers`, u.`website`, u.`following`, u.`posts`, u.`avatar`, u.`last_active`, u.`country_id`, u.`username`, u.`fname`, u.`lname`, u.`email`, u.`verified`, u.`follow_privacy` FROM `<?php echo($data['t_conns']); ?>` c
	
	INNER JOIN `<?php echo($data['t_users']); ?>` u ON c.`follower_id` = u.`id`

	WHERE c.`following_id` = "<?php echo($data['user_id']); ?>"

	AND c.`status` = "active"

	AND u.`active` IN ('1', '2')

	<?php if($data['offset']): ?>
		AND c.`id` < <?php echo($data['offset']); ?>
	<?php endif; ?>

	ORDER BY c.`id` DESC, u.`followers` DESC, u.`posts` DESC

<?php if(not_empty($data['limit'])): ?>
	LIMIT <?php echo($data['limit']); ?>;
<?php endif; ?>