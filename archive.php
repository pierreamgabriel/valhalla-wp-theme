<?php
/**
 * The template for displaying archive pages.
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
        <div class="search-page-form">
            <?php get_search_form(); ?>
        </div>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title"><a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?></a></h5>
                <p class="card-text">
                    <?php the_excerpt(); ?>
                </p>

            </div>
        </div>
        <?php endwhile; ?>

        <div class="pages-navigation">
            <?php echo wp_kses_post(paginate_links()); ?>
        </div>

        <?php else : ?>

        <?php get_template_part( 'template-parts/404-template' ); ?>

        <?php endif; ?>
    </div>
    <div class="content-separator"></div>
</div>
<?php get_footer(); ?>