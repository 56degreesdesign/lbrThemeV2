<?php 
    $section = $args['data'] ?? false;
    $image = $section['image'] ?? false;
    $caption = $section['caption'] ?? false;
?>
<section class="mb-11 | xl:mb-14">
    <?php get_template_part( 'templates/partials/images/image', null, ['image' => $image, 'class' => 'w-full'] )  ?>
    <?php if ( $caption ) : ?>
        <p class="mt-2.5 text-10 | lg:mt-4 lg:text-14"><strong><?= $caption; ?></strong></p>
    <?php endif; ?>
</section>
