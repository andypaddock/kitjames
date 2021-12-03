<section class="faq-block">
    <div class="row">
        <div class="col w50 toggle-block">


            <?php if( have_rows('faq_item') ): 
                     while ( have_rows('faq_item') ) : the_row(); ?>

            <div class="item">

                <label class="collapsed">

                    <h3 class="heading"><span
                            class="highlight-letter"><?php the_sub_field('letter'); ?></span><?php the_sub_field('title'); ?>
                    </h3>
                    <span class="arrow"><span></span><span></span></span>
                </label>
                <div class="content mb2">
                    <?php the_sub_field('description'); ?>
                </div>

            </div>

            <?php $count++; endwhile; endif; ?>


        </div>
    </div>
</section>