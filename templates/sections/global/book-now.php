<?php 
    $section = $args['data'] ?? false;
    $places = $section['places'] ?? false;
?>


<section class="bg-beige-light pb-16 md:pb-24 lg:pb-32">
    <div class="container grid-layout">
        <?php foreach ( $places as $place ) : ?>
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
                <div class="mt-16">
                    <div class="relative">
                        <h2 class="txt-h2 mb-3.5 text-center | lg:text-left lg:mb-2">
                            <?= $title; ?>
                        </h2>
                        <button class="hidden absolute bottom-0 right-0 bg-black rounded-full py-2.5 px-6 pointer-events-auto uppercase font-bold text-beige text-12 | xl:block">
                            Book now
                        </button>
                    </div>
                    <p class="txt-h5 mb-7 text-center | lg:text-left lg:mb-7"><strong><?= $price; ?></strong></p>
                    <button class="mb-11 bg-black rounded-full py-2.5 px-6 pointer-events-auto uppercase font-bold text-beige text-12 btn--mobile-wide btn--desktop-small | xl:hidden">
                        Book now
                    </button>
                    <div>
                        <div class="text-20 mb-2.5 | lg:text-26 lg:mb-14">
                            <p><?= $content; ?></p>
                        </div>
                        <div class="accordion-list mt-11 border-b border-gray pb-11 mb-12 | lg:border-b-0 lg:pb-0">
                            <div class="accordion-list-content accordion-list-content__no-gradient w-full" style="max-height: 0px;">
                                <div class="overflow-hidden pl-6 border-t border-gray pb-10 pt-14 wysiwyg lg:pl-10">
                                    <?= $moreContent; ?>
                                </div>
                            </div>
                            <button class="accordion-list-button block uppercase text-orange underline font-bold txt-h4 text-center mx-auto | lg:mx-0 lg:text-left">
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