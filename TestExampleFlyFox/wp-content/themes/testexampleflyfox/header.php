<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TestExampleFlyFox
 */

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Seniv Pavlo, https://github.com/PavloSeniv">
    <meta name="copyright" content="Seniv Pavlo">
    <title>MyExCar</title>

    <!-- ======== Іконка ico======== -->
    <link rel="icon" href="<?php the_field('logo'); ?>" type="image/png">

    <!-- ======== AOS style ======== -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/plugins/aos/dist/aos.min.css"> -->

    <!-- ======== Style ======== -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">
</head>

<body>

    <header class="header">
    <div class="header__container">
        <div class="header__block-logo">

            <button class="header__search" type="button">
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.867 18 18 14.867 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18ZM19.485 18.071L22.314 20.899L20.899 22.314L18.071 19.485L19.485 18.071Z"
                        fill="black" />
                </svg>
            </button>
            <a class="header__logo" href="index.html">
                <picture>
                    <source
                        srcset="img/index/header/header_logo_mobile.png, img/index/header/header_logo_mobile.webp, img/index/header/header_logo_mobile.svg"
                        media="(max-width:767px)">
                    <img src="img/index/header/header_logo_desktop.png"
                        srcset="img/index/header/header_logo_desktop.webp, img/index/header/header_logo_desktop.svg"
                        alt="header_logo_desktop">
                </picture>
            </a>
            <a class="header__logo-mobile-title" href=" index.html">Menu</a>
            <div class="header__menu menu">
                <div class="menu__icon">
                    <span></span>
                </div>
            </div>
        </div>

        <div class="header__block-nav">

            <nav class="menu__body">
                <ul class="menu__list">
                    <li class="menu__list-link menu__list-link-1"><a class="menu__link" href="#"><?php the_field('menu_link-1'); ?></a></li>
                    <li class="menu__list-link menu__list-link-2"><a class="menu__link" href="#">ABOUT US</a></li>
                    <li class="menu__list-link menu__list-link-3"><a class="menu__link" href="#">SPECIALS</a></li>
                    <li class="menu__list-link menu__list-link-4"><a class="menu__link" href="#">Used Cars</a></li>
                    <li class="menu__list-link menu__list-link-5"><a class="menu__link" href="#">SERVICES</a></li>
                    <li class="menu__list-link menu__list-link-6"><a class="menu__link" href="#">APPLICATIONS</a></li>
                    <li class="menu__list-link menu__list-link-7"><a class="menu__link" href="#">AUCTION</a></li>
                    <li class="menu__list-link menu__list-link-8"><a class="menu__link" href="#">CONTACT US</a></li>
                    <li class="menu__list-line menu__list-link-9">
                        <div class="menu__line"></div>
                    </li>
                    <li class="menu__list-link-16"><a class="menu__link menu__lang-eng" href="">Eng</a>|<a class="menu__link menu__lang-ru" href="">Ru</a></li>
                    <li class="menu__list-link-10"><a class="menu__link menu__login" href="#">Log in</a></li>
                    <li class="menu__list-link-11"><a class="menu__link menu__sign-up" href="#">Registration</a></li>
                    <li class="menu__list-link-12 menu__list-input">
                        <input class="menu__input" type="text" placeholder="Start searching">
                        <button class="menu__list-input-search">
                            <svg width="24" height="24" viewbox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M11 2C15.968 2 20 6.032 20 11C20 15.968 15.968 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2ZM11 18C14.867 18 18 14.867 18 11C18 7.132 14.867 4 11 4C7.132 4 4 7.132 4 11C4 14.867 7.132 18 11 18ZM19.485 18.071L22.314 20.899L20.899 22.314L18.071 19.485L19.485 18.071Z"
                                    fill="black" />
                            </svg>
                        </button>
                    </li>
                    <li class="menu__list-link-13">
                        <a class="menu__link-tel" href="tel:999 888 77 66">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 13.42V16.956C18.0001 17.2092 17.9042 17.453 17.7316 17.6382C17.559 17.8234 17.3226 17.9363 17.07 17.954C16.633 17.984 16.276 18 16 18C7.163 18 0 10.837 0 2C0 1.724 0.015 1.367 0.046 0.93C0.0637224 0.677444 0.176581 0.441011 0.361804 0.268409C0.547026 0.0958068 0.790823 -0.000114433 1.044 2.56579e-07H4.58C4.70404 -0.000125334 4.8237 0.045859 4.91573 0.12902C5.00776 0.212182 5.0656 0.326583 5.078 0.45C5.101 0.68 5.122 0.863 5.142 1.002C5.34073 2.38892 5.748 3.73783 6.35 5.003C6.445 5.203 6.383 5.442 6.203 5.57L4.045 7.112C5.36445 10.1865 7.81455 12.6365 10.889 13.956L12.429 11.802C12.4919 11.714 12.5838 11.6509 12.6885 11.6237C12.7932 11.5964 12.9042 11.6068 13.002 11.653C14.267 12.2539 15.6156 12.6601 17.002 12.858C17.141 12.878 17.324 12.9 17.552 12.922C17.6752 12.9346 17.7894 12.9926 17.8724 13.0846C17.9553 13.1766 18.0012 13.2961 18.001 13.42H18Z"
                                    fill="black" />
                            </svg>
                            999 888 77 66
                        </a>
                    </li>
                    <li class="menu__list-link-14">
                        <button class="menu__button-1">
                            <p class="button__title-1">Used Cars</p>
                        </button>
                    </li>
                    <li class="menu__list-link-15">
                        <button class="menu__button-2">
                            <p class="button__title-2">Sell Your Car</p>
                        </button>
                    </li>
                </ul>

            </nav>
        </div>
    </div>
</header>