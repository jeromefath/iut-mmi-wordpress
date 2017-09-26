<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name');?></title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <h1>Titre du site : <?php bloginfo( 'name' ); ?></h1>
        <nav>
            <?php wp_page_menu('show_home=1'); ?>
        </nav>
    </header>