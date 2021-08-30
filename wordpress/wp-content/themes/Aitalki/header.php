<?php
/* HEADER */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <title><?php wp_title( '|', true, 'right' ); bloginfo('title'); ?></title>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link  rel="icon"   href="<?php bloginfo('template_url') ?>/dist/img/favicon.png" type="image/png" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <meta name="description" content="<?php bloginfo( 'description' ); ?>">
    <meta name="author" content="Aitalki">

    <!-- CSS -->
    <link href="<?php bloginfo('template_url') ?>/dist/css/mobile.min.css" rel="stylesheet" media="all and (max-width: 767px)">
    <link href="<?php bloginfo('template_url') ?>/dist/css/tablet.min.css" rel="stylesheet" media="(min-width: 767px) and (max-width: 1199px)">
    <link href="<?php bloginfo('template_url') ?>/dist/css/desktop.min.css" rel="stylesheet" media="all and (min-width: 1199px)">
    <!-- End CSS -->

    <?php wp_head(); ?>
</head>
<header class="header">
    <div class="header__container">
        <div class="header__logo">
            <a href="<?= get_permalink(2); ?>">
                <img src="<?php bloginfo('template_url') ?>/dist/img/logo.png" alt="Aitalki Logo">
            </a>
        </div>
        <div class="header__menu">
            <div class="header__menu-icon">
                <img src="<?php bloginfo('template_url') ?>/dist/img/menu-icon.svg" alt="Menu">
            </div>
            <nav>
                <ul class="header__menu-ul">
                    <li class="header__menu-li">
                        <a href="<?= get_permalink(15); ?>" class="header__menu-a">
                            <p>Platform</p>
                        </a>
                    </li>
                    <li class="header__menu-li">
                        <a href="<?= get_permalink(18); ?>" class="header__menu-a">
                            <p>Plan</p>
                        </a>
                    </li>
                    <li class="header__menu-li">
                        <a href="<?= get_permalink(20); ?>" class="header__menu-a">
                            <p>Enterprise</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="header__buttons">
            <a href="#">
                <p>Iniciar sesión</p>
            </a>
            <a href="#" class="btn btn-blue">
                Crear cuenta
            </a>
        </div>
    </div>
</header>
<body>