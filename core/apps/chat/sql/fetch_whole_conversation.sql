/*
@*************************************************************************@
@ ColibriSM (Mansur_TL)	 vTubers.Me L.C. (Jeremiah B./nekoli)            @
@ Copyright (c) 2020 - 2022                                               @
@*************************************************************************@
*/

SELECT * FROM `<?php echo($data['t_msgs']); ?>` 

	WHERE ((`sent_by` = <?php echo($data['user_one']); ?> AND `sent_to` = <?php echo($data['user_two']); ?> AND `deleted_fs1` = 'N') OR (`sent_to` = <?php echo($data['user_one']); ?> AND `sent_by` = <?php echo($data['user_two']); ?> AND `deleted_fs2` = 'N'))

ORDER BY `id` <?php echo($data['order']); ?>;