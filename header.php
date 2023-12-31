<?php get_template_part( 'templates/partials/document-open' ); ?>

<!-- Site header markup goes here -->
<?php 
$logo = get_field('logo', 'option') ?? false;
$links = get_field('links', 'option') ?? false;
$hidden = $args['hidden'] ?? false;
$footer = get_field('footer', 'option') ?? false;
$downloads = $footer['downloads'] ?? false;
$events = get_field('header', 'option')['upcoming_event'] ?? false;
$navbar = get_field('header', 'option')['navbar'] ?? false;
$header_downloads = get_field('header', 'option')['downloads'] ?? false;
if (!$hidden) :
?>
    <?php
        $headrClass = is_front_page() ? '-translate-y-full transition-transform'  : null;
    ?>
    <header class="mobile-menu__header <?= $headrClass; ?> fixed duration-300 top-0 left-0 w-full max-h-[65px] overflow-hidden lg:max-h-none z-40 shadow-md">
        <div class="w-full shadow-lg bg-beige">
            <div class="container flex justify-between py-5 2xl:py-7 bg-beige flex-wrap" >
                <a class="flex items-center" href="/">
                    <?php get_template_part('templates/partials/lbr-logo', null, ['colour' => 'black']) ?>
                </a>
                <div class="menu:hidden">
                    <div class="mobile-menu__btn text-12 tracking-10 font-Oscar uppercase font-bold">
                        <span>MENU</span>
                        <span class="hidden">Close</span>
                    </div>
                </div>
                <div class="items-center hidden lg:flex lg:gap-x-10 xl:gap-x-20">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'fs_nav_menu',
                        'container' => false,
                        'menu_class' => 'main-menu-test',
                    ));
                    ?>
                    <button class="toggle-menu btn btn--beige-explore btn--desktop-sm max-h-[35px] btn--small-text">Explore more</button>
                </div>
                <div class="w-full dropdown-menu">
                    <div class="w-full grid grid-cols-3">
                        <div class="col-span-full min-h-[159px] pb-6 flex justify-between items-end">
                            <div class="flex flex-col">
                                <div class="text-12">
                                    <span><?php echo $navbar['address'] ?></span>
                                </div>
                                <div>
                                    <a class="underline-animation-black text-10 font-bold uppercase" href="<?php echo $navbar['link']['url'] ?>" target="<?php echo $navbar['link']['target'] ?>"><?php echo $navbar['link']['title'] ?></a>
                                </div>
                            </div>
                            <?php get_template_part( 'templates/partials/button', null, ['data' => $navbar['button'], 'class' => 'btn btn--desktop-sm btn--black'] ) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <?php get_template_part('templates/partials/mobile-menu-wrapper'); ?>

    <div class="menu-wrapper fixed w-full h-screen top-0 left-0 z-[60] pointer-events-none">
        <div class="menu-orange w-1/2 bg-orange absolute top-0 left-0 h-full -z-10 pointer-events-auto"></div>
        <div class="menu-green w-1/2 bg-green absolute top-0 right-0 h-full -z-10 pointer-events-auto"></div>
        <div class="grid grid-cols-2 h-full max-w-[1920px] mx-auto z-10 ">
            <div class="menu-orange col-span-1 bg-orange  pt-7 pb-20 flex flex-col justify-stretch pointer-events-auto">
                <div class="pl-[25px] md:pl-10 lg:pl-[2.5rem] xl:pl-[3.563rem] h-[35px] flex items-center">
                    <?php get_template_part('templates/partials/lbr-logo') ?>
                </div>
                <div class="flex flex-col items-center mt-10 mb-5 md:mt-16 lg:mt-20 xl:mt-28">
                    <img class="mb-4 max-w-[72px] md:max-w-none md:mb-6" src="<?php echo $logo['url']?>" alt="">
                    <?php if($downloads['heading']) : ?>
                        <h4 class="txt-h4 mb-5 md:mb-7 lg:mb-9"><?php echo $downloads['heading'] ?></h4>
                    <?php endif ;?>
                    <?php if($downloads['content']) : ?>
                        <div class="header-links mb-7 md:mb-10 xl:mb-14">
                            <?php echo $header_downloads ?>
                        </div>
                    <?php endif ;?>
                    <div class="h-px bg-black w-[38.645%] mb-10"></div>
                    <?php if($events['heading']) : ?>
                        <h4 class="txt-h4 mb-7 xl:mb-9"><?php echo $events['heading'] ?></h4>
                    <?php endif ;?>
                    <?php if($events['content']) : ?>
                        <p class="text-center text-16 font-bold mb-8"><?php echo $events['content'] ?></p>
                    <?php endif ;?>
                    <?php get_template_part( 'templates/partials/button', null, ['data' => $events['button'], 'class' => ''] ); ?>
                </div>
                <div class="flex justify-between gap-y-3 mt-auto flex-col items-center xl:flex-row xl:pr-16 xl:pl-[3.563rem]">
                    <?php if ($links['instagram']) : ?>
                    <a class="text-14 font-bold uppercase underline-animation-black text-center w-fit" href="<?php echo $links['instagram']['url']?>" target="<?php echo $links['instagram']['target'] ?>"><?php echo $links['instagram']['title'] ?></a>
                    <?php endif ;?>
                    <?php if ($links['camera']) : ?>
                        <a class="text-14 font-bold uppercase underline-animation-black text-center w-fit" href="<?php echo $links['camera']['url']?>" target="<?php echo $links['camera']['target'] ?>"><?php echo $links['camera']['title'] ?></a>
                    <?php endif ;?>
                    <?php if ($links['facebook']) : ?>
                        <a class="text-14 font-bold uppercase underline-animation-black text-center w-fit" href="<?php echo $links['facebook']['url']?>" target="<?php echo $links['facebook']['target'] ?>"><?php echo $links['facebook']['title'] ?></a>
                    <?php endif ;?>
                </div>
            </div>
            <div class="menu-green col-span-1 bg-green pt-7 pb-20 flex flex-col justify-stretch text-beige-light pointer-events-auto">
                <div class="grid grid-cols-6 lg:pr-[2.5rem] xl:pr-[3.563rem] h-[35px]">
                    <div class="col-span-full flex flex-col justify-center items-center text-14 font-bold md:flex-row md:row-start-2 lg:col-start-2 lg:col-span-4 lg:row-start-auto">
                        <span>MOAB, UT <span class="hidden md:inline">-&nbsp</span></span>
                        <p class="currentDateTime"></p><span class="hidden md:inline">&nbsp-&nbsp</span>
                        <p class="currentWeather underline underline-offset-2"></p>
                    </div>
                    <div class="col-span-full row-start-1 pr-[25px] mb-4 md:pr-10 items-center lg:row-start-auto md:col-start-6 md:col-span-1 flex justify-end lg:mb-0 lg:pr-0">
                        <span class="toggle-menu text-14 font-bold cursor-pointer uppercase">close</span>
                    </div>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'fs_mega_menu',
                    'container' => false,
                    'menu_class' => 'main-mega-menu',
                ));
                ?>
                <div class="flex justify-center mt-auto">
                    <?php if ($links['purchaser_documents']) : ?>
                        <a class="text-14 font-bold uppercase underline-animation" href="<?php echo $links['purchaser_documents']['url']?>" target="<?php echo $links['purchaser_documents']['target'] ?>"><?php echo $links['purchaser_documents']['title'] ?></a>
                    <?php endif ;?>
                </div>
            </div>
        </div>
    </div>
        <div class="w-full fixed bottom-10 left-0 hidden lg:block z-30 pointer-events-none">
            <div class="container w-full flex justify-end">
                <?php get_template_part('templates/partials/book-now-btn', null, ['class' => 'btn--black btn--small-text']); ?>
            </div>
        </div>
<?php endif ;?>