<?php 
$section = $args['data'] ?? false;
$slides = $section['slides'] ?? false;
?>
<?php if ($section) : ?>
<section class="bg-beige">
    <div class="">
        <div class="relative">
            <div class="swiper banner-carousel relative">
                <div class="swiper-wrapper ">
                    <?php foreach ($slides as $slide) : ?>
                        <div class="swiper-slide h-full w-full">
                            <div class="relative bg-blue pb-[51%] z-0">
                                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide['image'], 'class' => 'w-full']); ?>
                                <div class="absolute bottom-4 left-0 z-20 text-white container grid-layout lg:bottom-32">
                                    <div class="col-span-full lg:col-start-1 lg:col-span-4 txt-h5"><?php echo $slide['caption'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="left-0 z-20 w-full mt-3 lg:mt-0 lg:absolute lg:bottom-20">
                    <div class="container grid-layout mx-auto lg:text-white">
                        <div class="col-span-2 flex gap-x-3 lg:flex-col items-center lg:justify-center lg:col-start-6 lg:col-span-2">
                            <div class="swiper-next-el swiper-nav lg:mb-4">NEXT</div>
                            <div class="swiper-prev-el swiper-nav">PREVIOUS</div>
                        </div>
                        <div class="col-span-2 flex justify-end lg:col-start-11 lg:col-span-2">
                            <span class="swiper-pagination-el text-center txt-h5">1/3</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php endif ;?>
