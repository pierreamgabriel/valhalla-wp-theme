<?php
/**
 * The template for displaying all pages.
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
    <div class="container-fluid page-section1">
        <div class="page-content">
            <?php  while ( have_posts() ) : the_post(); ?>
            <?php the_content();?>
            <?php endwhile; ?>
        </div>
        <div class="clear-fix"></div>
        <?php if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif; ?>
        <?php echo wp_kses_post('<div class="pages-navigation">'); 
    wp_link_pages( array(
     'before'      => wp_kses_post('<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'valhalla' ) . '</span>'),
     'after'       => wp_kses_post('</div>'),
     'link_before' => wp_kses_post('<span class="no">'),
     'link_after'  => wp_kses_post('</span>'),
   ) );
		echo wp_kses_post('</div>');
?>
    </div>
    <div class="content-separator"></div>
</div>

<?php get_footer();?>