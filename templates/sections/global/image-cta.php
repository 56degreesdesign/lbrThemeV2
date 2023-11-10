<?php 
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$side = $section['side'] ?? false;
$content = $section['content'] ?? false;
$button = $section['button'] ?? false;
$bottom_margin = $section['bottom_margin'] ?? false;
$image_description = $section['image_description'] ?? false;
$top_margin = $section['top_margin'] ?? false;
$two_images = $section['two_images'] ?? false;
$second_image = $section['second_image'] ?? false;
$second_image_description = $section['second_image_description'] ?? false;
 
if($section) :
?>
<section class="bg-beige <?php echo ($bottom_margin ? 'pb-20 md:pb-28 lg:pb-32 xl:pb-40' : '') . ($top_margin ? 'pt-20 md:pt-28 lg:pt-32 xl:pt-40' : ''); ?>">
    <div class="container grid-layout grid-flow-dense">
        <div class="col-span-full <?php echo ($side) ? 'lg:col-start-2 lg:col-span-3' : 'lg:col-start-9 lg:col-span-3'; ?>">
            <div class="w-full h-full flex flex-col items-center justify-center lg:items-start">
                <div class="wysiwyg text-center lg:text-left">
                    <?php echo $content ?>
                </div>
                <div class="mb-10 lg:mb-0">
                    <?php get_template_part( 'templates/partials/button', null, ['data' => $button, 'class' => ''] ) ?>
                </div>
            </div>
        </div>
        <div class="col-span-full <?php echo ($side) ? 'lg:col-start-7 lg:col-span-6' : 'lg:col-start-1 lg:col-span-6'; ?>">
            <div class="grid grid-cols-2 gap-x-[30px]">
                <div class="<?php echo ($two_images) ? 'col-span-1' : 'col-span-2'; ?>">
                    <div class="relative pb-[64.527%]">
                        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
                    </div>
                    <?php if($image_description) :?>
                        <div class="wysiwyg mt-10 mb-14"><?php echo $image_description ?></div>
                    <?php endif ;?>
                </div>
                <?php if($two_images) :?>
                    <div class="col-span-1">
                        <div class="relative pb-[134.96%]">
                            <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $second_image, 'class' => 'w-full']); ?>
                        </div>
                        <?php if($second_image_description) :?>
                            <div class="wysiwyg mt-10 mb-14"><?php echo $second_image_description ?></div>
                        <?php endif ;?>
                    </div>
                <?php endif ;?>
              
            </div>
            
        </div>
    </div>
</section>
<?php endif ;?>