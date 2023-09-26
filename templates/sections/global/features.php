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
    <section class="bg-beige pt-28 pb-36">
        <div class="container grid-layout">
            <h2 class="col-span-full txt-h2 mb-8"><?php echo $heading ?></h2>
            <?php if ($subheading) : ?>
                <h5 class="col-span-full text-center text-16 font-bold mt-4 mb-5"><?php echo $subheading ?></h5>
            <?php endif ;?>
            <p class="col-start-4 col-span-6 text-center text-17 mb-36"><?php echo $content ?></p>
            <div class="relative pb-[116%] col-start-1 col-span-5">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
            <div class="col-start-7 col-span-6 flex flex-col justify-end">
                <div class="mb-44 txt-h5"><?php echo $features['label'] ?></div>
                <?php foreach ($features['features'] as $feature) : ?>
                <div class="flex justify-between items-center border-t py-3 last-of-type:border-b">
                    <div class="font-Reckless text-35"><?php echo $feature['name'] ?></div>
                    <div class="text-18 font-bold"><?php echo $feature['area'] ?></div>
                </div>
                <?php endforeach;?>
            </div>
            <div class="col-start-1 col-span-5 mt-7 text-orange text-17"><?php echo $caption ?></div>
        </div>
    </section>
<?php endif ;?>
