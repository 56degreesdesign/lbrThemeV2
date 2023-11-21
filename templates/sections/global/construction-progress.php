<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$button = $section['button'] ?? false;
$image = $section['image'] ?? false;
if($section):
?>
<section>
    <?php if($content) :?>
    <div class="bg-beige-light lg:bg-beige pt-28 pb-7 md:pb-10 md:pt-32 lg:pt-40 lg:pb-12 xl:pb-20 xl:pt-48">
        <div class="container">
            <div class="wysiwyg wysiwyg--no-margin"><?php echo $content ?></div>
        </div>
    </div>
    <?php endif ;?>
    <div class="flex flex-col-reverse lg:flex-col">
        <div class="bg-beige-light py-6 md:py-8 lg:py-10">
            <div class="container flex justify-between text-14 font-bold leading-1.17 uppercase md:text-15 lg:grid lg:grid-cols-12 lg:text-16 xl:text-17">
                <div class="col-start-1 col-span-2 flex items-center gap-x-5">
                    <?php get_template_part('templates/partials/nav-arrow', null, ['class' => 'rotate-180']) ?>
                    <span class="hidden lg:inline">Jan 12th, 2023</span>
                </div>
                <div class="flex items-center justify-center gap-x-8 mt-1 lg:col-start-4 lg:col-span-6 lg:mt-0 xl:col-start-5 xl:col-span-4">
                    <span>JAN 13TH, 2023</span>
                    <span class="hidden lg:inline">64˚F</span>
                    <span>SHARE</span>
                    <span class="hidden lg:inline">TIMELAPSE</span>
                </div>
                <div class="col-start-11 col-span-2 flex justify-end items-center gap-x-5">
                    <span class="hidden lg:inline">Jan 14th, 2023</span>
                    <?php get_template_part('templates/partials/nav-arrow', null, ['class' => '']) ?>
                </div>
            </div>
        </div>

        <div class="relative pb-[51%]">
            <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full -z-10']); ?>
        </div>
        
    </div>
    
    
</section>

<?php endif ;?>
