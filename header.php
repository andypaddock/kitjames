<?php
/**
 * Header
 *
 * @package kitjames
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-T6MQBJV');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/98edb62204.js" crossorigin="anonymous" defer="defer"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6MQBJV" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="nav-right visible-xs">
        <div class="navbutton" id="btn">
            <div class="bar top"></div>
            <div class="bar middle"></div>
            <div class="bar bottom"></div>
        </div>
    </div>

    <main>
        <div class="logo-mobile"><a href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a></div>
        <menu>
            <?wp_nav_menu( array( 
                        'theme_location' => 'main-menu',
                        'container_class' => 'header-menu row'
                        // 'menu_class' => 'header-menu',
    //                     'list_item_class'  => 'sidebar-item',
    // 'link_class'   => 'sidebar-anchor'
                    ) ); ?>
        </menu>
        <nav>
            <!-- nav-right -->

            <div class="nav-right hidden-xs">
                <div class="navbutton" id="btn">
                    <div class="bar top"></div>
                    <div class="bar middle"></div>
                    <div class="bar bottom"></div>
                </div>
            </div>


        </nav>

        <header class="header <?php the_field('hero_section_size'); ?>">

            <?php if (is_single()):?>
            <?php get_template_part('template-parts/posthero');?>
            <?php else:?>
            <?php get_template_part('template-parts/hero');?>
            <?php endif; ?>
        </header>

        <!--closes in footer.php-->