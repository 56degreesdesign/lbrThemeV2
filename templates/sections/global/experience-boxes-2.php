<?php
$section = $args['data']['section'] ?? false;
$box1 = $section['box_1']['slider_with_content'] ?? false;
$box2 = $section['box_2']['slider_with_content'] ?? false;
$box3 = $section['box_3']['slider_with_content'] ?? false;
$box4 = $section['box_4']['slider_with_content'] ?? false;
$box5 = $section['box_5']['slider_with_content'] ?? false;

?>
<section class="bg-beige-light py-48">
    <div class="container grid-layout grid-flow-dense">
        <!-- Box 1 -->
        <div class="col-start-2 col-span-9  grid grid-cols-9 gap-x-[30px] mb-12">
            <div class="col-span-3 wysiwyg"><?php echo $box1['content'] ?></div>
            <div class="col-span-6">
                <div class="swiper small-carousel">
                    <?php (count($box1['slider']) > 1) ? get_template_part('templates/partials/experience-swiper-nav') : ''; ?>
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
        <div class="col-span-6 row-span-2">
            <div class="">
                <div class="swiper small-carousel mb-12">
                    <?php (count($box2['slider']) > 1) ? get_template_part('templates/partials/experience-swiper-nav') : ''; ?>
                    <div class="swiper-wrapper">
                        <?php foreach ($box2['slider'] as $slide) : ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="relative pb-[64.6%]">
                                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="wysiwyg"><?php echo $box2['content'] ?></div>
        </div>
        <!-- Box 3 -->
        <div class="col-span-6 grid grid-cols-2 gap-x-[30px]">
            <div class="col-span-1">
                <div class="swiper small-carousel">
                    <?php (count($box3['slider']) > 1) ? get_template_part('templates/partials/experience-swiper-nav') : ''; ?>
                    <div class="swiper-wrapper">
                        <?php foreach ($box3['slider'] as $slide) : ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="relative pb-[134.96%]">
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
        <div class="col-span-6 row-span-2 my-12">
            <div class="swiper small-carousel mb-12">
                <?php (count($box4['slider']) > 1) ? get_template_part('templates/partials/experience-swiper-nav') : ''; ?>
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

        <div class="col-start-4 col-span-6 grid grid-cols-2 gap-x-[30px]">
            <div class="col-span-1">
                <div class="wysiwyg"><?php echo $box4['content'] ?></div>
            </div>
            <div class="col-span-1">
                <div class="swiper small-carousel">
                    <?php (count($box5['slider']) > 1) ? get_template_part('templates/partials/experience-swiper-nav') : ''; ?>
                    <div class="swiper-wrapper">
                        <?php foreach ($box4['slider'] as $slide) : ?>
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
    </div>
</section>
