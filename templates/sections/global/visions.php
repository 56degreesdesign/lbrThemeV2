<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$visions = $section['visions'] ?? false;
$left_col = $section['left_column'] ?? false;
$right_col = $section['right_column'] ?? false;
$anchor = $section['anchor'] ?? false;

if($section) :?>
<section id="<?php echo $anchor ?>" class="bg-beige py-20 md:py-26 lg:py-32 xl:py-40">
    <div class="container grid-layout">
        <?php if($content) :?>
            <div class="col-span-full wysiwyg text-center"><?php echo $content ?></div>
        <?php endif ;?>
        
        <?php foreach ($visions as $vision) :?>
            <span class="col-span-full lg:col-start-1 lg:col-span-1 mb-4 lg:mb-0"><?php echo $vision['label'] ?></span>
            <div class="col-span-full mb-4 lg:col-start-4 lg:col-span-6 wysiwyg lg:text-center"><?php echo $vision['content'] ?></div>
        <?php endforeach;?>
        
        <?php if($left_col['content']) :?>
            <div class="col-span-full wysiwyg text-center mt-16 lg:col-start-1 lg:col-span-5 xl:col-start-3 xl:col-span-4 md:mt-20 xl:mt-28"><?php echo $left_col['content']?></div>
        <?php endif;?>
        
        <?php if($right_col['content']) :?>
            <div class="col-span-full wysiwyg text-center mt-16 lg:col-start-8 lg:col-span-5 xl:col-start-7 xl:col-span-4 md:mt-20 xl:mt-28"><?php echo $right_col['content']?></div>
        <?php endif ;?>
    </div>
</section>
<?php endif ;?>
