<?php 
$section = $args['data'];
$image = $section['image'] ?? false;
$portrait_on_mobile = $section['portrait_on_mobile'] ?? false;
$aspect_ratio_mobile = ($portrait_on_mobile) ? 'pb-[216.8%]' : 'pb-[56.533%]';
?>
<?php if($section) : ?>
<section class="bg-beige"> 
    <div class="relative <?php echo $aspect_ratio_mobile?> lg:pb-[51%]">
        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
    </div>
</section>
<?php endif; ?>