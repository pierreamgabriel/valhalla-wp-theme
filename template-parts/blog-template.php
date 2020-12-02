<?php
/**
 * Template part for displaying posts.
 *
 * @package Valhalla
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

<div class="main-content-area">
    <div class="container-fluid blog-grid">
        <div class="card-columns">
            <?php query_posts('post_type=post&post_status=publish&paged='. $paged); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div <?php post_class('card post-box') ?> id="post-
                <?php the_ID(); ?>">
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large', array('class' => 'card-img-top-blog')); ?></a>
                <?php endif; ?>
                <div class="card-body">
                    <h4><a class="card-title post-title" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?></a></h4>
                    <p class="card-text">
                        <?php echo esc_html__('Posted on','valhalla'); ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php echo the_time('F jS, Y');?></a>
                    </p>
                    <?php the_excerpt(); ?>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
        <div class="pages-navigation">
            <?php echo wp_kses_post(paginate_links()); ?>
        </div>
        <?php endif; wp_reset_query(); ?>
    </div>
    <div class="content-separator"></div>
</div>
<?php get_footer(); ?>