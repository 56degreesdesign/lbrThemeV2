<?php 
$section = $args['data'] ?? false;
$label = $section['label'] ?? false;
$heading = $section['heading'] ?? false;
$content = $section['content'] ?? false;
$form = $section['form'] ?? false;
?>

<section class="bg-beige pt-20 pb-10 md:pt-24 mb:pb-20 lg:pt-32 lg:pb-28 xl:pb-32 xl:pt-40">
    <div class="container grid-layout">
        <h4 class="col-span-full txt-h4 mb-10 lg:col-start-1 lg:col-span-2 lg:mb-0"><?php echo $label ?></h4>
        <div class="col-span-full mb-10 lg:col-start-3 lg:mb-16 lg:col-span-5 xl:mb-20 xl:col-span-4">
            <h4 class="txt-h4 mb-5"><?php echo $heading ?></h4>
            <p class="txt-1"><?php echo $content ?></p>
        </div>
        <div class="col-span-full">
<!--            --><?php //echo do_shortcode($form); ?>
        <?php    echo apply_shortcodes('[contact-form-7 id="d5b5da5" title="Contact Form"]'); ?>

<!--            <div class="contact-forms-wrapper min-h-[648px] md:min-h-[737px] relative">-->
<!--                <iframe data-src="/contact-form" class="lazy-load-contact-form w-full h-full absolute top-0 -left-[22px]" frameborder="0"></iframe>-->
<!--                <div class="lds-ring absolute left-1/2 top-[250px] transform -translate-x-1/2 -translate-y-1/2">-->
<!--                    <div></div>-->
<!--                    <div></div>-->
<!--                    <div></div>-->
<!--                    <div></div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>