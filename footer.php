<?php
/**
 * The template for displaying the footer.
 *
 * @package Valhalla
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php wp_footer(); ?>

<div class="container-fluid footer">
    <div class="container-fluid footer-main-div">
        <div class="container-fluid section-footer">
            <div class="row">
                <div id="footer-about" class="col-md">
                    <p class="footer-headings">
                        <?php echo esc_html( get_theme_mod( 'valhalla_footer_about_heading') ); ?>
                    </p>
                    <p class="footer-text">
                        <?php echo esc_html( get_theme_mod( 'valhalla_footer_about_text') ); ?>
                    </p>
                </div>
                <div id="footer-contact" class="col-md">
                    <p class="footer-headings">
                        <?php echo esc_html( get_theme_mod( 'valhalla_footer_contact_heading') ); ?>
                    </p>
                    <p class="footer-text"><i id="footer-phone" class="fas fa-lg fa-phone footer-icons"></i>
                        <?php echo esc_html( get_theme_mod( 'valhalla_footer_contact_phone') ); ?>
                    </p>
                    <p class="footer-text"><i id="footer-whatsapp" class="fa fa-lg fa-whatsapp footer-icons"></i>
                        <?php echo esc_html( get_theme_mod( 'valhalla_footer_contact_whatsapp') ); ?>
                    </p>
                    <p class="footer-text"><i id="footer-email" class="fa fa-lg fa-at footer-icons"></i>
                        <?php echo esc_html( get_theme_mod( 'valhalla_footer_contact_email') ); ?>
                    </p>
                    <p class="footer-text"><i id="footer-address" class="fa fa-lg fa-location-arrow footer-icons"></i>
                        <?php echo esc_html( get_theme_mod( 'valhalla_footer_contact_address') ); ?>
                    </p>
                </div>
                <div id="footer-social" class="col-md">
                    <p class="footer-headings">
                        <?php echo esc_html( get_theme_mod( 'valhalla_footer_social_heading') ); ?>
                    </p>
                    <p class="footer-text"><a href="<?php echo esc_url( get_theme_mod( 'valhalla_footer_social_twitter') ); ?>"><i id="footer-twitter" class="fa fa-lg fa-twitter footer-icons"></i>&nbsp;Twitter</a></p>
                    <p class="footer-text"><a href="<?php echo esc_url( get_theme_mod( 'valhalla_footer_social_facebook') ); ?>"><i id="footer-facebook" class="fa fa-lg fa-facebook footer-icons"></i>&nbsp;Facebook</a></p>
                    <p class="footer-text"><a href="<?php echo esc_url( get_theme_mod( 'valhalla_footer_social_instagram') ); ?>"><i id="footer-instagram" class="fa fa-lg fa-instagram footer-icons"></i>&nbsp;Instagram</a></p>
                </div>
                <?php if (is_active_sidebar('sidebar-2')) : ?>
                <div id="footer-widget" class="col-md">
                    <div class="footer-sidebar">
                        <div id="sidebar">
                            <ul>
                                <?php dynamic_sidebar('sidebar-2'); ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer2">
    <div class="container-fluid section-footer">
        <p>©Copyright&nbsp;2020&nbsp;&nbsp;|&nbsp;&nbsp;Valhalla Theme
            <?php echo esc_html__('by', 'valhalla'); ?> Pierre Macedo&nbsp;&nbsp;|&nbsp;&nbsp;
            <?php echo esc_html__('All Rights Reserved', 'valhalla'); ?>
        </p>
    </div>
</div>
</body>

</html>