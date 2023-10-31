<?php
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$left_col = $section['left_column'] ?? false;
$right_col = $section['right_column'] ?? false;
?>
<?php if($section) : ?>
<section class="bg-beige-light pt-12 pb-20 md:pt-16 md:pb-28 lg:pt-20 lg:pb-36">
    <div class="container grid grid-cols-2">
        <?php if($heading) :?>
            <h4 class="col-span-full text-center mb-10 md:mb-14 lg:mb-20 txt-h5"><?php echo $heading ?> </h4>
        <?php endif ;?>
        <div class="col-span-full flex flex-col mb-10 pb-10 border-b lg:flex-row lg:border-none lg:justify-end lg:items-center lg:pr-10 lg:col-span-1 lg:mb-0 lg:gap-x-10 lg:py-10">
            <div class="flex flex-col items-center">
                <h3 class="mb-5 txt-h6 md:mb-7 lg:mb-5" ><?php echo $left_col['heading'] ?></h3>
                <?php get_template_part( 'templates/partials/button', null, ['data' => $left_col['button'], 'class' => ''] ) ?>
            </div>
            <div class="relative w-[230px] h-[149px]">
                <div class="absolute top-0 left-0 w-full h-full bg-black"></div>
            </div>
        </div>
        <div class="col-span-full flex flex-col lg:flex-row lg:items-center lg:border-l lg:pl-10 lg:col-span-1 lg:gap-x-10 lg:py-10">
            <div class="relative w-[230px] h-[149px]">
                <div class="absolute top-0 left-0 w-full h-full bg-black"></div>
            </div>
            <div class="flex flex-col items-center">
                <h3 class="mb-5 txt-h6 md:mb-7 lg:mb-5" ><?php echo $right_col['heading'] ?></h3>
                <?php get_template_part( 'templates/partials/button', null, ['data' => $right_col['button'], 'class' => ''] ) ?>
            </div>
        </div>
    </div>
</section>
<?php endif ;?>
