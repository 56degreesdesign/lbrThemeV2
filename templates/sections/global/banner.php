<?php 
$section = $args['data'];
$image = $section['image'] ?? false;
?>
<?php if($section) : ?>
<section class="bg-beige"> 
<!--    <div class="max-w-[1920px] mx-auto">-->
        <div class="relative pb-[51%]">
            <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
        </div>
<!--    </div>-->
</section>
<?php endif; ?>