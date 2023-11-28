<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php bloginfo( 'template_url' ); ?>/assets/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#eee3d6">
        <meta name="msapplication-TileImage" content="<?php bloginfo( 'template_url' ); ?>/assets/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#eee3d6"> 
        
        <?php if ( !function_exists('yoast_breadcrumb') ) : ?>
            <title><?= wp_get_document_title(); ?></title>
        <?php endif; ?>
		<script>document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/, 'js');</script>
        <!-- Preload all fonts  -->
        <!-- <link rel="preload" href="<?= ''; //get_template_directory_uri(); ?>/assets/font/ModernEra-Medium.woff2" as="font" type="font/woff2" crossorigin> -->
		<!-- Critical CSS -->
        <style id="critical-css"><?= file_get_contents( get_template_directory() . '/critical.css'); ?></style>

        <link rel="preload" href="<?= get_template_directory_uri(); ?>/build/css/app.css?ver=<?= filemtime(get_template_directory() . '/build/css/app.css' ); ?>" as="style" type="text/css">
        <link rel="preload" href="<?= get_template_directory_uri(); ?>/build/js/app.js?ver=<?= filemtime(get_template_directory() . '/build/js/app.js' ); ?>" as="script" type="text/javascript">

        <?php
        // preload hero image
        $images = null;
        if ( have_rows('sections') ) {
            while ( have_rows('sections') ) {
                the_row();
                
                 if ( isset(get_sub_field(get_row_layout())['background_image']) ) {
                    $image = get_sub_field(get_row_layout())['background_image'];
                }
                else {
                    $image = false;
                }
                if ( $image && !empty($image['url']) ) $images[] = $image;
            }
        }

        if ( $images != null ) :
        ?>
        <?php foreach ( $images as $image ) : ?>
            <link rel="preload" fetchpriority="high" as="image" imagesrcset="<?= $image['url']; ?>.webp 1440w,
                    <?= $image['sizes']['1536x1536']; ?>.webp 1024w,
                    <?= $image['sizes']['large']; ?>.webp 600w,
                    <?= $image['sizes']['medium_large']; ?>.webp 320w" imagesizes="100vw">
        <?php endforeach; endif; ?>
        
        <?php wp_head() ?>
	</head>
	<body <?php body_class() ?>>