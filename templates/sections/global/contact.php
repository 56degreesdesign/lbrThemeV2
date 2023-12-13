<?php
$section = $args['data'] ?? false;
$logo = $section['logo'] ?? false;
?>
<?php if($section) : ?>
<section class="bg-green py-11 md:py-14 lg:pb-14 lg:pt-20">
    <div class="container flex flex-col items-center">
        <?php if($logo) :?>
            <img class="mb-11 md:mb-12 lg:mb-14" src="<?php echo $logo['url'] ?>" alt="">
        <?php endif ;?>
        <?php if($section['heading']) : ?>
            <h5 class="text-beige-ligther txt-5"><?php echo $section['heading'] ?></h5>
        <?php endif ;?>
        <?php if($section['content']) :?>
            <p class="text-beige-ligther text-center text-15 max-w-[290px] md:text-16 lg:max-w-[484px] lg:text-17 mb-8 md:mb-10 lg:mb-12"><?php echo $section['content'] ?></p>
        <?php endif ;?>
        <?php get_template_part( 'templates/partials/button', null, ['data' => $section['button'], 'class' => 'btn--mobile-narrow'] ) ?>
    </div>
</section>
<?php endif ;?>
