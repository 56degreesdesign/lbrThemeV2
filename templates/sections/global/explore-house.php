<?php
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$side = $section['side'] ?? false;
$content = $section['content'] ?? false;
$button = $section['button'] ?? false;
$heading = $section['heading'] ?? false;
$label = $section['label'] ?? false; 
$border = $section['bottom_border'] ?? false;
$big_padding = $section['big_padding'] ?? false;


if($section) :
    ?>
    <section class="bg-beige pt-11 <?php echo ($big_padding ? 'pb-20 md:pb-24' : ''); ?> lg:pb-40 lg:pt-0">
        <div class="container grid-layout grid-flow-dense">
            <div class="col-span-full lg:hidden">
                <?php if($label) :?>
                    <div class="mb-7 -mt-11 text-14 font-bold text-center uppercase"><?php echo $label ?></div>
                <?php endif ;?>
            </div>
            <h3 class="col-span-full mb-4 md:mb-5 text-center txt-h2 lg:hidden"><?php echo $heading ?></h3>
            <div class="col-span-full <?php echo ($side) ? 'lg:col-start-2 lg:col-span-3' : 'lg:col-start-9 lg:col-span-3'; ?>">
                <div class="w-full h-full flex flex-col items-center justify-center lg:items-start">
                    <h3 class="txt-h2 mb-7 hidden lg:block"><?php echo $heading ?></h3>
                    <div class="wysiwyg text-left hidden lg:block">
                        <?php echo $content ?>
                    </div>
                    <div class="hidden lg:flex">
                        <?php get_template_part( 'templates/partials/button', null, ['data' => $button, 'class' => 'btn--desktop-narrow'] ) ?>
                    </div>
                </div>
            </div>
            <div class="col-span-full row-start-3 lg:row-start-auto mb-8 lg:mb-0 <?php echo ($side) ? 'lg:col-start-7 lg:col-span-6' : 'lg:col-start-1 lg:col-span-6'; ?>">
                <div class="relative pb-[64.527%]">
                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
                </div>
            </div>
            <div class="col-span-full lg:hidden">
                <div class="wysiwyg text-center mb-7 md:mb-11">
                    <?php echo $content ?>
                </div>
                <div class="flex justify-center">
                    <?php get_template_part( 'templates/partials/button', null, ['data' => $button, 'class' => 'btn--mobile-narrow'] ) ?>
                </div>
            </div>
            <?php if($border) :?>
            <div class="col-span-full h-px bg-black mt-11 lg:hidden"></div>
            <?php endif ?>  
        </div>
    </section>
<?php endif ;?>