<?php
    $links = get_field('links', 'option') ?? false;
    $logo = get_field('logo', 'option') ?? false;
    $footer = get_field('footer', 'option') ?? false;
?>
<div class="mobile-menu__wrapper -translate-y-full duration-300 transition-transform fixed w-full h-screen top-0 left-0 overflow-auto z-[25]">
    <div class="container flex flex-col h-full justify-between">
        <div class="mobile-menu__wrapper__submenu absolute top-0 left-0 w-full z-10">
            <button class="mobile-menu__btn-back sticky top-0 w-full font-bold text-12 text-center bg-orange mb-16 pt-28" aria-label="Back to menu">BACK</button>
            <div class="mobile-menu__wrapper__submenu__wrapper mobile-menu__menu !pt-0">
                
            </div>
        </div>
        <div class="mobile-menu__wrapper__menu duration-500 transition-opacity">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'fs_mobile_nav_menu',
                    'container' => false,
                    'menu_class' => 'mobile-menu__menu',
                ));
            ?>
        </div>
        <div>
            <div class="flex justify-center mb-12 gap-x-1">
                <?php if ($links['instagram']) : ?>
                    <a class="text-14 font-bold uppercase underline text-center tracking-10" href="<?php echo $links['instagram']['url']?>" target="<?php echo $links['instagram']['target'] ?>"><?php echo $links['instagram']['title'] ?></a>
                <?php endif ;?>
                <?php if ($links['facebook']) : ?>
                    <a class="text-14 font-bold uppercase underline text-center tracking-10" href="<?php echo $links['facebook']['url']?>" target="<?php echo $links['facebook']['target'] ?>"><?php echo $links['facebook']['title'] ?></a>
                <?php endif ;?>
            </div>
            <div class="mb-12">
                <img class="mx-auto max-w-[97px]" src="<?= $logo['url']?>" alt="LBR MOAB UT">
            </div>
            <div class="text-13 text-center mb-7">
                <?= $footer['copy_mobile']; ?>
            </div>
        </div>
    </div>
</div>