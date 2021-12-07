<?php
/**
 * The template for displaying all single posts
 *
 * @package kitjames
 */
get_header(); ?>
<span id="content"></span>
<?php if( have_rows('main_page_elements') ): ?>
<?php while( have_rows('main_page_elements') ): the_row(); ?>
<?php if( get_row_layout() == 'faq_blocks' ): ?>
<?php get_template_part('template-parts/faqblock');?>
<?php elseif( get_row_layout() == 'text_blocks' ):?>
<?php get_template_part('template-parts/text');?>
<?php elseif( get_row_layout() == 'more_text' ):?>
<?php get_template_part('template-parts/moretext');?>
<?php elseif( get_row_layout() == 'tabbed' ):?>
<?php get_template_part('template-parts/tabs');?>
<?php elseif( get_row_layout() == 'section_title' ):?>
<?php get_template_part('template-parts/title');?>
<?php elseif( get_row_layout() == 'feature_boxes' ):?>
<?php get_template_part('template-parts/boxes');?>
<?php elseif( get_row_layout() == 'testimonial_block' ):?>
<?php get_template_part('template-parts/testimonial_block');?>
<?php elseif( get_row_layout() == 'testimonial_slider' ):?>
<?php get_template_part('template-parts/testimonial');?>
<?php elseif( get_row_layout() == 'boxedcontent' ):?>
<?php get_template_part('template-parts/boxedcontent');?>
<?php elseif( get_row_layout() == 'contact_links' ):?>
<?php get_template_part('template-parts/links');?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>