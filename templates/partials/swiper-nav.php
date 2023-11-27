<?php
$desktop_absolute = $args['desktop_absolute'] ?? false;

?>
<div class="absolute bottom-3 left-0 w-full z-10 px-3.5 text-beige-light flex justify-between <?php echo ($desktop_absolute) ? 'lg:px-3.5 lg:bottom-3.5 xl:px-6 xl:bottom-5' : 'lg:text-black lg:mt-4 lg:static lg:px-0 xl:mt-6 2xl:mt-7'; ?>">
    <div class="flex gap-x-4 h-fit md:gap-x-5 lg:gap-x-6 xl:gap-x-12 items-center">
        <div class="swiper-prev-el h-fit swiper-nav swiper-nav--small">PREVIOUS</div>
        <div class="swiper-next-el h-fit swiper-nav swiper-nav--small">NEXT</div>
    </div>
    
        <span class="swiper-pagination-el swiper-pagination-el--small"></span>
   
</div>