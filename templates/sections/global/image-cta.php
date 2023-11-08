<?php 
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$side = $section['side'] ?? false;
$content = $section['content'] ?? false;
$button = $section['button'] ?? false;
$bottom_margin = $section['bottom_margin'] ?? false;

if($section) :
?>
<section class="bg-beige pt-20 md:pt-28 lg:pt-32 xl:pt-40 <?php echo ($bottom_margin) ? 'pb-20 md:pb-28 lg:pb-32 xl:pb-40' : ''; ?>">
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
            <div class="relative pb-[64.527%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
        </div>
    </div>
</section>
<?php endif ;?>