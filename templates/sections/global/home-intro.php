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

    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $bg, 'class' => 'w-full -z-10']); ?>
    <div class="container grid-layout">
        <?php if ($logo) : ?>
        <div class="col-span-full flex justify-center | lg:col-start-2 lg:col-span-10 lg:-mx-3">
            <img class="mb-11" src="<?php echo $logo['url'] ?>" alt="">
        </div>
        <?php endif ;?>
        <div class="col-span-full flex justify-center items-center mb-5 | lg:col-start-2 lg:col-span-3 lg:mb-0">
            <p class="text-center txt-2 font-bold text-beige"><?php echo $content ?></p>
        </div>
        <?php if($link) : ?>
        <div class="col-span-full flex justify-center items-center lg:col-start-10 lg:col-span-2">
            <a class="uppercase underline-animation txt-2 font-bold text-beige" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
        </div>
        <?php endif ;?>
    </div>
    <?php if ($bottom_img) : ?>
    <div class="absolute bottom-16 left-0 w-full flex justify-center">
        <a href="<?php echo $link['url'] ?>">
            <img src="<?php echo $bottom_img['url'] ?>" alt="">

        </a>
    </div>
    <?php endif ;?>
</section>
<?php endif ;?>