<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp-TestExampleFlyFox
 */

get_header();
?>

	
    <main class="__container">
        <div class="main">
            <div data-aos="zoom-in" class="main__text">
                <p class="main__subtitle"><?php the_field('menu__link-subtitle'); ?></p>
                <h1 class="main__title"><?php the_field('menu__link-title'); ?></h1>
            </div>
            <div data-aos="fade-left" class="main__bg">
                <picture>
                    <source srcset="<?php the_field('main__bg-webp'); ?>" type="image/webp"><img src="<?php the_field('main__bg-png'); ?>"
                        alt="main_bg">
                </picture>
            </div>
        </div>
        <div class="category">
            <div tabindex="19" data-aos="fade-up" data-aos-duration="1500" class="category__item_1">
                <a href="#" class="category__button">
                    <picture>
                        <source
                            srcset="<?php the_field('category__img-mobile-png-1'); ?>, <?php the_field('category__img-mobile-webp-1'); ?>"
                            media="(max-width:767px)">
                        <img class="category__img" src="<?php the_field('category__img-desktop-png-1'); ?>"
                            srcset="<?php the_field('category__img-desktop-webp-1'); ?>" alt="item_category_1">
                    </picture>
                    <div class="category__bg-dark"></div>
                    <div class="category__title"><?php the_field('category-1'); ?></div>
                </a>
            </div>
            <div tabindex="20" data-aos="fade-up" data-aos-duration="2000" class="category__item_2">
                <a href="#" class="category__button">
                    <picture>
                        <source
                             srcset="<?php the_field('category__img-mobile-png-2'); ?>, <?php the_field('category__img-mobile-webp-2'); ?>"
                            media="(max-width:767px)">
                        <img class="category__img" src="<?php the_field('category__img-desktop-png-2'); ?>"
                            srcset="<?php the_field('category__img-desktop-webp-2'); ?>" alt="item_category_2">
                    </picture>
                    <div class="category__bg-dark"></div>
                    <div class="category__title"><?php the_field('category-2'); ?></div>
                </a>
            </div>
            <div tabindex="21" data-aos="fade-up" data-aos-duration="2500" class="category__item_3">
                <a href="#" class="category__button">
                    <picture>
                        <source
                            srcset="<?php the_field('category__img-mobile-png-3'); ?>, <?php the_field('category__img-mobile-webp-3'); ?>"
                            media="(max-width:767px)">
                        <img class="category__img" src="<?php the_field('category__img-desktop-png-3'); ?>"
                            srcset="<?php the_field('category__img-desktop-webp-3'); ?>" alt="item_category_3">
                    </picture>
                    <div class="category__bg-dark"></div>
                    <div class="category__title"><?php the_field('category-3'); ?></div>
                </a>
            </div>
            <div tabindex="22" data-aos="fade-up" data-aos-duration="3000" class="category__item_4">
                <a href="#" class="category__button">
                    <picture>
                        <source
                            srcset="<?php the_field('category__img-mobile-png-4'); ?>, <?php the_field('category__img-mobile-webp-4'); ?>"
                            media="(max-width:767px)">
                        <img class="category__img" src="<?php the_field('category__img-desktop-png-4'); ?>"
                            srcset="<?php the_field('category__img-desktop-webp-4'); ?>" alt="item_category_4">
                    </picture>
                    <div class="category__bg-dark"></div>
                    <div class="category__title"><?php the_field('category-4'); ?></div>
                </a>
            </div>
        </div>
    </main>


    <!-- ======== AOS Script ======== -->
    <script src="<?php echo get_template_directory_uri(); ?>/plugins/aos/dist/aos.min.js"></script>

    <!-- ======== AOS Script Init ======== -->
    <script src="<?php echo get_template_directory_uri(); ?>/plugins/aos/js/aos_init.min.js"></script>

    <!-- ======== Main Script ======== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main_script.min.js"></script>
</body>

</html>

<?php
