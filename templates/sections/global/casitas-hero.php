<?php 
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$background_image = $section['background_image'] ?? false;
$location = $section['location'] ?? false;
$button = $section['button'] ?? false;
?>

<?php if ($section) : ?>
    <section class="flex items-end relative z-30 min-h-screen">
        <div class="absolute top-0 left-0 w-full">
            <?php get_template_part('templates/partials/navbar', null, ['colour' => 'white']) ?>
        </div>
        
        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $background_image, 'class' => 'w-full -z-10']); ?>
        <div class="container grid-layout">
                <div class="col-span-full flex justify-center lg:col-start-2 lg:col-span-10">
                    <?php if($heading) : ?>
                        <h1 class="txt-h1 text-beige mb-24"><?php echo $heading ?></h1>
                    <?php endif ;?>
                </div>
        </div>
        <div class="absolute bottom-10 left-0 w-full pointer-events-none flex justify-center">
            <a href="#casitas-explore" class="pointer-events-auto">
                <?php get_template_part('templates/partials/nav-arrow', null, ['fill' => '#EEE3D6', 'class' => 'rotate-90']); ?>
            </a>
        </div>
<!--        <div class="absolute bottom-[35%] xl:bottom-[43.43%] left-0 w-full hidden lg:block">-->
<!--            <div class="container grid-layout max-w-[1920px] mx-auto">-->
<!--                <div class="col-start-1 col-span-3 flex gap-x-20 2xl:gap-x-64">-->
<!--                    --><?php //foreach ($location['north'] as $item) : ?>
<!--                        <span class="text-22 font-bold uppercase text-beige">--><?php //echo $item['label'] ?><!--</span>-->
<!--                    --><?php //endforeach ;?>
<!--                </div>-->
<!--                <div class="col-start-9 col-span-4 flex justify-end gap-x-20 2xl:gap-x-64">-->
<!--                    --><?php //foreach ($location['west'] as $item) : ?>
<!--                        <span class="text-22 font-bold uppercase text-beige">--><?php //echo $item['label'] ?><!--</span>-->
<!--                    --><?php //endforeach ;?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="w-full absolute bottom-10 left-0">
            <div class="container w-full pointer-events-none flex justify-end">
                <?php get_template_part( 'templates/partials/button', null, ['data' => $button, 'class' => ''] ) ?>
            </div>
        </div>
    </section>
<?php endif ;?>





