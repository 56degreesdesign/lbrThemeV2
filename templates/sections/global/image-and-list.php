<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$image = $section['image'] ?? false;
$description = $section['description'] ?? false;
$list = $section['list'] ?? false;
if($section) :
?>
<section class="bg-beige lg:pt-40 lg:pb-14 xl:pt-52">
    <div class="container grid-layout">
        <?php if($content) :?>
            <div class="col-start-1 col-span-4 wysiwyg"><?php echo $content ?></div>
        <?php endif ;?>
        <?php if($description) :?>
            <div class="col-start-7 col-span-6 text-20 xl:text-26"><?php echo $description ?></div>
        <?php endif ;?>
        <div class="col-start-1 col-span-5 xl:col-span-4">
            <div class="relative pb-[64.65%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
        </div>
        <?php if($list) :?>
             <div class="col-start-7 col-span-6 border-t wysiwyg pt-10 xl:pt-16"><?php echo $list ?></div>
        <?php endif ;?>
    </div>
</section>

<?php endif ;?>
