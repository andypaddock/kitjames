<section class="testimonial-block" id="testimonial-section">

    <div class="row">
        <div class="controls">
            <ul>
                <?php $all_categories = get_terms( array(
  'taxonomy' => 'businesstype',
  'hide_empty' => true,
) );?>
                <li>Filter</li>
                <li type="button" data-filter="all">All</li>
                <?php foreach($all_categories as $category): ?>
                <li type="button" data-filter=".<?php echo $category->slug; ?>">
                    <?php echo $category->name; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>



        <div class="testimonial-grid">
            <?php
$loop = new WP_Query(
    array(
        'post_type' => 'testimonial', 
        'posts_per_page' => -1,
    )
);
$counter = 0;
while ( $loop->have_posts() ) : $loop->the_post();
$mainImage = get_the_post_thumbnail_url(get_the_ID(),'large');
$counter++;

?>
            <?php $terms = wp_get_post_terms( $post->ID, 'businesstype' ); ?>

            <div class="mix quote <?php foreach( $terms as $term ) echo ' ' . $term->slug; ?>">
                <a class="pop-link" href="#popup<?php echo ($counter); ?>">
                    <div class="test-image" style="background-image: url(<?php echo $mainImage; ?>)">

                        <?php get_template_part("inc/img/play"); ?>

                    </div>
                </a>
                <h2 class="heading-highlight"><?php the_title(); ?></h2>
                <div class="popup" id="popup<?php echo ($counter); ?>">
                    <div class="popup__content">
                        <div class="popup__left">
                            <img src="img/nat-8.jpg" alt="Tour photo" class="popup__img">
                            <img src="img/nat-9.jpg" alt="Tour photo" class="popup__img">
                        </div>
                        <div class="popup__right">
                            <a href="#testimonial-section" class="popup__close">&times;</a>
                            <h2 class="heading-secondary u-margin-bottom-small"><?php the_title(); ?></h2>
                            <p class="popup__text">
                                <?php the_field('text_content');?>
                            </p>
                            <a href="#" class="btn btn--green">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile;
wp_reset_postdata();
?>
        </div>

    </div>

</section>