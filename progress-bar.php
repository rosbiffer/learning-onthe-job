<?php
/**
 * Displays the campaign progress bar.
 *
 * Override this template by copying it to yourtheme/charitable/campaign/progress-bar.php
 *
 * @author  Studio 164a
 * @package Charitable/Templates/Campaign Page
 * @since   1.0.0
 * @version 1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$campaign = $view_args['campaign'];

if ( ! $campaign->has_goal() ) :
	return;
endif;
$progress_raw = 100 * ( $campaign->get_donated_amount( true ) + charitable_gift_aid_get_campaign_gift_aid_total( $campaign ) ) / $campaign->get_goal();

?>
<div class="campaign-progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="<?php echo $progress_raw; ?>"><span class="bar" style="width: <?php echo $progress_raw ?>%;"></span></div>
