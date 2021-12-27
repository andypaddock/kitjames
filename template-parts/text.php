<section class="section-text">
    <?php if (get_sub_field('text_block_header')):?>
    <div class="row centre-line w50">
        <div class="line"></div>
        <div></div>
    </div>
    <?php endif; ?>
    <div class="row w50">
        <?php if (get_sub_field('text_block_header')):?>
        <h2 class="heading-<?php the_sub_field('header_size'); ?>"><?php the_sub_field('text_block_header'); ?></h2>
        <?php endif; ?>
        <?php the_sub_field('paragraphs'); ?>

    </div>
</section>