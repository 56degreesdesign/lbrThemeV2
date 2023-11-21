<?php 
$data = $args['data'] ?? false;
$side = $args['side'] ?? false;
 ?>

<div class="col-span-full mb-10 pb-10 lg:flex-col-reverse items-center lg:col-span-1 lg:mb-0 lg:gap-x-10 lg:py-10 hidden lg:flex <?php echo ($side === 'right') ? 'lg:border-l lg:pl-10 justify-end 2xl:flex-row-reverse justify-start' : 'lg:pr-10 2xl:flex-row justify-end' ; ?>">
    <div class="flex flex-col items-center">
        <h3 class="mb-5 txt-h6 md:mb-7 lg:mb-5" ><?php echo $data['heading'] ?></h3>
        <?php get_template_part( 'templates/partials/button', null, ['data' => $data['button'], 'class' => 'btn--mobile-narrow'] ) ?>
    </div>
    <div class="relative w-full pb-[56%] mb-10 2xl:w-[230px] 2xl:h-[150px] 2xl:pb-0 2xl:mb-0">
        <div class="absolute top-0 left-0 w-full h-full bg-black"></div>
    </div>
</div>