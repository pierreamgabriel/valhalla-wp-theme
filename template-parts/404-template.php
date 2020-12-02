<?php
/**
 * Template part for displaying a 404 error message.
 *
 * @package Valhalla
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<div class="main-404">
    <span class="text-404">
        <?php echo esc_html__('404', 'valhalla'); ?></span><span class="icon-404"><i class="fas fa-exclamation-triangle"></i></span>
    <p class="not-found-404">
        <?php echo esc_html__('Page Not Found', 'valhalla'); ?>
    </p>
</div>