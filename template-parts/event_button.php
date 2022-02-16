<section class="section-eventbutton">
    <div class="row <?php the_sub_field('column_size'); ?>">
        <?php if( have_rows('event_links') ): ?>
        <?php while( have_rows('event_links') ): the_row();?>

        <?php 
        $date = get_sub_field('event_date');
        $now = date('Ymd');
$link = get_sub_field('event_link');
if( $date >= $now ): 
    $link_url = $link['url'];
    $link_title = $link['title'];
    $link_target = $link['target'] ? $link['target'] : '_self';
    ?>
        <a class="button button--event" href="<?php echo esc_url( $link_url ); ?>"
            target="<?php echo esc_attr( $link_target ); ?>"><?php the_sub_field('event_icon'); ?><?php echo esc_html( $link_title ); ?></a>
        <?php endif; ?>

        <?php endwhile; ?>
        <?php endif; ?>
    </div>

</section>