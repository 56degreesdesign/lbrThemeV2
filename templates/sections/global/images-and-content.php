<?php 
$section = $args['data'] ?? false;
$big_img = $section['big_image'] ?? false;
$small_img = $section['small_image'] ?? false;
$label = $section['label'] ?? false;
$content = $section['content'] ?? false;
?>
<?php if ($section) : ?>
<section class="bg-beige pt-10 md:pt-14 lg:pt-20 xl:pt-24">
    <div class="max-w-[1920px] mx-auto grid grid-cols-2">
        <?php if($big_img) :?>
            <div class="col-span-full lg:col-span-1">
                <div class="relative pb-[125%]">
                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $big_img, 'class' => 'w-full']); ?>
                </div>
            </div>
        <?php endif ;?>
        <div class="col-span-full lg:col-span-1 flex flex-col-reverse items-center lg:flex-col">
            <?php if($small_img) :?>
                <div class="ml-auto w-full lg:w-[58.22916%]">
                    <div class="w-full relative pb-[64.93%]">
                        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $small_img, 'class' => 'w-full']); ?>
                    </div>
                </div>
            <?php endif ;?>
            <div class="h-full flex flex-col justify-center items-center my-10 px-[25px] md:my-14 md:px-10 lg:px-0 lg:my-0">
                <?php if($label) :?>
                    <p class="text-center text-orange text-15 font-bold mb-7 uppercase lg:w-1/2">
                        <?php echo $label ?>
                    </p>
                <?php endif ;?>
                <p class="text-center text-17 lg:w-1/2"><?php echo $content ?></p>
            </div>
        </div>
    </div>
</section>
<?php endif ;?>
