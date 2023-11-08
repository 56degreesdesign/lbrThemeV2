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
    <section class="bg-beige relative py-16 md:py-20 lg:py-28 xl:py-40">
        <?php if ($display_bg_pattern) : ?>
            <img class="absolute-full object-cover" src="<?php echo $bg_pattern['url'] ?>" alt="">
        <?php endif ;?>
        <div class="container grid-layout relative">
            <div class="flex flex-col justify-center <?php echo ($orientation == 'vertical') ? 'col-span-full' : 'col-span-full lg:col-start-1 lg:col-span-6'; ?>">
                <?php if($heading) :?>
                    <h2 class="txt-h2 mb-8 text-center"><?php echo $heading ?></h2>
                <?php endif ;?>
                <?php if ($subheading) : ?>
                    <h5 class="text-center text-16 font-bold mt-4 mb-5"><?php echo $subheading ?></h5>
                <?php endif ;?>
                <?php if($content) :?>
                    <p class="text-center text-17 mb-10 mx-auto md:mb-14 lg:mb-16 lg:w-1/2"><?php echo $content ?></p>
                <?php endif ;?>
                <div class="flex justify-center <?php echo ($orientation == 'vertical') ? 'mb-10 md:mb-14 lg:mb-24 xl:mb-40' : 'mb-10 lg:mb-0'; ?>">
                    <?php get_template_part( 'templates/partials/button', null, ['data' => $button, 'class' => ''] ) ?>
                </div>
            </div>
            <div class="relative col-span-full <?php echo ($orientation == 'vertical') ? 'lg:col-start-3 lg:col-span-8 pb-[56%]' : ($portrait ? 'lg:col-start-7 lg:col-span-6 pb-[118.131%]' : 'lg:col-start-7 lg:col-span-6 pb-[66%]'); ?>">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
        </div>
    </section>
<?php endif ;?>
