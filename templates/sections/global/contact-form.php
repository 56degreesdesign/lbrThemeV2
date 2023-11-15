<?php 
$section = $args['data'] ?? false;
$label = $section['label'] ?? false;
$heading = $section['heading'] ?? false;
$content = $section['content'] ?? false;
$form = $section['form'] ?? false;
$anchor = $section['anchor'] ?? false;
?>

<section id="<?php echo $anchor?>" class="bg-beige pt-20 pb-10 md:pt-24 mb:pb-20 lg:pt-32 lg:pb-28 xl:pb-32 xl:pt-40">
    <div class="container grid-layout">
        <?php if($label) :?>
            <h4 class="col-span-full txt-h4 mb-10 lg:col-start-1 lg:col-span-2 lg:mb-0"><?php echo $label ?></h4>
        <?php endif ;?>
        <div class="col-span-full mb-10 lg:col-start-3 lg:mb-16 lg:col-span-5 xl:mb-20 xl:col-span-4">
            <?php if($heading) :?>
                <h4 class="txt-h4 mb-5"><?php echo $heading ?></h4>
            <?php endif ;?>
            <p class="txt-1"><?php echo $content ?></p>
        </div>
        <div class="col-span-full lg:col-start-3 lg:col-span-8">
            <?php echo apply_shortcodes('[contact-form-7 id="d5b5da5" title="Contact Form"]'); ?>
        </div>
    </div>
</section>