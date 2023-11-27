<?php
$section = $args['data'] ?? false;
$bg = $section['background_image'] ?? false;
$heading = $section['heading'] ?? false;
$subheading = $section['subheading'] ?? false;
$button = $section['button'] ?? false;
$mobile_image = $section['mobile_image'] ?? false;
?>
<?php if ($section) : ?>
<section class="flex items-center relative hero-height <?php echo ($mobile_image) ? '' : 'hero-height'; ?>">
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
    <div class="absolute bottom-24 left-0 w-full flex justify-center">
        <p class="uppercase text-14 max-w-[231px] md:max-w-[450px] font-bold text-beige text-center md:text-16 lg:text-17 lg:max-w-none">
            <?php echo $subheading ?>
        </p>
    </div>
      
    <?php endif ;?>
    <div class="absolute bottom-10 left-0 w-full pointer-events-none flex justify-center z-20">
        <a href="<?php echo $button['link']['url'] ?>" class="pointer-events-auto">
            <?php get_template_part('templates/partials/arrow-down', null, ['fill' => '#EEE3D6']); ?>
        </a>
    </div>

</section>
<?php endif ;?>