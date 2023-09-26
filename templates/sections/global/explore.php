<?php
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$left_col = $section['left_column'] ?? false;
$right_col = $section['right_column'] ?? false;
?>
<?php if($section) : ?>
<section class="bg-beige-light pt-20 pb-36">
    <div class="container grid grid-cols-2">
        <h4 class="col-span-full text-center mb-20 txt-h5"><?php echo $heading ?> </h4>
        <div class="col-span-1 flex flex-col items-end pr-24">
            <div class="flex flex-col items-center">
            <h3 class="text-center mb-11 txt-h3" ><?php echo $left_col['heading'] ?></h3>
                <?php get_template_part( 'templates/partials/button', null, ['data' => $left_col['button'], 'class' => ''] ) ?>
            </div>
        </div>
        <div class="col-span-1 flex flex-col items-start border-l pl-24">
            <div class="flex flex-col items-center">
            <h3 class="text-center mb-11 txt-h3" ><?php echo $right_col['heading'] ?></h3>
                <?php get_template_part( 'templates/partials/button', null, ['data' => $right_col['button'], 'class' => ''] ) ?>
            </div>
        </div>
    </div>
</section>
<?php endif ;?>
