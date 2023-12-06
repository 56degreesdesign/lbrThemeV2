<?php 
    $section = $args['data'] ?? false;
    $places = $section['places'] ?? false;
?>


<section class="bg-beige-light md:pb-10 lg:pb-24 2lg:pb-32 2xl:pb-40">
    <div class="container grid-layout">
        <?php foreach ( $places as $key => $place ) : ?>
            <?php
                $title = $place['title'];
                $price = $place['price'];
                $content = $place['content'];
                $moreContent = $place['more_content'];
            ?>
            <div class="col-span-full lg:col-span-6">
                <?php if ( $place['images'] ) : ?>
                <div class="swiper small-carousel relative">
                    <div class="swiper-wrapper">
                        <?php foreach ( $place['images'] as $image ) : ?>
                            <div class="swiper-slide h-full w-full">
                                <div class="relative bg-blue pb-[64.63%]">
                                    <?php get_template_part( 'templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full'] )  ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <?php get_template_part('templates/partials/swiper-nav') ?>
                </div>
                <?php endif; ?>
                <div class="mt-7 md:mt-14 2lg:mt-16">
                    <div class="relative xl:flex xl:justify-between">
                        <h2 class="txt-h2 mb-3.5 text-center | lg:text-left lg:mb-5">
                            <?= $title; ?>
                        </h2>
                        <button class="hidden btn btn--black btn--desktop-sm | mt-auto xl:block">
                            Book now
                        </button>
                    </div>
                    <p class="txt-h5 mb-7 text-center | lg:text-left lg:mb-7"><strong><?= $price; ?></strong></p>
                    <div class="flex justify-center lg:justify-start">
                        <button class="mb-11 btn btn--black btn--mobile-wide btn--desktop-sm | xl:hidden">
                            Book now
                        </button>
                    </div>
                    <div>
                        <div class="mb-2.5 text-center | text-20 2lg:text-22 2xl:text-22 lg:text-left lg:mb-11 2xl:mb-14">
                            <p><?= $content; ?></p>
                        </div>
                        <div class="accordion-list mt-7 | lg:border-b-0 lg:pb-0 <?= $key == 0 ? 'border-b border-gray pb-11 mb-11' : 'pb-10 mb-10' ?> lg:mb-0">
                            <div class="accordion-list-content accordion-list-content__no-gradient w-full" style="max-height: 0px;">
                                <div class="overflow-hidden pl-6 border-t border-gray pb-7 md:pb-10 pt-11 wysiwyg lg:pb-11 lg:pl-10">
                                    <?= $moreContent; ?>
                                </div>
                            </div>
                            <button class="accordion-list-button block uppercase text-orange underline font-bold text-16 2lg:text-18 2xl:text-20 text-center mx-auto | lg:mx-0 lg:text-left">
                                <span>VIEW MORE</span>
                                <span class="hidden">Close</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>