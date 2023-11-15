<?php 
$section = $args['data'] ?? false;
$content = $section['content'] ?? false;
$visions = $section['visions'] ?? false;
$left_col = $section['left_column'] ?? false;
$right_col = $section['right_column'] ?? false;
$anchor = $section['anchor'] ?? false;

if($section) :?>
<section id="<?php echo $anchor ?>" class="bg-beige py-20 md:py-26 lg:py-32 xl:py-40">
    <div class="container grid-layout">
        <?php if($content) :?>
            <div class="col-span-full wysiwyg text-center"><?php echo $content ?></div>
        <?php endif ;?>
        
        <?php foreach ($visions as $vision) :?>
            <span class="col-span-full hidden lg:block lg:col-start-1 lg:col-span-1 mb-4 lg:mb-0"><?php echo $vision['label'] ?></span>
            <div class="col-span-full mb-4 lg:col-start-4 lg:col-span-6 wysiwyg text-center"><?php echo $vision['content'] ?></div>
        <?php endforeach;?>
        
        <?php if($left_col['content']) :?>
            <div class="lg:col-start-1 lg:col-span-5 xl:col-start-3 xl:col-span-4 md:mt-20 xl:mt-36 hidden lg:block">
                <h6 class="txt-3 mb-5 text-center"><?php echo $left_col['heading'] ?></h6>
                <div class="wysiwyg text-center"><?php echo $left_col['content']?></div>
            </div>
        <?php endif;?>
        
        <?php if($right_col['content']) :?>
            <div class="g:col-start-8 lg:col-span-5 xl:col-start-7 xl:col-span-4 md:mt-20 xl:mt-36 hidden lg:block">
                <h6 class="txt-3 mb-5 text-center"><?php echo $right_col['heading'] ?></h6>
                <div class="wysiwyg text-center"><?php echo $right_col['content']?></div>
            </div>
        <?php endif ;?>

        <!-- Mobile Accordion -->
        
        <div class="col-span-full accordion-list-group mt-7 lg:hidden">
            <div class="accordion-list col-span-full border-orange border-t border-b pt-4 lg:hidden">
                <div class="accordion-list-button flex justify-between">
                    <h6 class="txt-3 mb-4 w-[60%] lg:mb-5"><?php echo $left_col['heading'] ?></h6>
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="18.406" height="18.406" viewBox="0 0 18.406 18.406">
                        <g id="Group_127238" data-name="Group 127238" transform="translate(-271.5 -2280.5)">
                            <path id="Path_130178" data-name="Path 130178" d="M-6613,11963.164h18.406" transform="translate(6884.501 -9673.664)" fill="none" stroke="#cc885d" stroke-width="1"/>
                            <path id="Path_130179" data-name="Path 130179" d="M-6613,11963.164h18.406" transform="translate(-11682.664 -4314.095) rotate(-90)" fill="none" stroke="#cc885d" stroke-width="1"/>
                        </g>
                    </svg>
                </div>
                <div class="accordion-list-content accordion-list-content__no-gradient w-full" style="max-height: 0px;">
                    <div class="wysiwyg mb-11 pr-9"><?php echo $left_col['content']?></div>
                </div>
            </div>
            <div class="accordion-list col-span-full border-orange border-b pt-4 lg:hidden">
                <div class="accordion-list-button flex justify-between">
                    <h6 class="txt-3 mb-4 w-[60%] lg:mb-5"><?php echo $right_col['heading'] ?></h6>
                    <svg class="" xmlns="http://www.w3.org/2000/svg" width="18.406" height="18.406" viewBox="0 0 18.406 18.406">
                        <g id="Group_127238" data-name="Group 127238" transform="translate(-271.5 -2280.5)">
                            <path id="Path_130178" data-name="Path 130178" d="M-6613,11963.164h18.406" transform="translate(6884.501 -9673.664)" fill="none" stroke="#cc885d" stroke-width="1"/>
                            <path id="Path_130179" data-name="Path 130179" d="M-6613,11963.164h18.406" transform="translate(-11682.664 -4314.095) rotate(-90)" fill="none" stroke="#cc885d" stroke-width="1"/>
                        </g>
                    </svg>
                </div>
                <div class="accordion-list-content accordion-list-content__no-gradient w-full" style="max-height: 0px;">
                    <div class="wysiwyg mb-11 pr-9"><?php echo $right_col['content']?></div>
                </div>
            </div>
            
        </div>

    </div>
</section>
<?php endif ;?>
