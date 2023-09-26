<?php 
$section = $args['data'] ?? false;
$big_img = $section['big_image'] ?? false;
$small_img = $section['small_image'] ?? false;
$label = $section['label'] ?? false;
$content = $section['content'] ?? false;
?>
<?php if ($section) : ?>
<section class="bg-beige pt-24">
    <div class="max-w-[1920px] mx-auto grid grid-cols-2">
        <div class="col-span-1">
            <div class="relative pb-[125%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $big_img, 'class' => 'w-full']); ?>
            </div>
        </div>
        <div class="col-span-1 flex flex-col items-center">
            <div class="ml-auto w-[58.22916%]">
                <div class="w-full relative pb-[64.93%]">
                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $small_img, 'class' => 'w-full']); ?>
                </div>
            </div>
            <div class="h-full flex flex-col justify-center items-center">
                <p class="w-1/2 text-center text-orange text-15 font-bold mb-7 uppercase"><?php echo $label ?></p>
                <p class="w-1/2 text-center text-17"><?php echo $content ?></p>
            </div>
        </div>
    </div>
</section>
<?php endif ;?>
