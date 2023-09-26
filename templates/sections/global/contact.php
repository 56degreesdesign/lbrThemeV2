<?php
$section = $args['data'] ?? false;
$logo = $section['logo'] ?? false;
?>
<?php if($section) : ?>
<section class="bg-green pt-20 pb-14">
    <div class="container flex flex-col items-center">
        <img class="mb-14" src="<?php echo $logo['url'] ?>" alt="">
        <h5 class="text-white txt-h5 mb-4"><?php echo $section['heading'] ?></h5>
        <p class="text-white text-center text-17 mb-12"><?php echo $section['content'] ?></p>
        <?php get_template_part( 'templates/partials/button', null, ['data' => $section['button'], 'class' => ''] ) ?>
    </div>
</section>
<?php endif ;?>
