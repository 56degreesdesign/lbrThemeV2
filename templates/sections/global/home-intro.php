<?php
$section = $args['data'] ?? false;
$bg = $section['background_image'] ?? false;
$logo = $section['logo'] ?? false;
$content  = $section['content'] ?? false;
$link = $section['link'] ?? false;
$bottom_img = get_field('logo', 'option') ?? false;
 
?>
<?php if ($section) : ?>
<section class="h-screen flex items-center relative z-30">
    <?php  ?>

    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $bg, 'class' => 'w-full -z-10']); ?>
    <div class="container grid-layout">
        <?php if ($logo) : ?>
        <div class="col-span-full flex justify-center | lg:col-start-2 lg:col-span-10 lg:-mx-3">
            <img src="<?php echo $logo['url'] ?>" alt="">
        </div>
        <?php endif ;?>
    </div>
    <div class="absolute bottom-24 left-0 flex justify-center w-full">
        <h1 class="text-center txt-h2 text-beige">Welcome to <br> Lionsback Resort</h1>
    </div>
        <div class="absolute bottom-10 left-0 w-full pointer-events-none flex justify-center z-20">
            <a href="<?php echo $link['url'] ?>" class="pointer-events-auto">
                <?php get_template_part('templates/partials/arrow-down', null, ['fill' => '#EEE3D6']); ?>
            </a>
        </div>
    <div class="w-full absolute bottom-10 left-0">
        <div class="container w-full pointer-events-none flex justify-end">
            <a href="/casita-rentals" class="bg-beige rounded-full px-10 pointer-events-auto uppercase font-bold text-14 pt-2.5 pb-2 leading-1.33">
                Book now
            </a>
        </div>
    </div>
</section>
<?php endif ;?>