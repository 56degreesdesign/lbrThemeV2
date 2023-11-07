<?php 
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$background_image = $section['background_image'] ?? false;
$location = $section['location'] ?? false;
$button = $section['button'] ?? false;
?>

<?php if ($section) : ?>
    <section class="flex items-end relative z-30 min-h-screen">
        <div class="absolute top-0 left-0 w-full">
            <?php get_template_part('templates/partials/navbar', null, ['colour' => 'white']) ?>
        </div>
        
        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $background_image, 'class' => 'w-full -z-10']); ?>
        <div class="container grid-layout">
                <div class="col-span-full flex justify-center lg:col-start-2 lg:col-span-10">
                    <?php if($heading) : ?>
                        <h1 class="txt-h1 text-beige mb-24"><?php echo $heading ?></h1>
                    <?php endif ;?>
                </div>
        </div>
        <div class="absolute bottom-10 left-0 w-full pointer-events-none flex justify-center">
            <a href="#casitas-explore" class="pointer-events-auto">
                <?php get_template_part('templates/partials/nav-arrow', null, ['fill' => '#EEE3D6', 'class' => 'rotate-90']); ?>
            </a>
        </div>
<!--        <div class="absolute bottom-[35%] xl:bottom-[43.43%] left-0 w-full hidden lg:block">-->
<!--            <div class="container grid-layout max-w-[1920px] mx-auto">-->
<!--                <div class="col-start-1 col-span-3 flex gap-x-20 2xl:gap-x-64">-->
<!--                    --><?php //foreach ($location['north'] as $item) : ?>
<!--                        <span class="text-22 font-bold uppercase text-beige">--><?php //echo $item['label'] ?><!--</span>-->
<!--                    --><?php //endforeach ;?>
<!--                </div>-->
<!--                <div class="col-start-9 col-span-4 flex justify-end gap-x-20 2xl:gap-x-64">-->
<!--                    --><?php //foreach ($location['west'] as $item) : ?>
<!--                        <span class="text-22 font-bold uppercase text-beige">--><?php //echo $item['label'] ?><!--</span>-->
<!--                    --><?php //endforeach ;?>
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="w-full absolute bottom-10 left-0">
            <div class="container w-full pointer-events-none flex justify-end">
                <?php get_template_part( 'templates/partials/button', null, ['data' => $button, 'class' => ''] ) ?>
            </div>
        </div>
    </section>
<?php endif ;?>




<!--<section class="">-->
<!--    <div class="relative">-->
<!--        <div class="w-1/2 bg-beige absolute top-0 left-0 h-full -z-10 hidden xl:block"></div>-->
<!--        <div class="w-1/2 bg-beige-light absolute top-0 right-0 h-full -z-10 hidden xl:block"></div>-->
<!--        <div class="grid grid-cols-2 max-w-[1920px] mx-auto z-10 lg:h-full">-->
<!--            <div class="col-span-full bg-beige px-[25px] pt-7 pb-10 md:px-10 md:pt-14 md:pb-12 lg:pb-16 lg:col-span-1 lg:pr-0 lg:pl-[3.563rem] xl:pb-20">-->
<!--               <div class="flex flex-col gap-y-11 mb-6 md:mb-8 lg:mb-10 xl:mb-12">-->
<!--                   <svg id="Component_16_1" data-name="Component 16 – 1" xmlns="http://www.w3.org/2000/svg" width="24.411" height="24.411" viewBox="0 0 24.411 24.411">-->
<!--                       <path id="Path_53943" data-name="Path 53943" d="M-12656.9-19813.566h24.411" transform="translate(12656.901 19825.77)" fill="none" stroke="#000" stroke-width="1"/>-->
<!--                       <path id="Path_53944" data-name="Path 53944" d="M0,0H24.412" transform="translate(12.206 -0.001) rotate(90)" fill="none" stroke="#000" stroke-width="1"/>-->
<!--                   </svg>-->
<!--                   <svg xmlns="http://www.w3.org/2000/svg" width="24.411" height="1" viewBox="0 0 24.411 1">-->
<!--                       <path id="Path_53945" data-name="Path 53945" d="M-12656.9-19813.566h24.411" transform="translate(12656.901 19814.066)" fill="none" stroke="#000" stroke-width="1"/>-->
<!--                   </svg>-->
<!---->
<!--               </div>-->
<!--                <div class="flex justify-center lg:px-[21.67%]">-->
<!--                    <div class="w-full relative pb-[151.93%]">-->
<!--                        <img class="absolute top-0 left-0 w-full h-full object-cover" src="--><?php //echo get_template_directory_uri(); ?><!--/assets/img/floor-plan.jpg" alt="">-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col-span-full bg-beige-light lg:col-span-1">-->
<!--                <div class="grid grid-cols-2">-->
<!--                    <div class="col-span-1">-->
<!--                        <div class="border border-orange py-4 text-orange txt-h5 text-center | lg:py-5 | xl:py-8">ONE STORY CASITA</div>-->
<!--                    </div>-->
<!--                    <div class="col-span-1">-->
<!--                        <div class="bg-orange py-4 text-white txt-h5 text-center h-full | lg:py-5 | xl:py-8">TWO STORY CASITA</div>-->
<!--                    </div>-->
<!--             </div>-->
<!--                <div class="flex flex-col items-center px-[25px] md:px-10 lg:mt-10 lg:px-0 lg:h-full py-12 md:py-16 lg:py-0 xl:mt-0 xl:justify-center">-->
<!--                    <h3 class="txt-h2 mb-5 md:mb-8 lg:mb-10 xl:mb-12">STRATA<br>-->
<!--                        ONE STORY CASITA<br>-->
<!--                        2 BED / 2.5 BATH<br>-->
<!--                        Single GARAGE-->
<!--                    </h3>-->
<!--                    <p class="txt-h5 text-center mb-7 md:mb-10 xl:mb-14">LOCATED ON LOTS<br>-->
<!--                        18 – 21</p>-->
<!--                    <div class="flex flex-col gap-y-4 gap-x-8 mb-4 lg:mb-24 items-center lg:flex-row">-->
<!--                        <a class="border border-black uppercase px-5 xl:px-12 pt-2.5 pb-2 text-15 w-fit text-black font-bold rounded-full hover:bg-black hover:text-white duration-300 " href="#">-->
<!--                            With Stairs</a>-->
<!--                        <a class="bg-black uppercase border px-5 xl:px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:bg-transparent hover:text-black duration-300 " href="#">-->
<!--                            without stairs</a>-->
<!--                    </div>-->
<!--                    <a class="bg-orange uppercase px-5 xl:px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300 " href="#">-->
<!--                        DOWNLOAD floor plan</a>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

