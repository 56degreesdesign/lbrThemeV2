<?php get_template_part( 'templates/partials/document-open' ); ?>

<!-- Site header markup goes here -->
<?php 
$logo = get_field('logo', 'option') ?? false;
$links = get_field('links', 'option') ?? false;
$hidden = $args['hidden'] ?? false;
$footer = get_field('footer', 'option') ?? false;
$downloads = $footer['downloads'] ?? false;
$events = get_field('header', 'option')['upcoming_event'] ?? false;


if (!$hidden) :
?>

    <header class="fixed top-0 left-0 w-full z-20">
        <div class="w-full shadow-lg bg-beige">
            <div class="container flex justify-between py-6 xl:py-8 bg-beige flex-wrap" >
                <a class="flex items-center" href="/">
                    <?php get_template_part('templates/partials/lbr-logo', null, ['colour' => 'black']) ?>
                </a>
                <div class="flex items-center gap-x-20">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'fs_nav_menu',
                        'container' => false,
                        'menu_class' => 'main-menu-test',
                    ));
                    ?>
                    <button class="toggle-menu rounded-full border uppercase px-5 xl:px-10 pt-2.5 pb-2 text-15 w-fit text-center">Explore more</button>
                </div>
                <div class="w-full casitas-submenu">
                    <div class="w-full grid grid-cols-3 2xl:pl-[15.56%]">
                        <div class="col-span-1 flex gap-x-6 pr-11 pb-6 pt-3 border-r xl:ml-12 mt-12">
                            <div class="flex flex-col 2xl:w-[57.33%]">
                                <h3 class="txt-h3 mb-1.5"> Strata</h3>
                                <p class="text-11 font-bold mb-8">2 BEDROOM CASITAS</p>
                                <a class="bg-orange uppercase px-5 xl:px-10 pt-2.5 pb-2 text-10 w-fit text-center text-white font-bold rounded-full hover:opacity-70 duration-300" href="#">
                                    view casita</a>
                            </div>
                        
                           
                            <div class="w-full">
                                <div class="relative pb-[64%] w-full">
                                    <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/test-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 flex gap-x-6 pr-11 pb-6 pt-3 border-r xl:ml-12 mt-12">
                            <div class="flex flex-col 2xl:w-[57.33%]">
                                <h3 class="txt-h3 mb-1.5">Mesa</h3>
                                <p class="text-11 font-bold mb-8">2 BEDROOM CASITAS</p>
                                <a class="bg-orange uppercase px-5 xl:px-10 pt-2.5 pb-2 text-10 w-fit text-center text-white font-bold rounded-full hover:opacity-70 duration-300" href="#">
                                    view casita</a>
                            </div>
                            <div class="w-full">
                                <div class="relative pb-[64%] w-full">
                                    <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/test-img.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-span-1 flex gap-x-6 pb-6 pt-3 xl:ml-12 mt-12">
                            <div class="flex flex-col 2xl:w-[57.33%]">
                                <h3 class="txt-h3 mb-1.5"> Spire</h3>
                                <p class="text-11 font-bold mb-8">2 BEDROOM CASITAS</p>
                                <a class="bg-orange uppercase px-5 xl:px-10 pt-2.5 pb-2 text-10 w-fit text-center text-white font-bold rounded-full hover:opacity-70 duration-300" href="#">
                                    view casita</a>
                            </div>
                            <div class="w-full">
                                <div class="relative pb-[64%] w-full">
                                    <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/spire.png" alt="">
                                </div>
                            </div>

                        
                        </div>
                    </div>
                </div>
             
            </div>
        </div>

    </header>

<!--<header class="fixed top-0 left-0 w-full z-20">-->
<!--    --><?php //get_template_part('templates/partials/navbar') ?>
<!--</header>-->
    <div class="menu-wrapper fixed w-full h-screen top-0 left-0 translate-x-full overflow-auto z-[60]">
        <div class="w-1/2 bg-orange absolute top-0 left-0 h-full -z-10"></div>
        <div class="w-1/2 bg-green absolute top-0 right-0 h-full -z-10"></div>
        <div class="grid grid-cols-2 h-full max-w-[1920px] mx-auto z-10">
            <div class="col-span-1 bg-orange  pt-8 pb-20 flex flex-col justify-stretch xl:pl-[3.563rem]">
                <div class="pl-[25px] md:pl-10 lg:pl-[2.5rem] xl:pl-0">
                    <?php get_template_part('templates/partials/lbr-logo') ?>
                </div>
                <div class="flex flex-col items-center mt-10 mb-5 md:mt-16 lg:mt-20 xl:mt-28">
                    <img class="mb-4 max-w-[72px] md:max-w-none md:mb-6" src="<?php echo $logo['url']?>" alt="">
                    <?php if($downloads['heading']) : ?>
                        <h4 class="txt-h4 mb-5 md:mb-7 lg:mb-9"><?php echo $downloads['heading'] ?></h4>
                    <?php endif ;?>
                    <?php if($downloads['content']) : ?>
                        <div class="header-links mb-7 md:mb-10 xl:mb-14">
                            <?php echo $downloads['content'] ?>
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
                <div class="flex justify-between gap-y-3 mt-auto flex-col items-center xl:flex-row xl:pr-16">
                    <?php if ($links['instagram']) : ?>
                    <a class="text-16 font-bold uppercase underline-animation-black text-center w-fit" href="<?php echo $links['instagram']['url']?>" target="<?php echo $links['instagram']['target'] ?>"><?php echo $links['instagram']['title'] ?></a>
                    <?php endif ;?>
                    <?php if ($links['camera']) : ?>
                        <a class="text-16 font-bold uppercase underline-animation-black text-center w-fit" href="<?php echo $links['camera']['url']?>" target="<?php echo $links['camera']['target'] ?>"><?php echo $links['camera']['title'] ?></a>
                    <?php endif ;?>
                    <?php if ($links['facebook']) : ?>
                        <a class="text-16 font-bold uppercase underline-animation-black text-center w-fit" href="<?php echo $links['facebook']['url']?>" target="<?php echo $links['facebook']['target'] ?>"><?php echo $links['facebook']['title'] ?></a>
                    <?php endif ;?>
                </div>
            </div>
            <div class="col-span-1 bg-green  pt-8 pb-20 flex flex-col justify-stretch text-white xl:pr-[3.563rem]">
                <div class="grid grid-cols-6 lg:pr-[2.5rem] xl:pr-0">
                    <div class="col-span-full flex flex-col justify-center items-center text-16 font-bold md:flex-row md:row-start-2 lg:col-start-2 lg:col-span-4 lg:row-start-auto">
                        <span>MOAB, UT <span class="hidden md:inline">-&nbsp</span></span>
                        <p class="currentDateTime"></p><span class="hidden md:inline">&nbsp</span>
                        <p class="currentWeather underline underline-offset-2"></p>
                    </div>
                    <div class="col-span-full row-start-1 pr-[25px] mb-4 md:pr-10 lg:row-start-auto md:col-start-6 md:col-span-1 flex justify-end lg:mb-0 lg:pr-0">
                        <span class="toggle-menu txt-h4 cursor-pointer">close</span>
                    </div>
                </div>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'fs_nav_menu',
                    'container' => false,
                    'menu_class' => 'main-menu',
                ));
                ?>
                <div class="flex justify-center mt-auto">
                    <?php if ($links['purchaser_documents']) : ?>
                        <a class="text-16 font-bold uppercase underline-animation" href="<?php echo $links['purchaser_documents']['url']?>" target="<?php echo $links['purchaser_documents']['target'] ?>"><?php echo $links['purchaser_documents']['title'] ?></a>
                    <?php endif ;?>
                </div>
            </div>
        </div>
    </div>
<?php endif ;?>