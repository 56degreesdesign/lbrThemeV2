<section class="bg-beige-light pt-28 | xl:pt-48 pb-0">
    <div class="container grid-layout">
        <div class="col-span-full flex flex-col | lg:col-span-5">
            <div class="mb-7 | lg:mb-6">
                <?php get_template_part('templates/partials/terms-post', null, null); ?>
            </div>
            <h2 class="txt-h2 !text-left !normal-case order-2 | xl:mb-6"><?= get_the_title(); ?></h2>
            <span class="txt-1 font-bold order-1 lg:order-3"><?= get_the_date( 'F j, Y' ); ?></span>
        </div>
        <div class="col-span-full -order-1 mb-11 | lg:order-2 lg:mb-0 lg:col-span-7">
            <div class="relative pb-[64.169%]">
                <?php
                    $image = featuredImageToAcfImage(get_post_thumbnail_id());
                    get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full'])  
                ?>
            </div>

        </div>
    </div>
</section>