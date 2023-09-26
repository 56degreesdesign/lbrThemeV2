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
        <div class="col-start-2 col-span-10 -mx-3 flex justify-center">
            <img class="mb-11" src="<?php echo $logo['url'] ?>" alt="">
        </div>
        <?php endif ;?>
        <div class="col-start-2 col-span-3 flex justify-center items-center">
            <p class="text-center text-22 font-bold text-beige"><?php echo $content ?></p>
        </div>
        <?php if($link) : ?>
        <div class="col-start-10 col-span-2 flex items-center">
            <a class="uppercase underline text-22 font-bold text-beige" href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
        </div>
        <?php endif ;?>
    </div>
    <?php if ($bottom_img) : ?>
    <div class="absolute bottom-16 left-0 w-full pointer-events-none flex justify-center">
        <img src="<?php echo $bottom_img['url'] ?>" alt="">
    </div>
    <?php endif ;?>
</section>
<?php endif ;?>