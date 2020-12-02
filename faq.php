<?php /* Template Name: FAQ */ ?>
<?php
/**
 * The Faq page template.
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

    <div class="container-fluid faq-section1">
        <div class="accordion" id="faq-accordion">
            <?php $settings = get_theme_mod( 'valhalla_faq_questions_add'); 
                  $question_id = 0;
            ?>
            <?php foreach( $settings as $setting ) : ?>
            <?php $question_id = $question_id + 1; ?>
            <div class="card faq-collapse-border">
                <div class="card-header faq-collapse-header" id="faq-heading<?php echo esc_attr( $question_id ); ?>">
                    <h5 class="mb-0 faq-collapse-button">
                        <button id="faq-button<?php echo esc_attr( $question_id ); ?>" class="btn btn-link faq-collapse-button" type="button" data-toggle="collapse" data-target="#faq-collapse<?php echo esc_attr( $question_id ); ?>" aria-expanded="false" aria-controls="faq-collapse<?php echo esc_attr( $question_id ); ?>">
                            <i class="fa fa-question-circle"></i>&nbsp;&nbsp;&nbsp;<?php echo esc_html( $setting['field1'] ); ?>
                        </button>
                    </h5>
                </div>

                <div id="faq-collapse<?php echo esc_attr( $question_id ); ?>" class="collapse" aria-labelledby="faq-heading<?php echo esc_attr( $question_id ); ?>" data-parent="#faq-accordion">
                    <div class="card-body faq-collapse-body">
                        <?php echo esc_html( $setting['field2'] ); ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="content-separator"></div>

</div>
<?php get_footer();?>