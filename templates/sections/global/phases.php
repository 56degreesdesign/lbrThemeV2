<?php 
$section = $args['data'] ?? false;
$header = $section['header'] ?? false;
$content = $section['content'] ?? false;
$prev_phase = $section['previous_phase'] ?? false;
$current_phase = $section['current_phase'] ?? false;
if($section) :
?>
    <section class="bg-orange pt-28 pb-32">
        <div class="container grid-layout">
            <h5 class="col-span-6 txt-h5"><?php echo $header?></h5>
            <div class="col-span-3 mb-56 txt-1"><?php echo $content ?></div>
            <div class="col-span-6 pr-5">
                <div class="flex items-center gap-x-6">
                    <?php get_template_part('templates/partials/nav-arrow', null, ['class' => 'rotate-90']) ?>
                    <div class="w-full h-px bg-black"></div>
                </div>
                <div>
                    <span class="text-17 font-bold uppercase mt-3.5 mb-5 inline-block"><?php echo $prev_phase['label'] ?></span>
                    <div class="wysiwyg"><?php echo $prev_phase['content'] ?></div>
                </div>
            </div>
            <div class="col-span-6">
                <div class="flex items-center gap-x-6">
                    <?php get_template_part('templates/partials/nav-arrow', null, ['class' => 'rotate-90', 'fill' => 'white']) ?>
                    <div class="w-full h-px bg-white"></div>
                    <?php get_template_part('templates/partials/nav-arrow', null, ['class' => '', 'fill' => 'white']) ?>
                </div>
                <div>
                    <span class="text-17 font-bold uppercase mt-3.5 mb-5 inline-block"><?php echo $current_phase['label'] ?></span>
                    <div class="wysiwyg"><?php echo $current_phase['content'] ?></div>
                </div>
            </div>
        </div>
    </section>
<?php endif ;?>
