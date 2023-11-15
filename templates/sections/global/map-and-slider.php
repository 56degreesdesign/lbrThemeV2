<?php 
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$content = $section['content'] ?? false;
$slides = $section['slides'] ?? false;
?>

<?php if($section) : ?>
    <section class="bg-beige pb-16 md:pb-24 lg:pb-32 xl:pb-40">
        <div class="container grid-layout">
            <div class="col-span-full flex flex-col-reverse lg:flex-col lg:col-start-1 lg:col-span-6">
                <?php if($image) :?>
                    <div class="relative pb-[62.1266%] lg:mb-40 xl:mb-52">
                        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
                    </div>
                <?php endif ;?>
                <?php if($content) : ?>
                    <div class="map-and-slider-content mb-10 lg:mb-0"> <?php echo $content ?></div>
                <?php endif ;?>
            </div>
            <div class="col-span-full mt-10 lg:col-start-8 lg:col-span-5 lg:mt-32 xl:translate-x-[3.563rem]">
                <div class="swiper small-carousel mb-7">
                    <div class="swiper-wrapper">
                        <?php foreach ($slides as $slide) : ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="relative bg-blue pb-[126.64%]">
                                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="flex justify-between xl:pr-[3.563rem]">
                    <div class="flex gap-x-4">
                        <div class="swiper-prev-el swiper-nav">PREVIOUS</div>
                        <div class="swiper-next-el swiper-nav">NEXT</div>
                    </div>
                    <div class="">
                        <span class="swiper-pagination-el text-center txt-h5">1/3</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>