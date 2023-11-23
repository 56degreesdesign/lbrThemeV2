<?php 
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$heading = $section['heading'] ?? false;
$content = $section['content'] ?? false;
$button = $section['button'] ?? false;

?>
<?php if ($section) : ?>
<section class="bg-beige pt-14 lg:pt-20">
    <div class="max-w-[1920px] px-[25px] mx-auto grid grid-cols-2 md:px-10 lg:px-0 relative">
        <div class="col-span-full -mx-[25px] md:-mx-10 lg:mx-0 lg:col-span-1">
            <div class="w-full relative pb-[112.87%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
        </div>
        <div class="col-span-full mt-10 flex flex-col items-center justify-center md:mt-12 lg:mt-0 lg:col-span-1">
            <?php if($heading) :?>
                <h1 class="txt-h2 text-center mb-8 md:mb-10 lg:mb-14"><?php echo $heading ?></h1>
            <?php endif ;?>
            <?php if($content) :?>
                <p class="text-center text-17 lg:w-1/2"><?php echo $content ?></p>
            <?php endif ;?>
        </div>
    </div>
</section>
<?php endif ;?>
