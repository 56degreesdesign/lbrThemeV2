<?php 
$section = $args['data'] ?? false;
$team = $section['team'] ?? false;
$content = $section['content'] ?? false;
$anchor = $section['anchor'] ?? false;

?>
<?php if ($section) : ?>
<section id="<?php echo $anchor ?>" class="bg-beige-light pt-20 pb-20 md:pt-28 md:pb-26 lg:pt-32 lg:pb-40 xl:pt-40 xl:pb-52">
    <div class="container grid-layout">
        <?php if($content) :?>
            <div class="col-span-full wysiwyg text-center mb-3.5 md:mb-9 lg:mb-20"><?php echo $content ?></div>
        <?php endif ;?>
        <div class="col-span-full  lg:grid-cols-2 gap-x-14 gap-y-28 hidden lg:grid">
            <?php foreach ($team as $item) : ?>
            <div class="flex flex-col lg:flex-row col-span-1">
                <h6 class="text-15 font-bold uppercase mb-4 lg:mb-0 lg:w-2/6 lg:pr-7"><?php echo $item['label'] ?></h6>
                <div class="lg:w-4/6">
                    <?php if ($item['logo']) : ?> 
                    <div class="mb-8 min-h-[29px]">
                        <img class="max-h-10" src="<?php echo $item['logo']['url'] ?>" alt="">
                    </div>
                    <?php endif ;?>
                    <div class="wysiwyg">
                        <?php echo $item['content'] ?>
                    </div>
                </div>
            </div>
            <?php endforeach ;?>
        </div>
        
        <!-- Mobile Accordion -->
        <?php $counter = 0; ?>
        <div class="col-span-full accordion-list-group lg:hidden">
            <?php foreach ($team as $item) :?>
            <div class="accordion-list border-orange border-t last-of-type:border-b pt-1.5 <?php echo ($counter === 0) ? 'open' : ''; ?>">
                <div class="accordion-list-button">
                    <div class="text-10 font-bold mb-2"><?php echo $item['label'] ?></div>
                    <div class="flex justify-between">
                        <h6 class="txt-3 mb-6"><?php echo $item['company_name'] ?></h6>
                        <svg class="" xmlns="http://www.w3.org/2000/svg" width="18.406" height="18.406" viewBox="0 0 18.406 18.406">
                            <g id="Group_127238" data-name="Group 127238" transform="translate(-271.5 -2280.5)">
                                <path id="Path_130178" data-name="Path 130178" d="M-6613,11963.164h18.406" transform="translate(6884.501 -9673.664)" fill="none" stroke="#cc885d" stroke-width="1"/>
                                <path id="Path_130179" data-name="Path 130179" d="M-6613,11963.164h18.406" transform="translate(-11682.664 -4314.095) rotate(-90)" fill="none" stroke="#cc885d" stroke-width="1"/>
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="accordion-list-content accordion-list-content__no-gradient w-full" style="max-height: 0px;">
                    <div class="flex flex-col">
                            <?php if ($item['logo']) : ?>
                                <div class="mb-8 min-h-[29px]">
                                    <img class="max-h-10" src="<?php echo $item['logo']['url'] ?>" alt="">
                                </div>
                            <?php endif ;?>
                            <div class="wysiwyg mb-11">
                                <?php echo $item['content'] ?>
                            </div>
                    </div>
                </div>
            </div>
                <?php $counter++; ?>
            <?php endforeach ;?>
        </div>
        
    </div>
</section>
<?php endif ;?>
