<?php
$section = $args['data'] ?? false;
$bg = $section['background_image'] ?? false;
$heading = $section['heading'] ?? false;
$subheading = $section['subheading'] ?? false;
$button = $section['button'] ?? false;
?>
<?php if ($section) : ?>
<section class="min-h-screen flex items-center relative">
    <div class="absolute top-0 left-0 w-full">
        <?php get_template_part('templates/partials/navbar', null, ['colour' => 'white']) ?>
    </div>
 
    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $bg, 'class' => 'w-full -z-10']); ?>
    <div class="absolute-full white-to-orange -z-10  mix-blend-darken hidden"></div>
    <div class="container grid-layout">
        <?php if($heading) :?>
             <h1 class="col-span-full txt-h2 text-center leading-none text-beige mb-12">
                 <?php echo $heading ?>
             </h1>
        <?php endif ;?>
    
    </div>
    <?php if($subheading) : ?>
        <p class="absolute bottom-32 left-0 w-full uppercase text-14 font-bold text-beige text-center md:text-16 lg:text-17">
            <?php echo $subheading ?>
        </p>
    <?php endif ;?>
    <div class="absolute bottom-10 left-0 w-full pointer-events-none flex justify-center">
        <a href="#testing" class="pointer-events-auto">
            <?php get_template_part('templates/partials/arrow-down', null, ['fill' => '#EEE3D6']); ?>
        </a>
    </div>
    <div class="w-full absolute bottom-10 left-0">
        <div class="container w-full pointer-events-none flex justify-end">
            <?php get_template_part( 'templates/partials/button', null, ['data' => $button, 'class' => ''] ) ?>
        </div>
    </div>
</section>
<?php endif ;?>