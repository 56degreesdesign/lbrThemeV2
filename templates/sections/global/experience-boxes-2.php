<?php
$section = $args['data']['section'] ?? false;
$box1 = $section['box_1']['slider_with_content'] ?? false;
$box2 = $section['box_2']['slider_with_content'] ?? false;
$box3 = $section['box_3']['slider_with_content'] ?? false;
$box4 = $section['box_4']['slider_with_content'] ?? false;
$box5 = $section['box_5']['slider_with_content'] ?? false;
$anchor = $section['anchor'] ?? false;

$boxes = array_map(function($box) {
    return $box['slider_with_content'] ?? false;
}, $section);
?>
<section id="<?php echo $anchor ?>" class="bg-beige-light pt-11 pb-20 md:py-20 lg:py-24 2lg:py-32 2xl:py-48 " > 
    <div class="container grid-layout grid-flow-dense lg:gap-y-12 gap-x-[30px]">
        <!-- Box 1 -->
        <div class="col-start-2 col-span-11 xl:col-start-2 xl:col-span-9 grid-cols-9 gap-x-[30px] hidden lg:grid">
            <div class="col-span-3 wysiwyg"><?php echo $box1['content'] ?></div>
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
        </div>
        <!-- Box 2 -->
        <div class="col-span-6 hidden lg:block">
                <div class="swiper small-carousel h-full">
                    <?php (count($box2['slider']) > 1) ? get_template_part('templates/partials/swiper-nav', null, ['desktop_absolute' => true ]) : ''; ?>
                    <div class="swiper-wrapper">
                        <?php foreach ($box2['slider'] as $slide) : ?>
                            <div class="swiper-slide">
                                <div class="relative pb-[65.2%] h-full">
                                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
<!--            <div class="wysiwyg">--><?php //echo $box2['content'] ?><!--</div>-->
        </div>
        <div class="col-start-1 col-span-6 hidden lg:block">
            <div class="wysiwyg"><?php echo $box2['content'] ?></div>
        </div>
        <!-- Box 3 -->
        <div class="col-span-6 grid-cols-2 gap-x-[30px] hidden lg:grid">
            <div class="col-span-1">
                <div class="swiper small-carousel h-full">
                    <?php (count($box3['slider']) > 1) ? get_template_part('templates/partials/swiper-nav', null, ['desktop_absolute' => true ]) : ''; ?>
                    <div class="swiper-wrapper">
                        <?php foreach ($box3['slider'] as $slide) : ?>
                            <div class="swiper-slide">
                                <div class="relative pb-[134.96%] h-full">
                                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div> 
            </div>
            <div class="col-span-1 flex flex-col justify-end wysiwyg"><?php echo $box3['content'] ?></div>
        </div>
        
        <!-- Box 4 -->
        <div class="col-span-6 row-span-2 hidden lg:block">
            <div class="swiper small-carousel mb-12">
                <?php (count($box4['slider']) > 1) ? get_template_part('templates/partials/swiper-nav', null, ['desktop_absolute' => true ]) : ''; ?>
                <div class="swiper-wrapper">
                    <?php foreach ($box4['slider'] as $slide) : ?>
                        <div class="swiper-slide h-full w-full">
                            <div class="relative pb-[64.6%]">
                                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="">
                <div class="wysiwyg flex flex-col justify-end h-full"><?php echo $box4['content'] ?></div>
            </div>
        </div>
        <!-- Box 5 -->
        <div class="col-start-3 col-span-8 grid-cols-2 gap-x-[30px] hidden lg:grid xl:col-start-4 xl:col-span-6">
            <div class="col-span-1">
                <div class="wysiwyg"><?php echo $box5['content'] ?></div>
            </div>
            <div class="col-span-1">
                <div class="swiper small-carousel h-full">
                    <?php (count($box5['slider']) > 1) ? get_template_part('templates/partials/swiper-nav', null, ['desktop_absolute' => true ]) : ''; ?>
                    <div class="swiper-wrapper">
                        <?php foreach ($box4['slider'] as $slide) : ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="relative pb-[134.96%] h-full">
                                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Mobile accordion -->
        <?php get_template_part('templates/partials/experience-boxes-accordion', null, ['data' => $boxes]) ?>
        
        <div class="col-span-full flex justify-center mt-11 md:mt-20 lg:mt-24 2lg:mt-32 2xl:mt-52">
            <a class="btn btn--orange btn--mobile-wide btn--desktop-wide" href="/contact">
                INQUIRE TO LEARN MORE</a>
        </div>
        
    </div>
</section>
