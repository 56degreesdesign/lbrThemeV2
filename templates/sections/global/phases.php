<?php 
$section = $args['data'] ?? false;
$header = $section['header'] ?? false;
$content = $section['content'] ?? false;
$prev_phase = $section['previous_phase'] ?? false;
$current_phase = $section['current_phase'] ?? false;
if($section) :
?>
    <section class="bg-orange pt-11 pb-24 md:pt-16 lg:pt-20 lg:pb-32 xl:pt-28">
        <div class="container grid-layout">
            <h5 class="col-span-full lg:col-span-6 txt-h5 text-center mb-4 lg:mb-0 lg:text-left"><?php echo $header?></h5>
            <div class="col-span-full lg:col-span-3 txt-1 mb-11 lg:mb-56"><?php echo $content ?></div>
            <div class="col-span-full lg:col-span-6 pr-5 hidden lg:block">
                <div class="flex items-center gap-x-6">
                    <?php get_template_part('templates/partials/nav-arrow', null, ['class' => 'rotate-90']) ?>
                    <div class="w-full h-px bg-black"></div>
                </div>
                <div>
                    <span class="text-17 font-bold uppercase mt-3.5 mb-5 inline-block"><?php echo $prev_phase['label'] ?></span>
                    <div class="wysiwyg"><?php echo $prev_phase['content'] ?></div>
                </div>
            </div>
            <div class="col-span-full lg:col-span-6">
                <div class="flex items-center gap-x-6">
                    <?php get_template_part('templates/partials/nav-arrow', null, ['class' => 'rotate-90', 'fill' => '']) ?>
                    <div class="w-full h-px bg-black"></div>
                    <?php get_template_part('templates/partials/nav-arrow', null, ['class' => '', 'fill' => '']) ?>
                </div>
                <div>
                    <span class="text-10 font-bold uppercase my-7 inline-block lg:text-17 lg:mt-3.5 lg:mb-5"><?php echo $current_phase['label'] ?></span>
                    <div class="wysiwyg"><?php echo $current_phase['content'] ?></div>
                </div>
            </div>
        </div>
    </section>
<?php endif ;?>
