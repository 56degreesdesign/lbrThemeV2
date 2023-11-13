<section class="bg-beige-light pt-48 pb-0">
    <div class="container grid-layout">
        <div class="col-span-full lg:col-span-5 flex flex-col">
            <div class="mb-6">
                <?php get_template_part('templates/partials/terms-post', null, null); ?>
            </div>
            <h2 class="txt-h2 !text-left !normal-case mb-6"><?= get_the_title(); ?></h2>
            <span class="text-17 font-bold"><?= get_the_date( 'F j, Y' ); ?></span>
        </div>
        <div class="col-span-full lg:col-span-7">
            <div class="relative pb-[64.169%]">
                <?php
                    $image = featuredImageToAcfImage(get_post_thumbnail_id());
                    get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full'])  
                ?>
            </div>

        </div>
    </div>
</section>