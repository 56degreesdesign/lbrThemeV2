<?php 
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$content = $section['content'] ?? false;
$slides = $section['slides'] ?? false;
?>

<?php if($section) : ?>
    <section class="bg-beige pb-32">
        <div class="container grid-layout">
            <div class="col-start-1 col-span-6">
                <div class="relative pb-[62.1266%] mb-52">
                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
                </div>
                <div class="map-and-slider-content"> <?php echo $content ?></div>
            </div>
            <div class="col-start-8 col-span-5 mt-32 translate-x-[3.563rem]">
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
                <div class="flex justify-between pr-[3.563rem]">
                    <div class="flex flex-col">
                        <div class="swiper-next-el mb-4 swiper-nav">NEXT</div>
                        <div class="swiper-prev-el swiper-nav">PREVIOUS</div>
                    </div>
                    <div class="">
                        <span class="swiper-pagination-el text-center txt-h5">1/3</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>