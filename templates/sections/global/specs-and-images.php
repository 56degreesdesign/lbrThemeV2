<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$description = $section['description'] ?? false;
$list = $section['list'] ?? false;
$images = $section['images'] ?? false;
$image = $section['image'] ?? false;
if($section) :
?>
    <section class="bg-beige-light pt-11 md:pt-12 lg:pt-24 lg:pb-14 2xl:pt-52 xl:pb-80 relative">
        <div class="container grid-layout">
            <?php if($content && $image) :?>
                <div class="col-span-full lg:col-start-1 lg:col-span-4 lg:row-span-2 lg:sticky lg:top-28">
                    <div class="house-page-content wysiwyg mb-7 text-center lg:mb-20 lg:text-left 2lg:mb-24"><?php echo $content ?></div>
                    <div class="mb-7 relative pb-[64.65%] lg:mb-0">
                        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image, 'class' => 'w-full']); ?>
                    </div>
                </div>
            <?php endif ;?>
            <?php if($description) :?>
                <div class="text-20 2lg:text-22 2xl:text-26 col-span-full text-center leading-1.38 mb-11 lg:text-left lg:col-start-7 lg:col-span-6 lg:mb-14 2xl:mb-36"><?php echo $description ?></div>
            <?php endif ;?>
            <?php if($list) :?>
                <div class="hidden lg:block col-span-full pl-6 mb-24 wysiwyg pt-10 lg:pl-0 lg:col-start-7 lg:col-span-6 lg:mb-12 xl:pt-16 2xl:mb-24"><?php echo $list ?></div>
                <div class="accordion-list col-span-full pb-11 lg:hidden">
                    <div class="accordion-list-content accordion-list-content__no-gradient w-full" style="max-height: 0px;">
                        <div class="overflow-hidden pl-6 pb-10 pt-11 md:pt-14 border-t wysiwyg">
                            <?php echo $list ?>
                        </div>
                    </div>
                    <button class="accordion-list-button block uppercase text-orange underline font-bold txt-h4 text-center mx-auto | lg:mx-0 lg:text-left">
                        <span>VIEW MORE</span>
                        <span class="hidden">Close</span>
                    </button>
                </div>
            <?php endif ;?>

            <div class="col-span-full lg:col-start-7 pb-12 lg:pb-0 lg:col-span-6 lg:grid lg:grid-cols-2 gap-x-[30px]">
                <?php foreach ($images as $image) : ?>
                    <div class="mb-7 md:mb-8 2xl:mb-14 <?php echo ($image['size']) ? 'lg:col-span-2' : 'lg:col-span-1'; ?>">
                        <div class="relative <?php echo ($image['tall']) ? 'pb-[134.96%]' : 'pb-[64.527%]'; ?>">
                            <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $image['image'], 'class' => 'w-full']); ?>
                        </div>
                        <?php if($image['image_description']) :?>
                            <div class="wysiwyg mt-4 lg:mt-8 2xl:mt-10 house-page-content"><?php echo $image['image_description'] ?></div>
                        <?php endif ;?>
                    </div>
                <?php endforeach;?>
            </div>
        </div>
    </section>
<?php endif ;?>
