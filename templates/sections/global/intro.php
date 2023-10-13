<?php
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$icon = $section['icon'] ?? false;
$image = $section['image'] ?? false;
$anchor = $section['anchor'] ?? false;
?>
<?php if($section) : ?>
    <section id="<?php echo $anchor?>" class="bg-beige ">
        <div class="grid grid-cols-2 max-w-[1920px] mx-auto relative">
            <?php if($heading) :?>
                <div class="col-span-full lg:col-span-1 flex items-center justify-center">
                    <h1 class="my-20 txt-h2 lg:my-14 2xl:my-0">
                        <?php echo $heading ?>
                    </h1>
                </div>
            <?php endif ;?>
            <div class="col-span-full lg:col-span-1 relative pb-[66%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
            <?php if($icon['url']) : ?>
                <div class="col-span-full flex justify-center z-20 pointer-events-none mt-20 | lg:mt-0 lg:absolute lg:-bottom-12 lg:left-0 lg:w-full">
                    <img class="" src="<?php echo $icon['url'] ?>" alt="">
                </div>
            <?php endif ;?>
        </div>
    </section>
<?php endif ;?>