<?php 
$section = $args['data'] ?? false;
$heading = $section['heading'] ?? false;
$background_image = $section['background_image'] ?? false;
$location = $section['location'] ?? false;
?>

<?php if ($section) : ?>
    <section class="flex items-end relative pt-[444px]">
        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $background_image, 'class' => 'w-full -z-10']); ?>
        <div class="container grid-layout">
                <div class="col-start-2 col-span-10 flex justify-center">
                   <h1 class="txt-h1 text-beige mb-24"><?php echo $heading ?></h1>
                </div>
        </div>
        <div class="absolute bottom-10 left-0 w-full pointer-events-none flex justify-center">
            <?php get_template_part('templates/partials/nav-arrow', null, ['fill' => '#EEE3D6', 'class' => 'rotate-90']); ?>
        </div>
        <div class="absolute bottom-[43.43%] left-0 w-full">
            <div class="container grid-layout max-w-[1920px] mx-auto">
                <div class="col-start-1 col-span-3 flex gap-x-64">
                    <?php foreach ($location['north'] as $item) : ?>
                        <span class="text-22 font-bold uppercase text-beige"><?php echo $item['label'] ?></span>
                    <?php endforeach ;?>
                </div>
                <div class="col-start-9 col-span-4 flex justify-end gap-x-64">
                    <?php foreach ($location['west'] as $item) : ?>
                        <span class="text-22 font-bold uppercase text-beige"><?php echo $item['label'] ?></span>
                    <?php endforeach ;?>
                </div>
                
            </div>
          
        </div>
        
    </section>
<?php endif ;?>

<section class="bg-beige-light pt-24 pb-20">
    <div class="container grid-layout">
        <h2 class="col-span-full txt-h1 text-beige">Designed <br> to <br> blend in</h2>
    </div>
</section>
<section class="bg-beige-light pt-14 pb-20">
    <div class="container grid-layout">
        <div class="col-span-full uppercase text-15 font-bold text-center mb-6">SELECT A CASITA TO EXPLORE</div>
        <div class="col-span-full flex justify-center mb-5">
            <div class="w-fit border-b border-orange pl-14 pb-2.5 flex gap-x-9 items-center">
                <h2 class="txt-h2 text-orange">strata</h2>
                <div class="mt-2.5"><?php get_template_part('templates/partials/arrow-down', null, ['fill' => '#CC885D' ]); ?></div>
            </div>
        </div>
        <div class="col-start-4 col-span-6 flex flex-col justify-center items-center">
            <h5 class="uppercase font-bold text-16 mb-16 text-center">1,500 SF — 1,600 SF <br>
                2 BEDROOM CASITAS, 1 OR 2 STORY AVAILABLE</h5>
            <p class="text-center text-26 mb-16">Timeless 2-bedroom casitas where treading-lightly meets sophisticated design, immersing you in the surrounding desert landscape with both indoor and outdoor living. </p>
            <a class="bg-orange uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300 " href="#">
                DOWNLOAD INTERIOR FINISH PACKAGES</a>
        </div>
    </div>
</section>

<section class="bg-beige-light pb-40">
    <div class="container grid-layout">
        <div class="col-start-1 col-span-6">
            <div class="relative pb-[64%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $background_image, 'class' => 'w-full']); ?>
            </div>
            <div class="flex justify-between mt-9">
                <div class="flex flex-col">
                    <div class="mb-4 txt-h5 cursor-pointer">NEXT</div>
                    <div class="txt-h5 opacity-50 cursor-pointer">PREVIOUS</div>
                </div>
                <div class="txt-h5">1 / 2</div>
            </div>
          
        </div>
        <div class="col-start-7 col-span-3 flex flex-col">
            <div class="relative pb-[69%] mb-10">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $background_image, 'class' => 'w-full']); ?>
            </div>
          <p class="txt-1 font-bold">SUSTAINABLE DESIGN
          </p>
            <p class="txt-1">Casitas follow the natural grade of the land for minimized impact with natural outdoor landscaping designed for water conservation. </p>
        </div>
        <div class="col-start-10 col-span-3">
            <div class="relative pb-[134%]">
                <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $background_image, 'class' => 'w-full']); ?>
            </div>
            <p class="txt-1 font-bold mt-9">THOUGHTFUL LIVING
            </p>
            <p class="txt-1">You have the flexibility to choose your desired high-end finishes and color palette to truly make your casita
                your own.</p>
        </div>
    </div>
</section>

<section class="">
    <div class="relative">
        <div class="w-1/2 bg-beige absolute top-0 left-0 h-full -z-10"></div>
        <div class="w-1/2 bg-beige-light absolute top-0 right-0 h-full -z-10"></div>
        <div class="grid grid-cols-2 h-full max-w-[1920px] mx-auto z-10">
            <div class="col-span-1 bg-beige pl-[3.563rem] pt-14 pb-20">
               <div class="flex flex-col gap-y-11 mb-12">
                   <svg id="Component_16_1" data-name="Component 16 – 1" xmlns="http://www.w3.org/2000/svg" width="24.411" height="24.411" viewBox="0 0 24.411 24.411">
                       <path id="Path_53943" data-name="Path 53943" d="M-12656.9-19813.566h24.411" transform="translate(12656.901 19825.77)" fill="none" stroke="#000" stroke-width="1"/>
                       <path id="Path_53944" data-name="Path 53944" d="M0,0H24.412" transform="translate(12.206 -0.001) rotate(90)" fill="none" stroke="#000" stroke-width="1"/>
                   </svg>
                   <svg xmlns="http://www.w3.org/2000/svg" width="24.411" height="1" viewBox="0 0 24.411 1">
                       <path id="Path_53945" data-name="Path 53945" d="M-12656.9-19813.566h24.411" transform="translate(12656.901 19814.066)" fill="none" stroke="#000" stroke-width="1"/>
                   </svg>

               </div>
                <div class="flex justify-center px-[21.67%]">
                    <div class="w-full relative pb-[151.93%]">
                        <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/floor-plan.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-span-1 bg-beige-light">
                <div class="grid grid-cols-2">
                    <div class="col-span-1">
                        <div class="border border-orange py-8 text-orange txt-h5 text-center">ONE STORY CASITA</div>
                    </div>
                    <div class="col-span-1">
                        <div class="bg-orange py-8 text-white txt-h5 text-center h-full">TWO STORY CASITA</div>
                    </div>
             </div>
                <div class="flex flex-col justify-center items-center h-full">
                    <h3 class="txt-h2 mb-12">STRATA<br>
                        ONE STORY CASITA<br>
                        2 BED / 2.5 BATH<br>
                        Single GARAGE
                    </h3>
                    <p class="txt-h5 text-center mb-14">LOCATED ON LOTS<br>
                        18 – 21</p>
                    <div class="flex gap-x-8 mb-24">
                        <a class="border border-black uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-black font-bold rounded-full hover:opacity-70 duration-300 " href="#">
                            With Stairs</a>
                        <a class="bg-black uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300 " href="#">
                            without stairs</a>
                    </div>
                    <a class="bg-orange uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300 " href="#">
                        DOWNLOAD floor plan</a>
                </div>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="relative pb-[46%]">
        <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $background_image, 'class' => 'w-full']); ?>
    </div>
</section>

<section class="bg-beige-light pt-24 pb-16">
    <div class="container grid-layout">
        <div class="col-span-full flex flex-col items-center justify-center">
            <h2 class="txt-h2 mb-7">Spire</h2>
            <h5 class="txt-h5 text-center mb-4">CUSTOM BUILT CASITAS FROM<br>
                THE GROUND UP</h5>
            <p class="txt-1 text-center mb-11">This is a future limited release of customized Casita designs for<br> your dream casita in Moab of up to 3,000 square feet.</p>
            <a class="bg-orange uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300 " href="#">
                inquire</a>
        </div>
        <div class="col-start-1 col-span-8 relative pb-[45.3012%]">
            <img class="absolute-full object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/img/spire.png" alt="">
        </div>
    </div>
</section>
