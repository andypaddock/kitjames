<?php
/**
 * The template for displaying all single posts
 *
 * @package kitjames
 */
get_header(); ?>

<main>




    <section class="section-boxed-links">
        <div class="row w80">
            <div class="col">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-world"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Meet nature</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                    </p>
                </div>
            </div>
            <div class="col">
                <div class="feature-box">
                    <i class="feature-box__icon icon-basic-map"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam, ipsum sapiente aspernatur.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <?php if( have_rows('main_page_elements') ): ?>
    <?php while( have_rows('main_page_elements') ): the_row(); ?>
    <?php if( get_row_layout() == 'faq_blocks' ): ?>
    <?php get_template_part('template-parts/faqblock');?>
    <?php elseif( get_row_layout() == 'text_blocks' ):?>
    <?php get_template_part('template-parts/text');?>
    <?php elseif( get_row_layout() == 'tabbed' ):?>
    <?php get_template_part('template-parts/tabs');?>
    <?php elseif( get_row_layout() == 'section_title' ):?>
    <?php get_template_part('template-parts/title');?>
    <?php elseif( get_row_layout() == 'feature_boxes' ):?>
    <?php get_template_part('template-parts/boxes');?>
    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>










</main>

<?php get_footer(); ?>