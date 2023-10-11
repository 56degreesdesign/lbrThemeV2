<?php
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$left_col = $section['left_column'] ?? false;
$right_col = $section['right_column'] ?? false;
?>
<?php if($section) : ?>
<section class="bg-beige-light pt-12 pb-20 md:pt-16 md:pb-28 lg:pt-20 lg:pb-36">
    <div class="container grid grid-cols-2">
        <h4 class="col-span-full text-center mb-10 md:mb-14 lg:mb-20 txt-h5"><?php echo $heading ?> </h4>
        <div class="col-span-full flex flex-col mb-10 pb-10 border-b lg:border-none lg:pb-0 lg:items-end lg:pr-24 lg:col-span-1">
            <div class="flex flex-col items-center">
            <h3 class="text-center mb-5 txt-h3 md:mb-7 lg:mb-11" ><?php echo $left_col['heading'] ?></h3>
                <?php get_template_part( 'templates/partials/button', null, ['data' => $left_col['button'], 'class' => ''] ) ?>
            </div>
        </div>
        <div class="col-span-full flex flex-col lg:items-start lg:border-l lg:pl-24 lg:col-span-1">
            <div class="flex flex-col items-center">
            <h3 class="text-center mb-5 txt-h3 md:mb-7 lg:mb-11" ><?php echo $right_col['heading'] ?></h3>
                <?php get_template_part( 'templates/partials/button', null, ['data' => $right_col['button'], 'class' => ''] ) ?>
            </div>
        </div>
    </div>
</section>
<?php endif ;?>
