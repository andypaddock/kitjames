<?php
/**
 * The template for displaying the footer
 * @package kitjames
 */
?>


<footer class="footer">
    <?php $footerSwitch = get_field('footer_override');
            if ($footerSwitch == 'alternate'): ?>



    <?php elseif ($footerSwitch == 'main'):?>
    <?php $footerImage = get_field('footer_image','options'); ?>

    <div class="footer-hero" style="background-image: url(<?php echo $footerImage['url']; ?>)">
        <!-- <div class="footer__text-box">
            <h1 class="heading-secondary">
                <span class="heading-secondary--main"><?php the_field('footer_header','options'); ?></span>
                <span class="heading-secondary--sub"><?php the_field('footer_sub_header','options'); ?></span>
            </h1>
        </div>
        <div class="header__quote-box">
            <blockquote><?php the_field('quote'); ?></blockquote>
            <cite><?php the_field('cite'); ?></cite>
        </div> -->

    </div>
    <?php endif;?>

</footer>
<?php wp_footer(); ?>
</body>

</html>