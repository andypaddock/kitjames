<section class="testimonial-slider">
    <div class="row">
        <div class="owl-carousel owl-theme testimonial-carousel">
            <?php
$loop = new WP_Query(
    array(
        'post_type' => 'testimonial', // This is the name of your post type - change this as required,
        'posts_per_page' => -1,
        'meta_key' => 'testimonial_type',
        'meta_value' => 'text'
    )
);
while ( $loop->have_posts() ) : $loop->the_post();
$mainImage = get_the_post_thumbnail_url(get_the_ID(),'large');
// The content you want to loop goes in here:
?>

            <div class="quote">
                <?php get_template_part("inc/img/quote"); ?>
                <p class="copy"><?php the_field('text_content');?></p>
                <p class="attrib"><?php the_title(); ?></p>

            </div>

            <?php endwhile;
wp_reset_postdata();
?>
        </div>
    </div>
</section>