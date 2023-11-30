<?php 
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$content = $section['content'] ?? false;
$slides = $section['slides'] ?? false;
?>

<?php if($section) : ?>
    <section class="bg-beige pb-20 md:pb-24 lg:pb-32 xl:pb-40">
        <div class="container grid-layout">
            <div class="col-span-full flex flex-col lg:col-start-1 lg:col-span-6">
                <?php if($image) :?>
                    <div class="relative pb-[70%] lg:pb-[62.1266%] mb-11 -mx-[25px] lg:mb-40 xl:mb-52">
                        <?php get_template_part('templates/partials/images/image', 'preloaded', ['image' => $image, 'class' => 'w-full']); ?>
                    </div>
                <?php endif ;?>
                <?php if($content) : ?>
                    <div class="map-and-slider-content max-w-[346px] lg:max-w-[390px] mx-auto"> <?php echo $content ?></div>
                <?php endif ;?>
            </div>
            <div class="col-span-full mt-11 lg:col-start-8 lg:col-span-5 lg:mt-32 xl:translate-x-[3.563rem]">
                <div class="swiper small-carousel relative">
                    <div class="swiper-wrapper">
                        <?php foreach ($slides as $slide) : ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="relative bg-blue pb-[126.64%]">
                                    <?php get_template_part('templates/partials/images/image', 'preloaded', ['image' => $slide, 'class' => 'w-full']); ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="xl:pr-[3.563rem]">
                        <?php get_template_part('templates/partials/swiper-nav') ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>