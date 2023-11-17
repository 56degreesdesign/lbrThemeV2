<!-- Site footer markup goes here -->
<?php
$footer = get_field('footer', 'option') ?? false;
$find_us = $footer['find_us'] ?? false;
$downloads = $footer['downloads'] ?? false;
$social_media = $footer['social_media'] ?? false;
$bg = $footer['background_image'] ?? false;
$hidden = $args['hidden'] ?? false;
$links = get_field('links', 'option') ?? false;

if (!$hidden) :
?>
<footer class="bg-black text-beige relative pb-14 lg:pb-7">
    <img class="absolute top-0 left-0 w-full h-full object-cover pointer-events-none opacity-60" src="<?php echo $bg['url']?>" alt="">
    <div class="container grid grid-cols-1 pt-11 lg:grid-cols-3 lg:pt-14">

        <?php if ($downloads['heading'] && $downloads['content']) : ?>
            <div class="col-span-1 mb-10 hidden lg:block lg:mb-0 lg:justify-end">
                <h6 class="uppercase text-20 mb-5 font-bold text-center lg:mb-10 lg:text-30"><?php echo $downloads['heading'] ?></h6>
                <div class="text-center text-14 lg:text-17 leading-1.25 footer-links">
                    <?php echo $downloads['content'] ?>
                </div>
            </div>
        <?php endif ;?>
        
      
        <div class="col-span-1 row-start-2 mb-10 lg:mb-0 lg:row-start-auto">
            <h6 class="uppercase text-20 mb-8 font-bold text-center lg:mb-10 lg:text-30">Discover</h6>
            <div class="text-center text-14 lg:text-17 leading-1.25 footer-links">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'fs_footer_menu',
                    'container' => false,
                    'menu_class' => 'footer-menu',
                ));
                ?>
            </div>
        </div>
        
        <?php if ($find_us['heading'] && $find_us['content']) : ?>
            <div class="col-span-1 flex justify-center row-start-1 lg:row-start-auto lg:justify-start">
                <div class="flex flex-col items-center">
                    <h6 class="uppercase text-20 mb-8 font-bold text-center lg:mb-10 lg:text-30"><?php echo $find_us['heading'] ?></h6>
                    <div class="text-center text-14 lg:text-17 footer-links">
                        <?php echo $find_us['content'] ?>
                    </div>
                </div>
            </div>
        <?php endif ;?>
        
    </div>
    <div class="container grid-layout lg:pb-0 lg:mt-11">
        <div class="col-span-full grid grid-cols-2 items-center gap-y-6 justify-center gap-x-2 lg:flex lg:gap-x-16 footer-links">
            <a class="col-span-1 row-start-1 ml-auto" href="<?php echo $links['instagram']['url'] ?>" target="<?php echo $links['instagram']['target'] ?>"><?php echo $links['instagram']['title'] ?></a>
            <img class="col-span-full mx-auto mb-12 lg:mb-0 lg:mx-0" src="<?php echo $social_media['icon']['url'] ?>" alt="">
            <a class="col-span-1 row-start-1 mr-auto" href="<?php echo $links['facebook']['url'] ?>" target="<?php echo $links['facebook']['target'] ?>"><?php echo $links['facebook']['title'] ?></a>

        </div>
        <div class="footer-copy col-span-full lg:col-start-2 lg:col-span-10 text-center lg:mb-5 text-12 md:text-13 lg:text-14 lg:mt-16"><?php echo $footer['copy'] ?></div>
        <div class="footer-copy col-span-full hidden lg:block lg:col-start-2 lg:col-span-10 text-center text-13 lg:text-14"><?php echo $footer['copy_subtext'] ?></div>
        <?php if($footer['copy_icons']) : ?>
        <div class="col-span-full mb-5 lg:mb-0 row-start-2 lg:row-start-auto lg:col-start-12 lg:col-span-1 flex justify-center lg:justify-end">
            <img class="max-h-[21px]" src="<?php echo $footer['copy_icons']['url'] ?>" alt="">
        </div>
        <?php endif ;?>
    </div>
</footer>
<?php endif ;?>
<?php get_template_part( 'templates/partials/document-close' );
