<?php
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$content = $section['content'] ?? false;
$image = $section['image'] ?? false;
$subheading = $section['subheading'] ?? false;
$caption = $section['caption'] ?? false;
$features = $section['features']
?>
<?php if($section) : ?>
    <section class="bg-beige pt-16 pb-20 md:pt-20 md:pb-28 lg:pt-24 lg:pb-32 xl:pt-28 xl:pb-36">
        <div class="container grid-layout">
            <?php if($heading) :?>
                <h2 class="col-span-full txt-h2 mb-8"><?php echo $heading ?></h2>
            <?php endif ;?>
            
            <?php if ($subheading) : ?>
                <h5 class="col-span-full text-center text-16 font-bold mt-4 mb-5 uppercase"><?php echo $subheading ?></h5>
            <?php endif ;?>
            
            <?php if($content) :?>
                <p class="col-span-full text-center text-17 mb-20 md:mb-24 | lg:col-start-4 lg:col-span-6 lg:mb-32 xl:mb-36"><?php echo $content ?></p>
            <?php endif ;?>
            
            <div class="col-span-full txt-h5 mb-4 lg:hidden"><?php echo $features['label'] ?></div>
            <?php if($image) :?>
                <div class="relative pb-[116%] col-start-1 col-span-5">
                    <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
                </div>
            <?php endif ;?>
            <?php if($caption) :?>
                <div class="col-span-full mt-4 mb-8 text-orange text-14 lg:hidden"><?php echo $caption ?></div>
            <?php endif ;?>
            <?php if($features) :?>
                <div class="col-span-full flex flex-col justify-end | lg:col-start-7 lg:col-span-6">
                    <div class="mb-20 txt-h5 hidden lg:block xl:mb-44"><?php echo $features['label'] ?></div>
                    <?php foreach ($features['features'] as $feature) : ?>
                    <div class="flex justify-between items-center border-t py-2 last-of-type:border-b lg:py-3">
                        <div class="font-Reckless text-22 lg:text-26 xl:text-35"><?php echo $feature['name'] ?></div>
                        <div class="text-16 md:text-17 lg:text-18 font-bold"><?php echo $feature['area'] ?></div>
                    </div>
                    <?php endforeach;?>
                </div>
            <?php endif ;?>
            
            <?php if($caption) :?>
                <div class="hidden mt-7 text-orange text-17 | lg:block lg:col-start-1 lg:col-span-5"><?php echo $caption ?></div>
            <?php endif ;?>
        </div>
    </section>
<?php endif ;?>
