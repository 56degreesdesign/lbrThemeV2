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
            <?php if($image) :?>
                <div class="col-span-full relative pb-[66%] | lg:col-span-1">
                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
                </div>
            <?php endif ;?>
            <div class="row-start-1 col-span-full relative px-[25px] mt-10 | lg:row-start-auto lg:mt-0 lg:col-span-1 | 2xl:pr-[26.67%]">
                <div class="flex flex-col justify-between h-full | lg:pl-7 lg:pt-7 | xl:pl-10 xl:pt-10 | 2xl:pt-20 2xl:pl-24">
                    <?php if($content) :?>
                        <p class="text-16 xl:text-17 mb-10 | lg:mb-0">
                            <?php echo $content ?>
                        </p>
                    <?php endif ;?>
                    <?php if($small_content) :?>
                        <div class="small-content mb-10 | lg:mb-0">
                            <?php echo $small_content ?>
                        </div>
                    <?php endif ;?>
                </div>
                <?php if($label) :?>
                    <div class="hidden absolute top-[60%] -left-2 rotate-90 text-15 font-bold text-orange lg:block">
                        <?php echo $label?>
                    </div>
                <?php endif ;?>
            </div>
        </div>
    </section>
<?php endif ;?>