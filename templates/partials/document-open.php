<!doctype html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport"
		      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
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


<!--        --><?php
//        // preload hero image
//        $images = null;
//        if ( have_rows('sections') ) {
//            while ( have_rows('sections') ) {
//                the_row();
//                if ( isset(get_sub_field(get_row_layout())['background_image']) ) {
//                    $image = get_sub_field(get_row_layout())['background_image'];
//                    var_dump($image);
//
//                }
//                else if ( isset(get_sub_field(get_row_layout())['image']) ) {
//                    $image = get_sub_field(get_row_layout())['image'];
//                    var_dump($image);
//                    
//                }
//                else {
//                    $image = false;
//                }
//
//                if ( $image && !empty($image['url']) ) $images[] = $image;
//            }
//        }
//
//        if ( $images != null ) :
//            ?>
<!--            --><?php //foreach ( $images as $image ) : ?>
<!--            <link rel="preload" fetchpriority="high" as="image" imagesrcset="--><?php //= $image['url']; ?><!--.webp 1440w,-->
<!--                    --><?php //= $image['sizes']['1536x1536']; ?><!--.webp 1024w,-->
<!--                    --><?php //= $image['sizes']['large']; ?><!--.webp 600w,-->
<!--                    --><?php //= $image['sizes']['medium_large']; ?><!--.webp 320w" imagesizes="100vw">-->
<!--        --><?php //endforeach; ?>
<!--        --><?php //endif; ?>
        
        <?php wp_head() ?>
	</head>
	<body <?php body_class() ?>>