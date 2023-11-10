<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$button = $section['button'] ?? false;
$image = $section['image'] ?? false;
if($section):
?>
<section>
    <?php if($content) :?>
    <div class="bg-beige pt-48 pb-20">
        <div class="container">
            <div class="wysiwyg"><?php echo $content ?></div>
        </div>
    </div>
    <?php endif ;?>

    <div class="bg-beige-light py-10">
        <div class="container grid-layout text-17 font-bold leading-1.17 uppercase">
            <div class="col-start-1 col-span-2 flex items-center gap-x-5">
                <?php get_template_part('templates/partials/nav-arrow', null, ['class' => 'rotate-180']) ?>
                <span>Jan 12th, 2023</span>
            </div>
            <div class="col-start-5 col-span-4 flex items-center justify-center gap-x-8">
                <span>JAN 13TH, 2023</span>
                <span>64˚F</span>
                <span>SHARE</span>
                <span>TIMELAPSE</span>
            </div>
            <div class="col-start-11 col-span-2 flex justify-end items-center gap-x-5">
                <span>Jan 14th, 2023</span>
                <?php get_template_part('templates/partials/nav-arrow', null, ['class' => '']) ?>
            </div>
        </div>
    </div>

    <div class="relative pb-[51%]">
        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full -z-10']); ?>
        <div class="container absolute-full pb-14 flex items-center justify-end">
            <?php get_template_part( 'templates/partials/button', null, ['data' => $button, 'class' => ''] ) ?>
        </div>
    </div>
    
</section>

<?php endif ;?>
