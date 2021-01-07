<?php
/*
* The template for displaying single posts.
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

<div class="container-fluid post-main-content-area">

<div class="row post-row">
<?php if (is_active_sidebar('sidebar-1')) : ?>
<div class="col-md-9">
<?php else : ?>
<div class="col-md-12">
<?php endif; ?>
<div class="post-section">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php
$thumb_id = get_post_thumbnail_id(get_the_ID());
$alt = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
?>
<div class="post-image-div"><img alt="<?php echo esc_attr( $alt ); ?>" class="post-image" src="<?php echo esc_url(wp_get_attachment_url( get_post_thumbnail_id('') )); ?>"></div>
<div <?php post_class('post-content') ?> id="post-<?php the_ID(); ?>">
<?php the_content(''); ?>
</div>
<div class="clear-fix"></div>
<p class="post-author">
<?php the_author() ?>
<?php echo esc_html__( ' on ', 'valhalla'); ?>
<?php the_time(__('F j, Y', 'valhalla')) ?>
</p>
<?php if(has_tag()) : ?>
<?php
$tags = get_the_tags(get_the_ID());
foreach($tags as $tag){
echo '<a href="'.esc_url(get_tag_link($tag->term_id)).'" rel="tag" class="badge badge-primary post-tags-style">'.esc_attr($tag->name).'</a>&nbsp;';
} ?>
<?php endif; ?>
<?php echo wp_kses_post('<div class="post-pagination">'); 
wp_link_pages( array(
'before'      => wp_kses_post('<div class="post-page-links"><span class="post-page-links-title">' . __( 'Pages:', 'valhalla' ) . '</span>'),
'after'       => wp_kses_post('</div>'),
'link_before' => wp_kses_post('<span class="no">'),
'link_after'  => wp_kses_post('</span>'),
) );
echo wp_kses_post('</div>');
?>
<?php if ( comments_open() || get_comments_number() ) :
comments_template();
endif; ?>
<?php endwhile; else: ?>
<?php get_template_part( 'template-parts/404-template' ); ?>
<?php endif; ?>
</div>
</div>
<?php if (is_active_sidebar('sidebar-1')) : ?>
<div class="col-md-3">
<div class="post-sidebar">
<div id="sidebar">
<ul>
<?php dynamic_sidebar('sidebar-1'); ?>
</ul>
</div>
</div>
</div>
<?php endif; ?>
</div>
	
<div class="content-separator"></div>
	
</div>

<?php get_footer(); ?>