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
            <div class="col-span-1 relative pb-[66%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
            <div class="col-span-1 pr-64 relative">
                <div class="pl-24 pt-20 flex flex-col justify-between h-full">
                    <p class="text-17"><?php echo $content ?></p>
                    <div class="small-content"><?php echo $small_content ?></div>
                </div>
                <div class="absolute top-[60%] -left-2 rotate-90 text-15 font-bold text-orange"><?php echo $label?></div>
            </div>
        </div>
    </section>
<?php endif ;?>