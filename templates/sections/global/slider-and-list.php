<?php 
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$content = $section['content'] ?? false;
$images = $section['images'] ?? false;
$left_col = $section['left_col'] ?? false;
$right_col = $section['right_col'] ?? false;
$slider_position = $section['slider_position'] ?? false;
?>

<section class="bg-beige-light pb-20 md:pb-32 lg:pb-44">
    <div class="container grid-layout">
        <div class="col-span-full <?php echo ($slider_position === 'left') ? 'lg:col-start-1 lg:col-span-6 xl:col-start-2 xl:col-span-5 xl:mt-52' : 'lg:col-start-8 lg:col-span-5'; ?>">
            <?php if($heading) :?>
                <h3 class="txt-h3 mb-6 md:mb-8 lg:mb-12"><?php echo $heading ?></h3>
            <?php endif ;?>
            <?php if($content) :?>
                <p class="txt-1 mb-8 md:mb-10 lg:mb-12 xl:mb-16"><?php echo $content ?></p>
                <div class="w-full h-px bg-gray mb-8 md:mb-10 lg:mb-12 xl:mb-16"></div>
            <?php endif ;?>
        </div>
        <div class="col-span-2 mb-10 lg:mb-0 <?php echo ($slider_position === 'left') ? 'lg:col-start-1 xl:col-start-2 lg:col-span-2' : 'lg:col-start-8 lg:col-span-2'; ?>">
            <?php if($left_col['label']) :?>
                <h6 class="txt-3 mb-7"><?php echo $left_col['label'] ?></h6>
            <?php endif ;?>
            <ul class="pl-4 md:pl-10 lg:pl-0">
                <?php foreach ($left_col['list'] as $item ) :?>
                    <li class="list-disc txt-1 -ml-5 pl-5"><?php echo $item['item'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="col-span-2 mb-10 lg:mb-0 <?php echo ($slider_position === 'left') ? 'lg:col-start-4 lg:col-span-2' : 'lg:col-start-10 lg:col-span-3'; ?>">
            <?php if($right_col['label']) :?>
                <h6 class="txt-3 mb-7"><?php echo $right_col['label'] ?></h6>
            <?php else :?>
                <div class="h-[48px]"></div>
            <?php endif ;?>
            <ul>
                <?php foreach ($right_col['list'] as $item ) :?>
                    <li class="list-disc txt-1 -ml-5 pl-5"><?php echo $item['item'] ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
        <?php if($images) :?>
            <div class="col-span-full <?php echo ($slider_position === 'left') ? 'lg:col-start-8 lg:col-span-5 lg:row-start-1 lg:row-span-3' : 'lg:col-start-1 lg:col-span-6 lg:row-start-1 lg:row-span-2 lg:mt-28'; ?>">
                <div class="swiper small-carousel mb-7 relative">
                    <div class="swiper-wrapper">
                        <?php foreach ($images as $slide) : ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="relative <?php echo ($slider_position === 'left') ? 'pb-[124%]' : 'pb-[64.75%]'; ?>">
                                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php get_template_part('templates/partials/swiper-nav') ?>
                </div>
            </div>
        <?php endif ;?>
        
    </div>
</section>