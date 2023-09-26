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
                                <div class="absolute bottom-32 left-0 z-20 text-white container grid-layout">
                                    <div class="col-start-1 col-span-4 txt-h5"><?php echo $slide['caption'] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="absolute bottom-20 left-0 z-20 text-white container grid-layout">
                    <div class="col-start-6 col-span-2 flex flex-col items-center justify-center">
                        <div class="swiper-next-el mb-4 txt-h5 hover:opacity-50 duration-300 cursor-pointer">NEXT</div>
                        <div class="swiper-prev-el txt-h5 hover:opacity-50 duration-300 cursor-pointer">PREVIOUS</div>
                    </div>
                    <div class="col-start-11 col-span-2 flex justify-end">
                        <span class="swiper-pagination-el text-center txt-h5">1/3</span>
                    </div>
                </div>
            </div>
        </div>
</section>
<?php endif ;?>
