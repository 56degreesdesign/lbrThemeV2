<?php
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$label = $section['label'] ?? false;
$content = $section['content'] ?? false;
$small_content = $section['small_content'] ?? false;

?>
<?php if($section) : ?>
    <section class="bg-beige">
        <div class="grid grid-cols-2 max-w-[1920px] mx-auto">
            <div class="col-span-full relative pb-[66%] | lg:col-span-1">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
            <div class="row-start-1 col-span-full relative px-[25px] mt-10 | lg:mt-0 lg:col-span-1 lg:pr-64">
                <div class="flex flex-col justify-between h-full | lg:pl-24 lg:pt-20">
                    <p class="text-17 mb-10 lg:mb-0"><?php echo $content ?></p>
                    <div class="small-content mb-10 lg:mb-0"><?php echo $small_content ?></div>
                </div>
                <div class="hidden lg:block absolute top-[60%] -left-2 rotate-90 text-15 font-bold text-orange"><?php echo $label?></div>
            </div>
        </div>
    </section>
<?php endif ;?>