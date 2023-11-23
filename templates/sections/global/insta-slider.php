<?php
$section = $args['data'];
$heading = $section['heading'] ?? false;
$slides = $section['slides'] ?? false;
$background = $section['background'] ?? false;
$links = get_field('links', 'option') ?? false;

?>
<?php if($section) : ?>
 <section class="bg-orange relative overflow-hidden pt-11 pb-24 md:py-24 lg:py-32 xl:py-40">
     <img class="absolute top-0 left-0 w-full h-full object-cover pointer-events-none" src="<?php echo $background['url']?>" alt="">
     <div class="container grid-layout">
         <?php if($heading) : ?>
             <div class="col-span-full flex items-center mb-11 md:mb-16 lg:mb-0 lg:col-start-1 lg:col-span-4 ">
                 <h3 class="text-center w-full txt-h2 md:-mt-12 xl:-mt-16">
                     <?php echo $heading ?>
                 </h3>
             </div>
        <?php endif ;?>
         <div class="col-span-full flex justify-center gap-x-2 mb-11 lg:hidden">
             <a class="font-bold inline-block underline-animation-black uppercase" href="<?php echo $links['instagram']['url'] ?>" target="<?php echo $links['instagram']['target'] ?>"><?php echo $links['instagram']['title'] ?></a>
             <a class="font-bold inline-block underline-animation-black uppercase" href="<?php echo $links['facebook']['url'] ?>" target="<?php echo $links['facebook']['target'] ?>"><?php echo $links['facebook']['title'] ?></a>

         </div>
         <div class="col-span-full relative -mx-[25px] md:-mx-10 lg:ml-0 lg:-mr-[78px] lg:col-start-5 lg:col-span-8">
             <?= do_shortcode('[instagram-feed feed=1]'); ?>
         </div>
     </div>
 </section>
<?php endif; ?>