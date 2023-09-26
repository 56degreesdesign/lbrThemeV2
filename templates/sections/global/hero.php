<?php
$section = $args['data'] ?? false;
$bg = $section['background_image'] ?? false;
$heading = $section['heading'] ?? false;
$subheading = $section['subheading'] ?? false;

?>

<?php if ($section) : ?>
<section class="h-screen flex items-center relative">
    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $bg, 'class' => 'w-full -z-10']); ?>
    <div class="absolute-full white-to-orange -z-10  mix-blend-darken"></div>
    <div class="container grid-layout">
     <h1 class="col-span-full txt-h2 leading-none text-beige mb-12">
         <?php echo $heading ?>
     </h1>
        <p class="col-start-4 col-span-6 uppercase text-17 font-bold text-beige text-center"><?php echo $subheading ?></p>
    </div>
    <div class="absolute bottom-16 left-0 w-full pointer-events-none flex justify-center">
        <?php get_template_part('templates/partials/arrow-down', null, ['fill' => '#EEE3D6']); ?>
    </div>
</section>
<?php endif ;?>