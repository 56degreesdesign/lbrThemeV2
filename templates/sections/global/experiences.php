<?php 
$section = $args['data'] ?? false;
$img1 = $section['img1'] ?? false;
$img2 = $section['img2'] ?? false;
$img3 = $section['img3'] ?? false;

?>

<!--<section id="testing" class="bg-beige py-10 md:py-14 lg:pt-20 lg:pb-24">-->
<!--    <div class="container grid-layout">-->
<!--        <div class="col-span-full uppercase text-15 font-bold text-center mb-6">filter by experience</div>-->
<!--        <div class="col-span-full flex justify-center mb-10 md:mb-14 lg:mb-24">-->
<!--            <div class="w-fit border-b border-orange pl-14 pb-2.5 flex gap-x-9 items-center">-->
<!--                <h2 class="txt-h2 text-orange">hiking trails</h2>-->
<!--                <div class="mt-2.5">--><?php //get_template_part('templates/partials/arrow-down', null, ['fill' => '#CC885D' ]); ?><!--</div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-span-full flex flex-col justify-center items-center lg:col-start-4 lg:col-span-6">-->
<!--            <h5 class="uppercase font-bold text-16 mb-6">HIKE ACROSS TWO national parkS</h5>-->
<!--            <p class="text-center text-17">Praesent a lorem sit amet nunc tempus consequat et vitae lacus. Interdum et malesuada fames ac ante ipsum primis-->
<!--                in faucibus. Donec posuere lorem ex, non vestibulum metus tristique quis. In nisl purus, viverra at egestas non,-->
<!--                molestie sed tellus. Nulla id ligula malesuada, aliquam turpis vel, semper lacus.</p>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<!--<section class="bg-beige">-->
<!--    <div class="container">-->
<!--        <div class="bg-black w-full h-px"></div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="bg-beige pt-14">-->
<!--    <div class="container grid-layout">-->
<!--        <div class="col-start-7 col-span-full txt-h5 mb-3.5">FEATURED</div>-->
<!--        <div class="col-start-1 col-span-2 flex flex-col">-->
<!--            <div class="mb-4 swiper-nav">NEXT</div>-->
<!--            <div class="swiper-nav">PREVIOUS</div>-->
<!--        </div>-->
<!--        <div class="col-start-7 col-span-6 lg:mb-20 xl:mb-32">-->
<!--            <div class="flex justify-between items-center mb-10">-->
<!--                <div class="txt-h3">Double Arch Trail</div>-->
<!--                <div class="txt-h5">1 / 2</div>-->
<!--            </div>-->
<!--            <div class="pr-48">Praesent a lorem sit amet nunc tempus consequat et vitae lacus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec posuere lorem ex, non vestibulum metus tristique quis. In nisl purus, viverra at egestas non, molestie sed tellus. Nulla id ligula malesuada, aliquam turpis vel, semper lacus.</div>-->
<!--        </div>-->
<!--        <div class="col-start-1 col-span-6">-->
<!--            <div class="relative pb-[64%] h-full">-->
<!--                --><?php //get_template_part('templates/partials/images/image', 'bg', ['image' => $img1, 'class' => 'w-full']); ?>
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-start-7 col-span-3 flex flex-col">-->
<!--            <div class="relative pb-[69%] mb-7 xl:mb-12">-->
<!--                --><?php //get_template_part('templates/partials/images/image', 'bg', ['image' => $img2, 'class' => 'w-full']); ?>
<!--            </div>-->
<!--            <div class="font-Reckless txt-h3 ">EASY - 1.6MI <br>-->
<!--                1-2 hours <br>-->
<!--                FROM LBR:  41MI</div>-->
<!--            <div class="flex h-full items-end justify-center">-->
<!--                <a class="bg-orange uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300" href="#">-->
<!--                    trailhead</a>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-start-10 col-span-3">-->
<!--            <div class="relative pb-[134%] h-full">-->
<!--                --><?php //get_template_part('templates/partials/images/image', 'bg', ['image' => $img3, 'class' => 'w-full']); ?>
<!---->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="col-span-full h-px bg-black mt-24"></div>-->
<!--    </div>-->
<!--</section>-->
<!---->
<!--<section class="bg-beige pt-14 pb-12 md:pb-20 lg:pb-40 xl:pb-44">-->
<!--    <div class="container grid-layout">-->
<!--        <div class="col-span-full txt-h5 mb-4 md:mb-7 lg:mb-12">Trails</div>-->
<!--        -->
<!--        <div class="col-span-full md:col-span-6 lg:col-span-4 border-b pb-12 mb-5 lg:mb-0">-->
<!--            <h4 class="txt-h3 mb-6">Double Arch Trail</h4>-->
<!--            <p class="text-17 mb-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis-->
<!--                ipsum quis risus feugiat consectetur. Donec pretium, nibh eu tempus-->
<!--                pulvinar, turpis odio ultrices quam Integer eu vehicula nisl. </p>-->
<!--            <div class="text-16 font-bold mb-2.5 leading-1.56">Difficult  |  6MI  |  5-6 Hours</div>-->
<!--            <div class="text-16 font-bold leading-1.56 mb-12">FROM LBR:  41MI</div>-->
<!--            <a class="bg-orange uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300" href="#">-->
<!--                trailhead</a>-->
<!--        </div>-->
<!---->
<!--        <div class="col-span-full md:col-span-6 lg:col-span-4 border-b pb-12 mb-5 lg:mb-0">-->
<!--            <h4 class="txt-h3 mb-6">Double Arch Trail</h4>-->
<!--            <p class="text-17 mb-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis-->
<!--                ipsum quis risus feugiat consectetur. Donec pretium, nibh eu tempus-->
<!--                pulvinar, turpis odio ultrices quam Integer eu vehicula nisl. </p>-->
<!--            <div class="text-16 font-bold mb-2.5 leading-1.56">Difficult  |  6MI  |  5-6 Hours</div>-->
<!--            <div class="text-16 font-bold leading-1.56 mb-12">FROM LBR:  41MI</div>-->
<!--            <a class="bg-orange uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300" href="#">-->
<!--                trailhead</a>-->
<!--        </div>-->
<!---->
<!--        <div class="col-span-full md:col-span-6 lg:col-span-4 border-b pb-12 mb-5 lg:mb-0">-->
<!--            <h4 class="txt-h3 mb-6">Double Arch Trail</h4>-->
<!--            <p class="text-17 mb-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus facilisis-->
<!--                ipsum quis risus feugiat consectetur. Donec pretium, nibh eu tempus-->
<!--                pulvinar, turpis odio ultrices quam Integer eu vehicula nisl. </p>-->
<!--            <div class="text-16 font-bold mb-2.5 leading-1.56">Difficult  |  6MI  |  5-6 Hours</div>-->
<!--            <div class="text-16 font-bold leading-1.56 mb-12">FROM LBR:  41MI</div>-->
<!--            <a class="bg-orange uppercase px-12 pt-2.5 pb-2 text-15 w-fit text-white font-bold rounded-full hover:opacity-70 duration-300" href="#">-->
<!--                trailhead</a>-->
<!--        </div>-->
<!--        <div class="col-span-full mt-10 md:mt-12 flex justify-center lg:mt-20 xl:mt-24">-->
<!--            <p class="txt-h4 underline text-orange cursor-pointer">View more</p>-->
<!--        </div>-->
<!--        -->
<!--    </div>-->
<!--</section>-->
