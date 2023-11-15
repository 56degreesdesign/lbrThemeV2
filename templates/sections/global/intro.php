<?php
$section = $args['data'] ?? false;
$image = $section['image'] ?? false;
$anchor = $section['anchor'] ?? false;
$content = $section['content'] ?? false;
?>
<?php if($section) : ?>
    <section id="<?php echo $anchor?>" class="bg-beige ">
        <div class="grid grid-cols-2 max-w-[1920px] mx-auto relative">
            <div class="col-span-full lg:col-span-1 relative pb-[121%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
            </div>
            <div class="col-span-full wysiwyg flex flex-col justify-center items-center py-20 row-start-1 px-[25px] md:px-10 lg:px-0 lg:py-0 lg:col-start-2 lg:col-span-1">
                <div class="lg:w-[60%]">
                    <?php echo $content ?>
                </div>
            </div>
            <div class="w-full absolute bottom-8 left-0">
                <div class="container w-full pointer-events-none flex justify-end">
                    <a href="/casita-rentals" class="bg-black rounded-full py-2.5 px-10 pointer-events-auto uppercase font-bold text-beige text-14">
                        Book now
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif ;?>