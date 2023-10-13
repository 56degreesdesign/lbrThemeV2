<?php
$section = $args['data'] ?? false;
$logo = $section['logo'] ?? false;
?>
<?php if($section) : ?>
<section class="bg-green pt-10 md:pt-14 pb-14 lg:pt-20">
    <div class="container flex flex-col items-center">
        <?php if($logo) :?>
            <img class="mb-10 md:mb-14" src="<?php echo $logo['url'] ?>" alt="">
        <?php endif ;?>
        <?php if($section['heading']) : ?>
            <h5 class="text-white txt-h5 mb-4"><?php echo $section['heading'] ?></h5>
        <?php endif ;?>
        <?php if($section['content']) :?>
            <p class="text-white text-center text-14 lg:text-17 mb-8 md:mb-10 lg:mb-12"><?php echo $section['content'] ?></p>
        <?php endif ;?>
        <?php get_template_part( 'templates/partials/button', null, ['data' => $section['button'], 'class' => ''] ) ?>
    </div>
</section>
<?php endif ;?>
