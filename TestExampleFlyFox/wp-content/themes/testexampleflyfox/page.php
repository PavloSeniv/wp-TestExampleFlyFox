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
 * @package TestExampleFlyFox
 */

get_header();
?>

	<main class="__container">
        <div class="main">
            <div class="main__text">
                <p class="main__subtitle">we offer </p>
                <h1 class="main__title">reliable and favorable conditions</h1>
            </div>
            <div class="main__bg">
                <picture><source srcset="img/index/main/main_bg.webp" type="image/webp"><img src="img/index/main/main_bg.png" alt="main_bg"></picture>
            </div>
        </div>
        <div class="category">
            <div class="category__item_1">
                <a href="#" class="category__button">
                    <picture><source srcset="img/index/main/item_category_1.webp" type="image/webp"><img class="category__img" src="img/index/main/item_category_1.png" alt="item_category_1"></picture>
                    <div class="category__title">Buy</div>
                </a>
            </div>
            <div class="category__item_2">
                <a href="#" class="category__button">
                    <picture><source srcset="img/index/main/item_category_2.webp" type="image/webp"><img class="category__img" src="img/index/main/item_category_2.png" alt="item_category_2"></picture>
                    <div class="category__title">Sell</div>
                </a>
            </div>
            <div class="category__item_3">
                <a href="#" class="category__button">
                    <picture><source srcset="img/index/main/item_category_3.webp" type="image/webp"><img class="category__img" src="img/index/main/item_category_3.png" alt="item_category_3"></picture>
                    <div class="category__title">Leasing</div>
                </a>
            </div>
            <div class="category__item_4">
                <a href="#" class="category__button">
                    <picture><source srcset="img/index/main/item_category_4.webp" type="image/webp"><img class="category__img" src="img/index/main/item_category_4.png" alt="item_category_4"></picture>
                    <div class="category__title">Auction</div>
                </a>
            </div>
        </div>
    </main>


    <!-- ======== AOS Script ======== -->
    <!-- <script src="plugins/aos/dist/aos.min.js"></script> -->

    <!-- ======== AOS Script Init ======== -->
    <!-- <script src="plugins/aos/js/aos_init.min.js"></script> -->

    <!-- ======== Anime Script  ======== -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/animejs@3.0.1/lib/anime.min.js"></script> -->

    <!-- ======== Anime Script Init ======== -->
    <!-- <script src="plugins/anime/anime_init.js"></script> -->

    <!-- ======== Main Script ======== -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/main_script.min.js"></script>
</body>

</html>

<?php
