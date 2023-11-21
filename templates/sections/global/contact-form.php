<?php 
$section = $args['data'] ?? false;
$label = $section['label'] ?? false;
$heading = $section['heading'] ?? false;
$content = $section['content'] ?? false;
$form = $section['form'] ?? false;
$anchor = $section['anchor'] ?? false;
?>

<section id="<?php echo $anchor?>" class="bg-beige-light py-24 md:py-28 lg:bg-beige lg:pt-32 lg:pb-28 xl:pb-32 xl:pt-40">
    <div class="container grid-layout">
        <?php if($label) :?>
            <h4 class="col-span-full hidden xl:block txt-h4 mb-10 lg:col-start-1 lg:col-span-2 lg:mb-0"><?php echo $label ?></h4>
        <?php endif ;?>
        <div class="col-span-full mb-11 lg:col-start-2 lg:mb-16 lg:col-span-5 xl:mb-20 xl:col-start-3 xl:col-span-4">
            <?php if($heading) :?>
                <h4 class="text-20 lg:text-25 font-bold uppercase leading-none mb-5"><?php echo $heading ?></h4>
            <?php endif ;?>
            <p class="txt-1"><?php echo $content ?></p>
        </div>
        <div class="col-span-full lg:col-start-2 lg:col-span-10 xl:col-start-3 xl:col-span-8">
            <?php echo apply_shortcodes('[contact-form-7 id="d5b5da5" title="Contact Form"]'); ?>
        </div>
    </div>
</section>