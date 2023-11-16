<?php
    $section = $args['data'] ?? false;
    $heading = $section['heading'] ?? false;
    $posts = $section['posts'] ?? false;
?>
<section class="bg-beige-light pt-28 | lg:pt-48 lg:pb-14">
    <div class="container grid-layout">
        <h1 class="col-span-full txt-h2 text-center mb-3.5 md:mb-20 lg:mb-28 xl:mb-32"><?= $heading; ?></h1>
        <?php if( $posts ): ?>
            <div class="col-span-full">
                <div class="swiper blog-carousel">
                    <div class="swiper-wrapper">
                        <?php foreach( $posts as $post ): setup_postdata($post); ?>
                            <div class="swiper-slide">
                                <div class="grid-layout">
                                    <div class="col-span-full lg:col-span-6 flex flex-col">
                                        <div class="flex gap-x-1 mb-6">
                                            <?php get_template_part('templates/partials/terms-post', null, null); ?>
                                        </div>
                                        <a href="<?= get_the_permalink(); ?>" title="Read more"><h2 class="txt-h2 !text-left !normal-case mb-6"><?php the_title(); ?></h2></a>
                                        <span class="text-17 font-bold"><?= get_the_date( 'F j, Y' ); ?></span>
                                        <a class="bg-orange uppercase px-5 xl:px-12 pt-2.5 pb-2 text-15 mt-auto w-fit text-center text-white font-bold rounded-full hover:opacity-70 duration-300"
                                           href="<?= get_the_permalink(); ?>" title="Read more">
                                            Read more</a>
                                    </div>
                                    <div class="col-span-full lg:col-span-6">
                                        <div class="relative pb-[64.75%]">
                                            <a href="<?= get_the_permalink(); ?>" title="Read more">
                                                <?php
                                                    $image = featuredImageToAcfImage(get_post_thumbnail_id());
                                                    get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full'])
                                                ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-span-full lg:col-start-7 lg:col-span-6 mt-6">
                <div class="flex justify-between">
                    <div class="flex gap-x-12">
                        <div class="swiper-prev-el swiper-nav">PREVIOUS</div>
                        <div class="swiper-next-el swiper-nav">NEXT</div>
                    </div>
                    <div class="">
                        <span class="swiper-pagination-el text-center txt-h5"></span>
                    </div>
                </div>
                
            </div>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>
