<?php
$section = $args['data'];
$heading = $section['heading'] ?? false;
$slides = $section['slides'] ?? false;
$background = $section['background'] ?? false;
?>
<?php if($section) : ?>
 <section class="bg-orange py-40 relative overflow-hidden">
     <img class="absolute top-0 left-0 w-full h-full object-cover pointer-events-none" src="<?php echo $background['url']?>" alt="">
     <div class="container grid-layout">
         <div class="col-start-1 col-span-4 flex items-center">
             <h3 class="text-center w-full txt-h2"><?php echo $heading ?></h3>
         </div>
         <div class="col-start-5 col-span-8 relative -mr-[60px]">
             <div class="swiper swiper-carousel">
                 <div class="swiper-wrapper">
                     <?php foreach ($slides as $slide) : ?>
                         <div class="swiper-slide h-full w-full">
                             <div class="relative bg-blue pb-[100%]">
                                 <?php get_template_part('templates/partials/images/image', 'bg', ['image' => $slide, 'class' => 'w-full']); ?>
                                 <svg class="absolute top-3.5 left-3.5" xmlns="http://www.w3.org/2000/svg" width="29.61" height="29.61" viewBox="0 0 29.61 29.61">
                                     <g id="Group_125387" data-name="Group 125387" transform="translate(-4.079 -4.079)">
                                         <path id="Path_128673" data-name="Path 128673" d="M18.884,6.747c3.953,0,4.421.015,5.983.086a8.2,8.2,0,0,1,2.749.51,4.9,4.9,0,0,1,2.81,2.81,8.194,8.194,0,0,1,.51,2.749c.071,1.561.086,2.029.086,5.983s-.015,4.421-.086,5.983a8.2,8.2,0,0,1-.51,2.749,4.9,4.9,0,0,1-2.81,2.81,8.2,8.2,0,0,1-2.749.51c-1.561.071-2.029.086-5.983.086s-4.422-.015-5.983-.086a8.194,8.194,0,0,1-2.749-.51,4.9,4.9,0,0,1-2.81-2.81,8.2,8.2,0,0,1-.51-2.749c-.071-1.561-.086-2.029-.086-5.983s.015-4.421.086-5.983a8.194,8.194,0,0,1,.51-2.749,4.9,4.9,0,0,1,2.81-2.81,8.194,8.194,0,0,1,2.749-.51c1.561-.071,2.029-.086,5.983-.086m0-2.668c-4.021,0-4.525.017-6.1.089a10.867,10.867,0,0,0-3.594.688,7.571,7.571,0,0,0-4.33,4.33,10.867,10.867,0,0,0-.688,3.594c-.072,1.579-.089,2.083-.089,6.1s.017,4.525.089,6.1a10.867,10.867,0,0,0,.688,3.594,7.571,7.571,0,0,0,4.33,4.33,10.867,10.867,0,0,0,3.594.688c1.579.072,2.083.089,6.1.089s4.525-.017,6.1-.089a10.867,10.867,0,0,0,3.594-.688,7.571,7.571,0,0,0,4.33-4.33,10.867,10.867,0,0,0,.688-3.594c.072-1.579.089-2.083.089-6.1s-.017-4.525-.089-6.1a10.867,10.867,0,0,0-.688-3.594,7.571,7.571,0,0,0-4.33-4.33,10.867,10.867,0,0,0-3.594-.688c-1.579-.072-2.083-.089-6.1-.089Z" fill="#eee3d6"/>
                                         <path id="Path_128674" data-name="Path 128674" d="M134.238,126.635a7.6,7.6,0,1,0,7.6,7.6A7.6,7.6,0,0,0,134.238,126.635Zm0,12.538a4.935,4.935,0,1,1,4.935-4.935A4.935,4.935,0,0,1,134.238,139.173Z" transform="translate(-115.353 -115.353)" fill="#eee3d6"/>
                                         <circle id="Ellipse_19" data-name="Ellipse 19" cx="1.777" cy="1.777" r="1.777" transform="translate(25.011 9.205)" fill="#eee3d6"/>
                                     </g>
                                 </svg>
                             </div>
                         </div>
                     <?php endforeach; ?>
                 </div>
             </div>
             <div class="flex mr-[60px] justify-between mt-16">
                 <div class="flex gap-x-60">
                     <div class="swiper-prev-el swiper-nav">PREVIOUS</div>
                     <div class="swiper-next-el swiper-nav">NEXT</div>
                 </div>
               <div>
                   <div class="">
                       <span class="swiper-pagination-el text-center txt-h5">1/3</span>
                   </div>
               </div>
             </div>
         </div>
     </div>
 </section>
<?php endif; ?>