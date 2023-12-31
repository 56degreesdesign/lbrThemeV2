<div class="col-span-1 flex flex-col">
    <div class="relative pb-[64.26%] mb-7 lg:mb-11">
        <a href="<?= get_the_permalink(); ?>" title="Read more">
            <?php
                $image = featuredImageToAcfImage(get_post_thumbnail_id());
                get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full'])
            ?>
        </a>
    </div>
    <div class="col-span-full flex flex-wrap gap-1 mb-3.5 md:mb-8 lg:mb-9">
        <?php get_template_part('templates/partials/terms-post', null, null); ?>
    </div>
    <a href="<?= get_the_permalink(); ?>" title="Read more"><h3 class="txt-h3 mb-9 !text-left !normal-case | lg:mb-6"><?php the_title(); ?></h3></a>
    <span class="txt-1 font-bold"><?= get_the_date( 'F j, Y' ); ?></span>
</div>