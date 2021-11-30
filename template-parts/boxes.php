<section class="section-features">
    <div class="row">
        <?php 
$row = get_sub_field('boxed_info', $post->ID);
if($row < 1) {
 $rows = 0;
} else {
 $rows = count($row);
} ?>
        <?php if( have_rows('boxed_info') ): ?>
        <?php while( have_rows('boxed_info') ): the_row(); ?>
        <div class="col-1-of-<?php echo $rows ; ?>">
            <div class="feature-box">
                <i class="feature-box__icon icon-basic-world"></i>
                <h3 class="heading-tertiary u-margin-bottom-small"><?php the_sub_field('title'); ?></h3>
                <?php the_sub_field('sub_title'); ?>
            </div>
        </div>
        <?php endwhile; ?>

        <?php endif; ?>



    </div>
</section>