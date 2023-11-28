<?php
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$left_col = $section['left_column'] ?? false;
$right_col = $section['right_column'] ?? false;
?>
<?php if($section) : ?>
<section class="bg-beige-light pt-12 pb-20 md:pt-16 md:pb-28 lg:pt-20 lg:pb-24 xl:pb-36">
    <div class="container grid grid-cols-2">
        <?php if($heading) :?>
            <h4 class="col-span-full text-center mb-10 md:mb-14 lg:mb-20 txt-h5 hidden lg:block"><?php echo $heading ?> </h4>
        <?php endif ;?>
        <?php get_template_part('templates/partials/explore-box', null, ['data' => $right_col]) ?>
        <?php get_template_part('templates/partials/explore-box', null, ['data' => $left_col, 'side' => 'right']) ?>

        <div class="col-span-full -mr-[25px] lg:hidden">
            <div class="text-center mb-10 md:mb-14 lg:mb-20 txt-h5 mr-[25px] relative">
                <h4 class="text-center"><?php echo $heading ?></h4>
            </div>
            <div class="swiper explore-carousel relative">
                <div class="swiper-wrapper">
                    <?php get_template_part('templates/partials/explore-slide', null, ['data' => $right_col]) ?>
                    <?php get_template_part('templates/partials/explore-slide', null, ['data' => $left_col]) ?>
                    <?php get_template_part('templates/partials/explore-slide', null, ['data' => $right_col]) ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ;?>
