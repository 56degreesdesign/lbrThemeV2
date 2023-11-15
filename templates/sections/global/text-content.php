<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$buttons = $section['buttons'] ?? false;
$image = $section['image'] ?? false;
$button = $section['button'] ?? false;
$anchor = $section['anchor'] ?? false;
$background_colour = $section['background_colour'] ?? false;
?>

<section id="<?php echo $anchor ?>" class="bg-<?php echo $background_colour ?> py-40">
    <div class="container grid-layout">
        <div class="col-span-full flex flex-col items-center">
            <div class="lg:w-[46.5625%] wysiwyg">
                <?php echo $content ?>
              </div>
             <?php if($buttons) :?>
                  <div class="flex flex-col gap-y-5 gap-x-5 justify-center mt-20 lg:mt-24 lg:flex-row items-center">
                      <?php foreach ($buttons as $button) : ?>
                          <?php get_template_part( 'templates/partials/button', null, ['data' => $button['button'], 'class' => 'w-[317px]'] ) ?>
                      <?php endforeach;?>
                  </div>
            <?php endif ;?>
        </div>
        <?php if($image) : ?>
            <div class="col-span-full lg:col-start-3 lg:col-span-8 lg:px-16 mt-20 lg:mt-40">
                <div class="relative pb-[56.22%]">
                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
                </div>
            </div>
        <?php endif ;?>
    </div>
</section>