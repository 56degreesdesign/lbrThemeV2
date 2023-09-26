<?php get_template_part( 'templates/partials/document-open' ); ?>

<!-- Site header markup goes here -->
<?php 
$logo = get_field('logo', 'option') ?? false;
$hidden = $args['hidden'] ?? false;
if (!$hidden) :
?>

<header class="fixed top-0 left-0 w-full z-20">
    <?php get_template_part('templates/partials/navbar') ?>
</header>
    <div class="menu-wrapper fixed w-full h-screen top-0 left-0 translate-x-full overflow-auto z-[60]">
        <div class="w-1/2 bg-orange absolute top-0 left-0 h-full -z-10"></div>
        <div class="w-1/2 bg-green absolute top-0 right-0 h-full -z-10"></div>
        <div class="grid grid-cols-2 h-full max-w-[1920px] mx-auto z-10">
            <div class="col-span-1 bg-orange pl-[3.563rem] pt-8 pb-20 flex flex-col justify-stretch">
                <?php get_template_part('templates/partials/lbr-logo') ?>
                <div class="flex flex-col items-center mt-28">
                    <img class="mb-6" src="<?php echo $logo['url']?>" alt="">
                    <h4 class="txt-h4 mb-9">downloads</h4>
                    <p class="text-center text-16 font-bold uppercase underline underline-offset-4 mb-14">DOWNLOAD ALL<br><br>
                        FULL SITE PLAN<br><br>
                        PHASE 1 SITE PLAN<br><br>
                        STRATA CASITA FLOOR PLANS<br><br>
                        MESA CASITA FLOOR PLANS<br><br>
                        ARROYO FINISH PACKAGE<br><br>
                        DUNE FINISH PACKAGE<br><br>
                        BROCHURE</p>
                    <div class="h-px bg-black w-[38.645%] mb-10"></div>
                    <h4 class="txt-h4 mb-9">upcoming events</h4>
                    <p class="text-center text-16 font-bold mb-8">Site Tour <br>
                        Monday 24TH January</p>
                    <a class="bg-black uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300" href="#">
                        rsvp</a>
                </div>
                <div class="flex justify-between pr-16 mt-auto">
                    <span class="text-16 font-bold uppercase underline underline-offset-4">instagram</span>
                    <span class="text-16 font-bold uppercase underline underline-offset-4">VIEW CONSTRUCTION CAMERA</span>
                    <span class="text-16 font-bold uppercase underline underline-offset-4">facebook</span>
                </div>
            </div>
            <div class="col-span-1 bg-green pr-[3.563rem] pt-8 pb-20 flex flex-col justify-stretch text-white">
                <div class="grid grid-cols-6">
                    <div class="col-start-2 col-span-4 flex justify-center text-16 font-bold">
                        <span>MOAB, UT  — </span>
                        <p class="currentDateTime"></p><span>&nbsp</span>
                        <p class="currentWeather underline underline-offset-2"></p>
                    </div>
                    <div class="col-start-6 col-span-1 flex justify-end">
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
                    <span class="text-16 font-bold uppercase underline underline-offset-4">PURCHASER DOCUMENTS</span>
                </div>
            </div>
        </div>
    </div>
<?php endif ;?>