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
                <svg class="explore-swiper-next absolute right-0 top-0" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="11.795" height="14.503" viewBox="0 0 11.795 14.503">
                    <defs>
                        <clipPath id="clip-path">
                            <path id="Path_4" data-name="Path 4" d="M0,14.5H11.795V0H0Z" fill="black"/>
                        </clipPath>
                    </defs>
                    <g id="icon-arrow" clip-path="url(#clip-path)">
                        <g id="Group_5" data-name="Group 5" transform="translate(0 -0.001)">
                            <path id="icon-arrow-2" data-name="icon-arrow" d="M.778,13.815h0c.1.444.173.688.173.688h0s.238-.077.653-.235h0A25.7,25.7,0,0,0,11.793,7.255l0,0s0,0,0,0h0v0h0l-.008,0C7.7,2.251,1.233.1.961.007L.951,0C-.8,5.752.316,11.81.778,13.815" fill="black"/>
                        </g>
                    </g>
                </svg>
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
