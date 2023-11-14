<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$description = $section['description'] ?? false;
$list = $section['list'] ?? false;
$images = $section['images'] ?? false;
$image = $section['image'] ?? false;
if($section) :
?>
    <section class="bg-beige lg:pt-40 lg:pb-14 xl:pt-52 xl:pb-80 relative">
        <div class="container grid-layout">
            <?php if($content && $image) :?>
                <div class="col-start-1 col-span-4 row-span-2 sticky top-28">
                    <div class="wysiwyg"><?php echo $content ?></div>
                    <div class="relative pb-[64.65%]">
                        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
                    </div>
                </div>
            <?php endif ;?>
            <?php if($description) :?>
                <div class="col-start-7 col-span-6 text-20 xl:text-26"><?php echo $description ?></div>
            <?php endif ;?>
            <?php if($list) :?>
                <div class="col-start-7 col-span-6 border-t wysiwyg pt-10 xl:pt-16"><?php echo $list ?></div>
            <?php endif ;?>

            <div class="col-start-7 col-span-6 grid grid-cols-2 gap-x-[30px]">
                <?php foreach ($images as $image) : ?>
                    <div class="mb-14 <?php echo ($image['size']) ? 'col-span-2' : 'col-span-1'; ?>">
                        <div class="relative <?php echo ($image['tall']) ? 'pb-[134.96%]' : 'pb-[64.527%]'; ?>">
                            <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image['image'], 'class' => 'w-full']); ?>
                        </div>
                        <?php if($image['image_description']) :?>
                            <div class="wysiwyg mt-10"><?php echo $image['image_description'] ?></div>
                        <?php endif ;?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    
    </section>

<?php endif ;?>
