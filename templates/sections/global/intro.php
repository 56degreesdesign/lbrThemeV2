<?php
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$icon = $section['icon'] ?? false;
$image = $section['image'] ?? false;
$anchor = $section['anchor'] ?? false;
?>
<?php if($section) : ?>
    <section id="<?php echo $anchor?>" class="bg-beige ">
        <div class="grid grid-cols-2 max-w-[1920px] mx-auto relative">
            <div class="col-span-1 flex items-center justify-center">
                <h1 class="txt-h2"><?php echo $heading ?></h1>
            </div>
            <div class="col-span-1 relative pb-[66%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
            <div class="absolute -bottom-12 left-0 w-full flex justify-center z-20 pointer-events-none">
                <img class="" src="<?php echo $icon['url'] ?>" alt="">
            </div>
        </div>
    </section>
<?php endif ;?>