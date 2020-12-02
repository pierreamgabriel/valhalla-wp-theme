<?php /* Template Name: Portfolio */ ?>
<?php
/**
 * The Portfolio page template.
 *
 * @package Valhalla
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<?php get_header('2'); ?>

<div class="main-content-area">

    <div class="container-fluid portfolio-section1">
        <div class="row justify-content-center">

            <?php $settings = get_theme_mod( 'valhalla_portfolio_add_items'); 
                          $image_id = 0;
                          $image_id2 = 0;
                    ?>
            <?php foreach( $settings as $setting ) : ?>
            <?php $image_id = $image_id + 1; ?>
            <div class="card portfolio-items-div mx-2 mb-3 justify-content-center">
                <img src="<?php echo esc_url(wp_get_attachment_url($setting['field1'])); ?>" class="card-img-top" alt="<?php echo esc_attr( $setting['field2'] ); ?>" data-toggle="modal" data-target="#image<?php echo esc_attr( $image_id ); ?>">
            </div>
            <?php endforeach; ?>

            <?php foreach( $settings as $setting ) : ?>
            <?php $image_id2 = $image_id2 + 1; ?>
            <div id="image<?php echo esc_attr( $image_id2 ); ?>" class="portfolio-modal modal">
                <div class="portfolio-modal-dialog modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">
                                <?php echo esc_html( $setting['field2'] ); ?>
                            </h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>
                                <?php echo esc_html( $setting['field3'] ); ?>
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">
                                <?php echo esc_html__('Close', 'valhalla'); ?></button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="content-separator"></div>
</div>
<?php get_footer();?>