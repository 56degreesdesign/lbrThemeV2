<?php
$section = $args['data'] ?? false;
$bg = $section['background_image'] ?? false;
$heading = $section['heading'] ?? false;
$subheading = $section['subheading'] ?? false;
$button = $section['button'] ?? false;
$mobile_image = $section['mobile_image'] ?? false;
$bg_classes = null;

if ($mobile_image) {
    $bg_classes .= 'hidden lg:block w-full -z-10';
} else {
    $bg_classes .= ' w-full -z-10';
}
?>
<?php if ($section) : ?>
<section class="flex items-center relative <?php echo ($mobile_image) ? 'pb-[112.2%]' : 'hero-height'; ?> lg:pb-0 lg:h-screen">
    <div class="absolute top-0 left-0 w-full">
        <?php get_template_part('templates/partials/navbar', null, ['colour' => 'white']) ?>
    </div>
    <?php if ($mobile_image) : ?>
        <?php get_template_part('templates/partials/images/image', 'bg_preloaded', ['image' => $mobile_image, 'class' => 'w-full -z-10 mt-[65px] lg:hidden' ]); ?>
    <?php endif ;?>

    <?php get_template_part('templates/partials/images/image', 'bg_preloaded', ['image' => $bg, 'class' => $bg_classes]); ?>
    
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
    
  
        <div class="absolute bottom-10 left-0 w-full pointer-events-none justify-center z-20 <?php echo ($mobile_image) ? 'hidden' : 'flex'; ?> lg:flex">
            <a href="<?php echo $button['link']['url'] ?>" class="pointer-events-auto">
                <?php get_template_part('templates/partials/arrow-down', null, ['fill' => '#EEE3D6']); ?>
            </a>
        </div>
   

</section>
<?php endif ;?>