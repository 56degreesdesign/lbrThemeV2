<?php 
$data = $args['data'] ?? false;
$section = get_field('availability_global', 'option') ?? false;

$interactive = $data['interactive'] ?? false;
$settings = json_encode($data, JSON_HEX_APOS);
$props = json_encode($section, JSON_HEX_APOS);
?>

<?php if($section && $interactive) : ?>
    <section id="vue-space" class="resort">
        <div class="bg-beige pb-10 pt-14 md:pt-20 lg:pt-24 xl:pt-28">
            <resort map='<?php echo $props ?>' settings='<?php echo $settings ?>'/>
        </div>
    </section>
<?php endif ;?>

<?php if($data && !$interactive) :?> 
<section class="bg-beige pt-28 pb-16">
    <div class="container grid-layout">
        <h3 class="col-start-1 col-span-3 txt-h3 mt-6 lg:mb-10 xl:mb-14 xl:col-span-3"><?php echo $data['heading'] ?></h3>
        <div class="col-start-1 col-span-2">
            <p class="mb-8 hidden xl:block"><?php echo $data['subheading'] ?></p>
            <div class="flex flex-col gap-y-3">
                <?php foreach ($data['buttons'] as $button) : ?>
                   <?php get_template_part('templates/partials/button', null, ['data' => $button['button'], 'class' => 'btn--desktop-narrow']); ?>
                <?php endforeach; ?>
            </div>
            <img class="mt-24 max-w-[212px]" src="<?php echo $section['legend']['url']?>" alt="">
        </div>
        <div class="col-start-4 col-span-9 2xl:row-start-1 2xl:row-span-2">
            <?php get_template_part('templates/partials/map-phase-all'); ?>
        </div>
    </div>
</section>
<?php endif ;?>
