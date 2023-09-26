<?php 
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$heading = $section['heading'] ?? false;
$content = $section['content'] ?? false;

?>
<?php if ($section) : ?>
<section class="bg-beige">
    <div class="max-w-[1920px] mx-auto grid grid-cols-2">
        <div class="col-span-1">
            <div class="w-full relative pb-[112.87%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
        </div>
        <div class="col-span-1 flex flex-col items-center justify-center">
            <h1 class="txt-h2 mb-14"><?php echo $heading ?></h1>
            <p class="w-1/2 text-center text-17"><?php echo $content ?></p>
        </div>
    </div>
</section>
<?php endif ;?>
