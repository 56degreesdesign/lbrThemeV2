<?php 
$section = $args['data'];
$image = $section['image'] ?? false;
?>
<?php if($section) : ?>
<section class="bg-beige"> 
    <div class="relative pb-[51%]">
        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
    </div>
</section>
<?php endif; ?>