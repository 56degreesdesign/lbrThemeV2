<?php
$section = $args['data'] ?? false;
$bg = $section['background_image'] ?? false;
$logo = $section['logo'] ?? false;
$content  = $section['content'] ?? false;
$link = $section['link'] ?? false;
$bottom_img = get_field('logo', 'option') ?? false;
 
?>
<?php if ($section) : ?>
<section class="hero-height flex items-start lg:items-center relative z-10">
    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $bg, 'class' => 'w-full -z-10']); ?>
    <div class="container grid-layout mt-8 lg:mt-0">
        <?php if ($logo) : ?>
        <div class="col-span-full flex justify-center | lg:col-start-2 lg:col-span-10 lg:-mx-3">
            <img src="<?php echo $logo['url'] ?>" alt="">
        </div>
        <?php endif ;?>
    </div>
    <div class="absolute bottom-24 left-0 flex justify-center w-full">
        <h1 class="text-center txt-h2 text-beige">Welcome<br class="lg:hidden"> to <br> Lionsback <br class="lg:hidden"> Resort</h1>
    </div>
    <div class="absolute bottom-8 md:bottom-9 lg:bottom-10 left-0 w-full pointer-events-none flex justify-center z-20">
        <a href="<?php echo $link['url'] ?>" class="pointer-events-auto">
            <?php get_template_part('templates/partials/arrow-down', null, ['fill' => '#EEE3D6']); ?>
        </a>
    </div>
<!--    <div class="absolute z-1 h-[calc(100%+80px)] -top-20 w-full left-0">-->
<!--        <div class="h-full"></div>-->
<!--        <div class="sticky bottom-10">-->
<!--            <div class="container w-full flex justify-end">-->
<!--                --><?php //get_template_part('templates/partials/book-now-btn', null, ['class' => 'btn--beige-light']); ?>
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</section>
<?php endif ;?>