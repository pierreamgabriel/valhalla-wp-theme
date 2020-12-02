<?php
/**
 * The template for displaying category pages.
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
    <div class="container-fluid widget-page-section1">
        <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Permanent Link to %s', 'valhalla'), the_title_attribute())?>">
                        <?php the_title(); ?></a></h2>
                <small>
                    <?php the_time(__('F jS, Y', 'valhalla')) ?>
                    <?php echo esc_html__('by', 'valhalla'); ?>
                    <?php the_author_posts_link() ?></small>
                <?php the_excerpt(); ?>
                <p class="postmetadata">
                    <?php comments_popup_link(__('No comments yet', 'valhalla'), __('1 comment', 'valhalla'), __('% comments', 'valhalla'), 'comments-link', __('Comments closed','valhalla')); ?>
                </p>
            </div>
        </div>
        <?php endwhile; ?>
        <div class="pages-navigation">
            <?php echo wp_kses_post(paginate_links()); ?>
        </div>
        <?php else: ?>
        <?php get_template_part( 'template-parts/404-template' ); ?>
        <?php endif; ?>
    </div>
    <div class="content-separator"></div>
</div>

<?php get_footer(); ?>