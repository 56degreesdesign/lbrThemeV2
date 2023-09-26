<!-- Site footer markup goes here -->
<?php
$footer = get_field('footer', 'option') ?? false;
$find_us = $footer['find_us'] ?? false;
$downloads = $footer['downloads'] ?? false;
$social_media = $footer['social_media'] ?? false;
$bg = $footer['background_image'] ?? false;
$hidden = $args['hidden'] ?? false;
if (!$hidden) :
?>
<footer class="bg-black text-beige relative pb-7">
    <img class="absolute top-0 left-0 w-full h-full object-cover pointer-events-none" src="<?php echo $bg['url']?>" alt="">
    <div class="container grid grid-cols-1 lg:grid-cols-3 pt-14">
        
        <?php if ($find_us['heading'] && $find_us['content']) : ?>
        <div class="col-span-1 flex justify-center mb-10 lg:mb-0 lg:justify-end">
            <div class="flex flex-col items-center">
                <h6 class="uppercase text-30 font-bold text-center mb-10"><?php echo $find_us['heading'] ?></h6>
                <div class="text-center text-17 footer-links">
                    <?php echo $find_us['content'] ?>
                </div>
                <div class="mt-auto text-17 underline font-bold">PURCHASER DOCUMENTS</div>
            </div>
        </div>
        <?php endif ;?>
        
        <?php if ($downloads['heading'] && $downloads['content']) : ?>
        <div class="col-span-1 mb-10 lg:mb-0">
            <h6 class="uppercase text-30 font-bold text-center mb-10"><?php echo $downloads['heading'] ?></h6>
            <div class="text-center text-17 leading-1.25 footer-links">
                <?php echo $downloads['content'] ?>
            </div>
        </div>
        <?php endif ;?>
        
        <div class="col-span-1 flex justify-center mb-10 lg:mb-0 lg:justify-start">
            <div class="flex flex-col items-center">
                <img class="mb-10 lg:mb-4" src="<?php echo $social_media['icon']['url'] ?>" alt="">
                <div class="text-center text-17 leading-1.25 footer-links flex gap-x-12 lg:flex-col">
                    <?php echo $social_media['links'] ?>
                </div>
                <div class="mt-auto text-17 underline font-bold">SALES DISCLOSURE PACKAGE</div>
            </div>
        </div>
        
    </div>
    <div class="container grid-layout">
        <div class="col-span-full lg:col-start-2 lg:col-span-10 text-center mb-5 text-14 lg:mt-24"><?php echo $footer['copy'] ?></div>
        <div class="col-span-full lg:col-start-2 lg:col-span-10 text-center text-14"><?php echo $footer['copy_subtext'] ?></div>
        <?php if($footer['copy_icons']) : ?>
        <div class="col-span-full row-start-1 mb-5 lg:mb-0 lg:row-start-auto lg:col-start-12 lg:col-span-1 flex justify-center lg:justify-end">
            <img class="max-h-[26px]" src="<?php echo $footer['copy_icons']['url'] ?>" alt="">
        </div>
        <?php endif ;?>
    </div>
</footer>
<?php endif ;?>
<?php get_template_part( 'templates/partials/document-close' );
