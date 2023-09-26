<?php
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$content = $section['content'] ?? false;
$button = $section['button'] ?? false;
$image = $section['image'] ?? false;
$subheading = $section['subheading'] ?? false;
$orientation = $section['orientation'] ?? false;
$display_bg_pattern = $section['background_pattern'] ?? false;
$bg_pattern = get_field('footer', 'option')['background_image'] ?? false;
$portrait = $section['image_long'] ?? false;

?>


<?php if ($section) : ?>
    <section class="bg-beige py-40 relative">
        <?php if ($display_bg_pattern) : ?>
        <img class="absolute-full object-cover" src="<?php echo $bg_pattern['url'] ?>" alt="">
        <?php endif ;?>
        <div class="container grid-layout relative">
            <div class="flex flex-col justify-center <?php echo ($orientation == 'vertical') ? 'col-span-full' : 'col-start-1 col-span-6'; ?>">
                <h2 class="txt-h2 mb-8"><?php echo $heading ?></h2>
                <?php if ($subheading) : ?>
                    <h5 class="text-center text-16 font-bold mt-4 mb-5"><?php echo $subheading ?></h5>
                <?php endif ;?>
                <p class="text-center text-17 mb-16 mx-auto w-1/2"><?php echo $content ?></p>
                <div class="flex justify-center <?php echo ($orientation == 'vertical') ? 'mb-40' : ''; ?>">
                    <?php get_template_part( 'templates/partials/button', null, ['data' => $button, 'class' => ''] ) ?>
                </div>
            </div>
            <div class="relative <?php echo ($orientation == 'vertical') ? 'col-start-3 col-span-8 pb-[56%]' : ($portrait ? 'col-start-7 col-span-6 pb-[118.131%]' : 'col-start-7 col-span-6 pb-[66%]'); ?>">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
        </div>
    </section>
<?php endif ;?>
