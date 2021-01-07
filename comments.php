<?php
/*
* The template for displaying comments.
*
* @package Valhalla
* @subpackage Templates
*/

// Do not allow directly accessing this file.

if ( ! defined( 'ABSPATH' ) ) {
exit( 'Direct script access denied.' );
}
?>

<div id="comments" class="comments-area">

<?php if ( have_comments() ) : ?>
<h4 class="comments-title">
<?php echo esc_html__( 'Comments', 'valhalla' ); ?>
</h4>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
<h5 class="screen-reader-text">
<?php echo esc_html__( 'Comment navigation', 'valhalla' ); ?>
</h5>
<div class="nav-previous">
<?php previous_comments_link( esc_html__( 'Older Comments', 'valhalla' ) ); ?>
</div>
<div class="nav-next">
<?php next_comments_link( esc_html__( 'Newer Comments', 'valhalla' )  ); ?>
</div>
</nav>
<?php endif; ?>
<ol class="comment-list">
<?php
wp_list_comments( array(
'style'      => 'ol',
'short_ping' => true,
'avatar_size'=> 34,
) );
?>
</ol>
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
<h5 class="screen-reader-text">
<?php echo esc_html__( 'Comment navigation', 'valhalla' ); ?>
</h5>
<div class="nav-previous">
<?php previous_comments_link( esc_html__( 'Older Comments', 'valhalla' ) ); ?>
</div>
<div class="nav-next">
<?php next_comments_link( esc_html__( 'Newer Comments', 'valhalla' )  ); ?>
</div>
</nav>
<?php endif; ?>
<?php if ( ! comments_open() ) : ?>
<p class="no-comments">
<?php echo esc_html__( 'Comments are closed.', 'valhalla' ); ?>
</p>
<?php endif; ?>
<?php endif; ?>
	
<?php comment_form(); ?>

</div>