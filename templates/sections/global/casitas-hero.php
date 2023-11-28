<?php 
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$background_image = $section['background_image'] ?? false;
$location = $section['location'] ?? false;
$button = $section['button'] ?? false;
?>

<?php if ($section) : ?>
    <section class="hero-height flex items-end relative">
        <div class="absolute top-0 left-0 w-full">
            <?php get_template_part('templates/partials/navbar', null, ['colour' => 'white']) ?>
        </div>
        
        <?php get_template_part('templates/partials/images/image', 'bg_preloaded', ['image' => $background_image, 'class' => 'w-full -z-10']); ?>
        <div class="container grid-layout">
                <div class="col-span-full flex justify-center lg:col-start-2 lg:col-span-10">
                    <?php if($heading) : ?>
                        <h1 class="txt-h1 text-beige mb-24"><?php echo $heading ?></h1>
                    <?php endif ;?>
                </div>
        </div>
        <div class="absolute bottom-8 md:bottom-9 lg:bottom-10 left-0 w-full pointer-events-none flex justify-center">
            <a href="#casitas-explore" class="pointer-events-auto">
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





