<?php
$section = $args['data']['section'] ?? false;
$anchor = $section['anchor'] ?? false;

$box1 = $section['box_1']['slider_with_content'] ?? false;
$box2 = $section['box_2']['slider_with_content'] ?? false;
$box3 = $section['box_3']['slider_with_content'] ?? false;
$box4 = $section['box_4']['slider_with_content'] ?? false;
$boxes = array_map(function($box) {
    return $box['slider_with_content'] ?? false;
}, $section);
?>
<section id="<?php echo $anchor ?>" class="bg-beige-light pt-24 pb-11 md:pb-20 md:pt-32 lg:py-36 xl:py-48">
    <div class="container grid-layout grid-flow-dense gap-y-12 gap-x-[30px]">
     <!-- Box 1 -->
        <div class="col-start-3 col-span-full grid-cols-10 gap-x-[30px] hidden lg:grid">
            <div class="col-span-6">
                <div class="swiper small-carousel">
                    <?php (count($box1['slider']) > 1) ? get_template_part('templates/partials/swiper-nav', null, ['desktop_absolute' => true ]) : ''; ?>
                    <div class="swiper-wrapper">
                        <?php foreach ($box1['slider'] as $slide) : ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="relative pb-[64.6%]">
                                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-span-4 flex flex-col justify-end wysiwyg"><?php echo $box1['content'] ?></div>
        </div>
        <!-- Box 2 -->
        <div class="col-span-6 grid-cols-2 gap-x-[30px] hidden lg:col-span-10 lg:grid xl:mb-0 xl:col-span-6">
            <div class="col-span-1 wysiwyg"><?php echo $box2['content'] ?></div>
            <div class="col-span-1">
                <div class="swiper small-carousel">
                    <?php (count($box2['slider']) > 1) ? get_template_part('templates/partials/swiper-nav', null, ['desktop_absolute' => true ]) : ''; ?>
                    <div class="swiper-wrapper">
                        <?php foreach ($box2['slider'] as $slide) : ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="relative pb-[134.96%]">
                                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Box 3 -->
        <div class="col-span-6 relative hidden lg:col-span-10 lg:col-start-3 lg:block xl:col-start-auto xl:col-span-6">
            <div class="swiper small-carousel h-full">
                <?php (count($box3['slider']) > 1) ? get_template_part('templates/partials/swiper-nav', null, ['desktop_absolute' => true ]) : ''; ?>
                <div class="swiper-wrapper">
                    <?php foreach ($box3['slider'] as $slide) : ?>
                        <div class="swiper-slide h-full w-full">
                            <div class="relative pb-[64.6%] h-full">
                                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
<!--            <div class="wysiwyg">--><?php //echo $box3['content'] ?><!--</div>-->
        </div>
        <div class="col-start-7 col-span-6 hidden lg:block">
            <div class="wysiwyg"><?php echo $box3['content'] ?></div>

        </div>
        <!-- Box 4 -->
        <div class="col-span-6 gap-x-[30px] row-span-2 hidden lg:mt-0 lg:block">
            <div class="swiper small-carousel h-full">
                <?php (count($box4['slider']) > 1) ? get_template_part('templates/partials/swiper-nav', null, ['desktop_absolute' => true ]) : ''; ?>
                <div class="swiper-wrapper">
                    <?php foreach ($box4['slider'] as $slide) : ?>
                        <div class="swiper-slide h-full w-full">
                            <div class="relative pb-[64.6%] h-full">
                                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="col-start-7 col-span-4 hidden lg:block">
            <div class="wysiwyg flex flex-col justify-end h-full"><?php echo $box4['content'] ?></div>
        </div>
        <!-- Mobile accordion -->
        <?php get_template_part('templates/partials/experience-boxes-accordion', null, ['data' => $boxes]) ?>
    </div>
</section>
