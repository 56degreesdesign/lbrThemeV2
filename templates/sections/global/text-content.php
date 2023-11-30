<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$buttons = $section['buttons'] ?? false;
$image = $section['image'] ?? false;
$button = $section['button'] ?? false;
$anchor = $section['anchor'] ?? false;
$background_colour = $section['background_colour'] ?? false;
$bigger_content = $section['bigger_content'] ?? false;
$smaller_padding = $section['smaller_padding'] ?? false;
?>

<section id="<?php echo $anchor ?>" class="bg-<?php echo $background_colour ?> pt-11 md:py-20 lg:py-32 xl:py-40 <?php echo ($smaller_padding ? 'pb-11' : 'pb-20'); ?>">
    <div class="container grid-layout">
        <div class="col-span-full flex flex-col items-center lg:mb-0">
            <div class="text-content wysiwyg <?php echo ($bigger_content ? 'wysiwyg--big' : ''); ?>">
                <?php echo $content ?>
              </div>
             <?php if($buttons) :?>
                  <div class="w-full flex flex-col gap-y-2.5 gap-x-5 justify-center items-center mt-7 lg:gap-y-5 lg:mt-20 lg:flex-row xl:mt-24">
                      <?php foreach ($buttons as $button) : ?>
                          <?php get_template_part( 'templates/partials/button', null, ['data' => $button['button'], 'class' => 'btn--mobile-wide btn--desktop-wide'] ) ?>
                      <?php endforeach;?>
                  </div>
            <?php endif ;?>
        </div>
        <?php if($image) : ?>
            <div class="col-span-full row-start-1 mt-9 mb-11 md:mt-14 lg:mb-0 lg:row-start-auto lg:col-start-3 lg:col-span-8 lg:px-16 lg:mt-20 xl:mt-40">
                <div class="relative pb-[56.22%]">
                    <?php get_template_part('templates/partials/images/image', 'preloaded', ['image' => $image, 'class' => 'w-full']); ?>
                </div>
            </div>
        <?php endif ;?>
    </div>
</section>