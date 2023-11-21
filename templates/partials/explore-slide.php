<?php 
$data = $args['data'] ?? false;
?>

<div class="swiper-slide h-full w-full">
    <div class="relative w-full mb-7 pb-[56%]">
        <div class="absolute top-0 left-0 w-full h-full bg-black"></div>
    </div>
    <div class="flex flex-col items-center">
        <h3 class="mb-5 txt-h6 md:mb-7 lg:mb-5 px-10" ><?php echo $data['heading'] ?></h3>
        <?php get_template_part( 'templates/partials/button', null, ['data' => $data['button'], 'class' => 'btn--mobile-narrow'] ) ?>
    </div>
</div>
